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
 * @file         Flexi_auth_phpvms.php                                        *
 * @author       David Clark <david@simpilotgroup.com>                        *
 * @copyright    Copyright (c) 2016 David Clark                               *
 * @license      License https://opensource.org/licenses/BSD-3-Clause         *
 ******************************************************************************/
if (!defined('BASEPATH')) exit('No direct script access allowed');

$CI =& get_instance();

class Flexi_auth_phpvms extends Flexi_auth
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * insert_user and wait for admin confirmation
     * Inserts user account and profile data, returning the users new id.
     */
    public function insert_user_admin_confirm($email, $username = FALSE, $password, $user_data)
    {
        $user_id = $this->CI->flexi_auth_model->insert_user($email, $username, $password, $user_data, '1');

        if ($user_id) {
            //user was successfully registered
            $sql_select = array(
                $this->CI->auth->primary_identity_col,
                //$this->CI->auth->tbl_col_user_account['activation_token']
            );

            $sql_where[$this->CI->auth->tbl_col_user_account['id']] = $user_id;

            $user = $this->CI->flexi_auth_model->get_users($sql_select, $sql_where)->row();

            if (!is_object($user)) {
                $this->CI->flexi_auth_model->set_error_message('account_creation_unsuccessful', 'config');
                return FALSE;
            }

            $identity = $user->{$this->CI->auth->db_settings['primary_identity_col']};

            // Prepare account registered email.
            if (!empty($identity)) {
                // Set email data.
                $email_to = $email;
                $email_title = $this->CI->lang->line('subject_email_account_registered');

                $user_data = array(
                    'username' => $username,
                    'user_id' => $user_id,
                    'identity' => $identity
                );
                $template = $this->CI->auth->email_settings['email_template_directory'] . 'registered_account.tpl.php';

                if ($this->CI->flexi_auth_model->send_email($email_to, $email_title, $user_data, $template)) {
                    //send email to admin to notify of registration
                    $this->CI->load->model('settings_model');
                    $this->CI->flexi_auth_model->send_email($this->CI->settings_model->setting_value('REGISTRATION_ NOTICES'), $email_title, $user_data,
                        $this->CI->auth->email_settings['email_template_directory'] . 'account_registered.tpl.php');
                    //end admin email

                    $this->CI->flexi_auth_model->set_status_message('activation_email_successful', 'config');
                    return $user_id;
                }

                $this->CI->flexi_auth_model->set_error_message('activation_email_unsuccessful', 'config');
                return FALSE;
            }

            $this->CI->flexi_auth_model->set_status_message('account_creation_successful', 'config');
            return $user_id;
        } else {
            $this->CI->flexi_auth_model->set_error_message('account_creation_unsuccessful', 'config');
            return FALSE;
        }
    }


    public function approve_user($user_id, $user_data, $profile_data)
    {
        if ($this->CI->flexi_auth->update_user($user_id, $profile_data)) {
            //account approved successfully
            //check to see if new users get an email
            if ($this->CI->settings_model->setting_value('REGISTRATION_APPROVED_EMAIL_TO_USER') == '1') {
                //user gets an email - lets check if email verification is needed also
                if ($this->CI->settings_model->setting_value('REGISTRATION_APPROVED_EMAIL_VERIFICATION') == '1') {
                    //user also needs to verify email address so send it with an approval link
                    //leaving the active flag false - it will be changed when the user verifies using the link in th email
                    $template = $this->CI->auth->email_settings['email_template_directory'] . 'account_activated_verification_included.tpl.php';
                } else {
                    //set the active flag and lets clear the activation key field in the db - we don't need it anyway
                    $this->CI->flexi_auth->update_user($user_id, array('uacc_activation_token' => '', $this->CI->flexi_auth->db_column('user_acc', 'active') => '1'));
                    //user just gets an approval email
                    $template = $this->CI->auth->email_settings['email_template_directory'] . 'account_activated_notice.tpl.php';
                }
                //send the email
                $email_title = $this->CI->lang->line('subject_email_account_approved');
                if ($this->CI->flexi_auth_model->send_email($user_data->uacc_email, $email_title, $user_data, $template)) {
                    //email went through without issue
                    $this->CI->session->set_flashdata('success', $this->CI->lang->line('admin_users_approved'));
                    return TRUE;
                }
                $this->CI->session->set_flashdata('error', $this->CI->lang->line('admin_users_email_failed'));
                return FALSE;
            } else {
                //no email to be sent - lets just approve and activate it
                //set the active flag and lets clear the activation key field in the db - we don't need it anyway
                if ($this->CI->flexi_auth->update_user($user_id, array('uacc_activation_token' => '', $this->CI->flexi_auth->db_column('user_acc', 'active') => '1'))) {
                    $this->CI->session->set_flashdata('success', $this->CI->lang->line('admin_users_approved'));
                    return TRUE;
                } else {
                    $this->CI->session->set_flashdata('error', $this->CI->lang->line('admin_users_update_failed'));
                    return FALSE;
                }
            }
        } else {
            //something really went FUBAR from the first account update
            $this->CI->session->set_flashdata('error', $this->CI->lang->line('admin_users_update_failed'));
            return FALSE;
        }
    }
}

