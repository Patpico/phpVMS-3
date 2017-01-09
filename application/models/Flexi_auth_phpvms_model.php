<?php
/******************************************************************************
 *  phpVMS-3 - Virtual Airline Administration Software                        *
 *  For more information, visit www.phpvms.net                                *
 *  Forums: http://www.phpvms.net/forum                                       *
 *  Documentation: http://www.phpvms.net/docs                                 *
 *                                                                            *
 *  Portions of phpVMS-3 is a port of the original phpVMS software package    *
 *  developed by Nabeel Shahzad - Copyright (c) 2014 -                        *
 *  License https://opensource.org/licenses/BSD-3-Clause                      *
 *                                                                            *
 * @package      phpVMS3                                                      *
 * @file         Flexi_auth_phpvms_model.php                                  *
 * @author       David Clark <david@simpilotgroup.com>                        *
 * @copyright    Copyright (c) 2017 David Clark                               *
 * @license      License https://opensource.org/licenses/BSD-3-Clause         *
 ******************************************************************************/
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Flexi_auth_phpvms_model extends CI_Model
{

    /**
     * verify_password
     * Verify that a submitted password matches a user database record.
     *
     * customized for phpVMS3 to allow user id login verification from remote client
     */
    public function verify_acars_password($uacc_id, $verify_password)
    {
        if (empty($uacc_id) || empty($verify_password)) {
            return FALSE;
        }

        $sql_select = array(
            $this->auth->tbl_col_user_account['password'],
            $this->auth->tbl_col_user_account['salt']
        );

        $query = $this->db->select($sql_select)
            ->where('uacc_id', $uacc_id)
            ->limit(1)
            ->get($this->auth->tbl_user_account);

        $result = $query->row();

        if ($query->num_rows() !== 1) {
            return FALSE;
        }

        $database_password = $result->{$this->auth->database_config['user_acc']['columns']['password']};
        $database_salt = $result->{$this->auth->database_config['user_acc']['columns']['salt']};
        $static_salt = $this->auth->auth_security['static_salt'];

        require_once(APPPATH . 'libraries/phpass/PasswordHash.php');
        $hash_token = new PasswordHash(8, FALSE);

        return $hash_token->CheckPassword($database_salt . $verify_password . $static_salt, $database_password);
    }

}