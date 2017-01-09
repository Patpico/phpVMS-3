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
 * @file         MY_Form_validation.php                                       *
 * @author       David Clark <david@simpilotgroup.com>                        *
 * @copyright    Copyright (c) 2016 David Clark                               *
 * @license      License https://opensource.org/licenses/BSD-3-Clause         *
 ******************************************************************************/
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation
{
    public $CI;

    public function __construct()
    {
        parent::__construct();
        //set bootstrap delimiters for form validation
        $this->_error_prefix = '<div class="alert alert-danger" role="alert">';
        $this->_error_suffix = '</div>';
    }

    // Check identity is available
    protected function identity_available($identity, $user_id = FALSE)
    {
        if (!$this->CI->flexi_auth->identity_available($identity, $user_id)) {
            $status_message = $this->CI->lang->line('form_validation_duplicate_identity');
            $this->CI->form_validation->set_message('identity_available', $status_message);
            return FALSE;
        }
        return TRUE;
    }

    // Check email is available
    protected function email_available($email, $user_id = FALSE)
    {
        if (!$this->CI->flexi_auth->email_available($email, $user_id)) {
            $status_message = $this->CI->lang->line('form_validation_duplicate_email');
            $this->CI->form_validation->set_message('email_available', str_replace('EMAIL_USED', $email, $status_message));
            return FALSE;
        }
        return TRUE;
    }

    // Check username is available
    protected function username_available($username, $user_id = FALSE)
    {
        if (!$this->CI->flexi_auth->username_available($username, $user_id)) {
            $status_message = $this->CI->lang->line('form_validation_duplicate_username');
            $this->CI->form_validation->set_message('username_available', str_replace('USER_NAME', $username, $status_message));
            return FALSE;
        }
        return TRUE;
    }

    // Validate a password matches a specific users current password.
    protected function validate_current_password($current_password, $identity)
    {
        if (!$this->CI->flexi_auth->validate_current_password($current_password, $identity)) {
            $status_message = $this->CI->lang->line('form_validation_current_password');
            $this->CI->form_validation->set_message('validate_current_password', $status_message);
            return FALSE;
        }
        return TRUE;
    }

    // Validate Password
    protected function validate_password($password)
    {
        $password_length = strlen($password);
        $min_length = $this->CI->settings_model->setting_value('MIN_PASSWORD_LENGTH');

        // Check password length is valid and that the password only contains valid characters.
        if ($password_length >= $min_length && $this->CI->flexi_auth->valid_password_chars($password)) {
            return TRUE;
        }

        $status_message = $this->CI->lang->line('password_invalid');
        $this->CI->form_validation->set_message('validate_password', $status_message);
        return FALSE;
    }

    // Validate reCAPTCHA
    protected function validate_recaptcha()
    {
        if (!$this->CI->flexi_auth->validate_recaptcha()) {
            $status_message = $this->CI->lang->line('captcha_answer_invalid');
            $this->CI->form_validation->set_message('validate_recaptcha', $status_message);
            return FALSE;
        }
        return TRUE;
    }

    // Validate Math Captcha
    protected function validate_math_captcha($input)
    {
        if (!$this->CI->flexi_auth->validate_math_captcha($input)) {
            $status_message = $this->CI->lang->line('captcha_answer_invalid');
            $this->CI->form_validation->set_message('validate_math_captcha', $status_message);
            return FALSE;
        }
        return TRUE;
    }

    //poll validation functions
    public function poll_options_required($str)
    {
        if (!is_array($str)) {
            return (trim($str) == '') ? FALSE : TRUE;
        } else {
            return (!empty($str));
        }
    }

    // Check pilot prefix is available
    public function prefix_available($prefix)
    {
        if ($this->CI->db->where(array('pilot_prefix' => $prefix, 'is_deleted' => '0'))->get('pilot_id_prefixes')->num_rows() > 0) {
            $this->CI->form_validation->set_message('prefix_available', strtoupper($prefix) . ' ' . $this->CI->lang->line('pilotids_prefix_exists'));
            return FALSE;
        } else {
            return TRUE;
        }
    }

    //REMOVE I THINK
    //check pilot prefix is available when editing - skip itself
    //make sure it doesn't exist in other rows
    /*public function edit_prefix_available($prefix)
    {
        if ($this->CI->db->where(array('pilot_prefix' => strtoupper($prefix), 'pilot_prefix_id !=' => $this->CI->input->post('pilot_prefix_id'), 'is_deleted' => '0'))->get('pilot_id_prefixes')->num_rows() > 0) {
            $this->CI->form_validation->set_message('edit_prefix_available', strtoupper($prefix) . ' ' . $this->CI->lang->line('pilotids_prefix_exists'));
            return FALSE;
        }
        return TRUE;

    }*/

    //check pilot id is available when editing - skip itself
    //make sure it doesn't exist in other rows
    public function pilot_id_available($pilot_id, $user_id)
    {
        if ($this->CI->db->where(array('upro_pilot_id' => $pilot_id, 'upro_uacc_fk !=' => $user_id))->get('user_profiles')->num_rows() > 0) {
            $this->CI->form_validation->set_message('pilot_id_available', $pilot_id . ' ' . $this->CI->lang->line('pilotids_prefix_exists'));
            return FALSE;
        }
        return TRUE;

    }
}

/* End of file MY_Form_validation.php */
/* Location: ./application/library/MY_Form_validation.php */