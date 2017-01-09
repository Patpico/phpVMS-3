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
 * @file         app_messages_lang.php                                        *
 * @author       David Clark <david@simpilotgroup.com>                        *
 * @copyright    Copyright (c) 2016 David Clark                               *
 * @license      License https://opensource.org/licenses/BSD-3-Clause         *
 ******************************************************************************/

if (!defined('BASEPATH')) exit('No direct script access allowed');

//admin install check messages
$lang['installer_still_present']                    = 'The installer files are still in place. You should delete these prior to making your site public.';
$lang['install_errors']                             = 'These items must be corrected to allow for full functionality.';
$lang['no_airlines']                                = 'You have no airlines configured.';
$lang['no_airports']                                = 'You have no airports configured.';
$lang['no_aircraft']                                = 'You have no aircraft configured.';
$lang['start_install_over']                         = 'Start Install Again';
$lang['start_install_over_confirm']                 = 'Are you sure? This will delete all data in the database and start with a new install.';
$lang['install_files_delete']                       = 'Are you sure you want to delete all install related files?';
$lang['install_files_deleted_successfully']         = 'Installer files have been deleted.';

//days of week
$lang['sunday']                                     = 'Sunday';
$lang['monday']                                     = 'Monday';
$lang['tuesday']                                    = 'Tuesday';
$lang['wednesday']                                  = 'Wednesday';
$lang['thursday']                                   = 'Thursday';
$lang['friday']                                     = 'Friday';
$lang['saturday']                                   = 'Saturday';

//general terms
$lang['welcome']                                    = 'Welcome';
$lang['yes']                                        = 'Yes';
$lang['no']                                         = 'No';
$lang['all']                                        = 'All';
$lang['first']                                      = 'First';
$lang['last']                                       = 'Last';
$lang['user']                                       = 'User';
$lang['users']                                      = 'Users';
$lang['admin']                                      = 'Admin';
$lang['admins']                                     = 'Admins';
$lang['status_active']                              = 'Active';
$lang['status_inactive']                            = 'Inactive';
$lang['status_enabled']                             = 'Enabled';
$lang['status_disabled']                            = 'Disabled';
$lang['status_unactivated']                         = 'Unapproved';
$lang['status_open']                                = 'Open';
$lang['status_closed']                              = 'Closed';
$lang['approve']                                    = 'Approve';
$lang['activate']                                   = 'Activate';
$lang['deactivate']                                 = 'Deactivate';
$lang['suspend']                                    = 'Suspend';
$lang['suspended']                                  = 'Suspended';
$lang['unsuspend']                                  = 'Unsuspend';
$lang['logout']                                     = 'Logout';
$lang['activity']                                   = 'Activity';
$lang['select']                                     = 'Select';
$lang['selected']                                   = 'Selected';
$lang['send']                                       = 'Send';
$lang['edit']                                       = 'Edit';
$lang['view']                                       = 'View';
$lang['confirm']                                    = 'Confirm';
$lang['update']                                     = 'Update';
$lang['delete']                                     = 'Delete';
$lang['remove']                                     = 'Remove';
$lang['cancel']                                     = 'Cancel';
$lang['save']                                       = 'Save';
$lang['saved']                                      = 'Saved';
$lang['save_changes']                               = 'Save Changes';
$lang['saved_changes']                              = 'Saved Changes';
$lang['save_error']                                 = 'Error Saving';
$lang['search']                                     = 'Search';
$lang['setting']                                    = 'Setting';
$lang['settings']                                   = 'Settings';
$lang['details']                                    = 'Details';
$lang['unknown']                                    = 'Unknown';
$lang['name']                                       = 'Name';
$lang['site_closed']                                = 'Site Closed - Admin Login Only';
$lang['account']                                    = 'Account';
$lang['pilot']                                      = 'Pilot';
$lang['information']                                = 'Information';
$lang['password']                                   = 'Password';
$lang['address']                                    = 'Address';
$lang['assignment']                                 = 'Assignment';
$lang['date']                                       = 'Date';
$lang['membership']                                 = 'Membership';
$lang['unassigned']                                 = 'Unassigned';
$lang['data']                                       = 'Data';
$lang['available']                                  = 'Available';
$lang['home']                                       = 'Home';
$lang['force']                                      = 'Force';
$lang['check']                                      = 'Check';
$lang['version']                                    = 'Version';

//table headers
$lang['status']                                     = 'Status';
$lang['options']                                    = 'Options';
$lang['hours']                                      = 'Hours';
$lang['flights']                                    = 'Flights';
$lang['added_on']                                   = 'Added On';
$lang['airline']                                    = 'Airline';
$lang['registration']                               = 'Registration';
$lang['icao']                                       = 'IACO';
$lang['iata']                                       = 'IATA';
$lang['callsign']                                   = 'Callsign';
$lang['country']                                    = 'Country';
$lang['type']                                       = 'Type';
$lang['lattitude']                                  = 'Latitude';
$lang['lattitude_abv']                              = 'Lat';
$lang['longtitude']                                 = 'Longitude';
$lang['longitude_abv']                              = 'Lon';
$lang['minimum']                                    = 'Minimum';
$lang['minimum_abv']                                = 'Min';
$lang['maximum']                                    = 'Maximum';
$lang['maximum_abv']                                = 'Max';
$lang['hub']                                        = 'Hub';
$lang['order']                                      = 'Order';
$lang['title']                                      = 'Title';
$lang['posted']                                     = 'Posted';
$lang['template']                                   = 'Template';
$lang['position']                                   = 'Position';
$lang['abbreviation']                               = 'Abbreviation';
$lang['code']                                       = 'Code';
$lang['manage']                                     = 'Manage';
$lang['email']                                      = 'Email';
$lang['username']                                   = 'Username';
$lang['joined']                                     = 'Joined';
$lang['last']                                       = 'Last';
$lang['login']                                      = 'Login';
$lang['description']                                = 'Description';
$lang['group']                                      = 'Group';
$lang['privilege']                                  = 'Privilege';
$lang['privileges']                                 = 'Privileges';
$lang['log']                                        = 'Log';
$lang['profile']                                    = 'Profile';
$lang['signature']                                  = 'Signature';
$lang['site']                                       = 'Site';


$lang['register_already']                           = 'You are already registered and logged in.';
$lang['register_closed']                            = 'Registration is currently closed.';
$lang['register_successful_admin_approval'] 		= 'Your account has successfully been created and is awaiting approval by a site admin.';
$lang['register_successful_activation_sent'] 		= 'Your account has successfully been created and an activation email has been sent.';
$lang['register_successful_immediate']       		= 'Your account has successfully been created. You can now login.';

$lang['subject_email_account_registered']           = ' - Account Registered';//for registration email subject line
$lang['subject_email_account_approved']             = ' - Account Approved';//for account approval email subject line

$lang['contact_submitted']                          = 'New Contact Form Submitted';//contact form admin email subject line
$lang['contact_thankyou']                           = 'Thank You For Contacting Us';//contact form email to submitter subject line

//admin section

$lang['admin_dash']                                 = 'Administration Dashboard';
$lang['dashboard']                                  = 'Dashboard';
$lang['dashboard_account_awaiting_activation']      = 'There is %#% account awaiting activation.'; //%#% strreplace for count
$lang['dashboard_accounts_awaiting_activation']     = 'There are %#% accounts awaiting activation.'; //%#% strreplace for count

$lang['airlines_dash']                              = 'Airlines';
$lang['airlines_all']                               = 'All Airlines';
$lang['airlines_add']                               = 'Add Airline';
$lang['airlines_detail']                            = 'Airline Details';
$lang['airlines_dash']                              = 'Airlines';
$lang['airlines_added_success']                     = 'Airline Successfully Added';
$lang['airlines_added_error']                       = 'Adding Airline Error';
$lang['airlines_update_success']                    = 'Airline Successfully Updated';
$lang['airlines_update_error']                      = 'Error Updating Airline';
$lang['airlines_delete']                            = 'Delete Airline';
$lang['airlines_delete_prompt']                     = 'Are you sure you want to delete this airline?';
$lang['airlines_delete_success']                    = 'Airline Successfully Deleted';

$lang['airports_dash']                              = 'Airports';
$lang['airports_add']                               = 'Add Airport';
$lang['airports_all']                               = 'All Airports';
$lang['airports_added_success']                     = 'Airport Successfully Added';
$lang['airports_added_error']                       = 'Adding Airport Error';
$lang['airports_update_success']                    = 'Airport Successfully Updated';
$lang['airports_update_error']                      = 'Error Updating Airport';
$lang['airports_delete']                            = 'Delete Airport';
$lang['airports_delete_prompt']                     = 'Are you sure you want to delete this airport?';
$lang['airports_delete_success']                    = 'Airport Successfully Deleted';
$lang['airports_delete_error']                      = 'Error Deleting Airport';

$lang['aircraft_dash']                              = 'Aircraft';
$lang['aircraft_database']                          = 'Aircraft Database';
$lang['aircraft_details']                           = 'Aircraft Details';
$lang['aircraft_all']                               = 'All Aircraft';
$lang['aircraft_add']                               = 'Add Aircraft';
$lang['aircraft_edit']                              = 'Edit Aircraft';
$lang['aircraft_must_add_airline']                  = 'An airline must be added before adding any aircraft.';
$lang['aircraft_added_success']                     = 'Aircraft Successfully Added';
$lang['aircraft_added_error']                       = 'Adding Aircraft Error';
$lang['aircraft_update_success']                    = 'Aircraft Successfully Updated';
$lang['aircraft_update_error']                      = 'Error Updating Aircraft';
$lang['aircraft_delete']                            = 'Delete Aircraft';
$lang['aircraft_delete_prompt']                     = 'Are you sure you want to delete this aircraft?';
$lang['aircraft_type_model']                        = 'Type/Model';

$lang['pilotids_dash']                              = 'Pilot IDs';
$lang['pilotids_id']                                = 'Pilot ID';
$lang['pilotids_ids']                               = 'Pilot IDs';
$lang['pilotids_add_prefix']                        = 'Add New Prefix';
$lang['pilotids_new_prefix']                        = 'New Pilot ID Prefix';
$lang['pilotids_new_prefix_status']                 = 'New Pilot ID Prefix Status';
$lang['pilotids_edit_prefix']                       = 'Edit Pilot ID Prefix';
$lang['pilotids_edit_prefix_status']                = 'Edit Pilot ID Prefix Status';
$lang['pilotids_prefix_exists']                     = 'Already Exists In The System';
$lang['pilotids_id_prefix']                         = 'Pilot ID Prefix';
$lang['pilotids_id_prefixes']                       = 'Pilot ID Prefixes';
$lang['pilotids_prefix_delete']                     = 'Delete Prefix';
$lang['pilotids_prefix_delete_prompt']              = 'Are you sure you want to delete this prefix? Any pilots currently using this prefix will be set to the default prefix.';
$lang['pilotids_id_padding']                        = 'Pilot ID Padding';
$lang['pilotids_next_available']                    = 'Next pilot ID available';
$lang['pilotids_edit_id']                           = 'Edit Pilot ID';
$lang['pilotids_current_preview']                   = 'Current Pilot ID Configuration';

$lang['api_dash']                                   = 'phpVMS API';
$lang['api_inactive']                               = 'phpVMS API Not Active';
$lang['api_database']                               = 'phpVMS API';

$lang['awards_dash']                                = 'Awards';
$lang['awards_all']                                 = 'All Awards';
$lang['awards_update_success']                      = 'Award Successfully Updated';
$lang['awards_update_error']                        = 'Error Updating Award';
$lang['awards_add']                                 = 'Add Award';
$lang['awards_add_success']                         = 'Award Successfully Added';
$lang['awards_add_error']                           = 'Error Adding Award';
$lang['awards_edit']                                = 'Edit Award';
$lang['awards_delete']                              = 'Delete Award';
$lang['awards_delete_prompt']                       = 'Are you sure you want to delete this award?';
$lang['awards_delete_success']                      = 'Award Successfully Deleted';

$lang['blocks_dash']                                = 'Blocks';
$lang['blocks_all']                                 = 'All Blocks';
$lang['blocks_update_success']                      = 'Block Successfully Updated';
$lang['blocks_update_error']                        = 'Error Updating Block';
$lang['blocks_add']                                 = 'Add Block';
$lang['blocks_add_success']                         = 'Block Successfully Added';
$lang['blocks_add_error']                           = 'Error Adding Block';
$lang['blocks_edit']                                = 'Edit Block';
$lang['blocks_delete']                              = 'Delete Block';
$lang['blocks_delete_prompt']                       = 'Are you sure you want to delete this block?';
$lang['blocks_delete_success']                      = 'Block Successfully Deleted';
$lang['blocks_unknown']                             = 'Unknown Block';
$lang['blocks_prefix']                              = '<div class="well">';
$lang['blocks_suffix']                              = '</div>';

$lang['ranks_dash']                                = 'Ranks';
$lang['ranks_all']                                 = 'All Ranks';
$lang['ranks_update_success']                      = 'Rank Successfully Updated';
$lang['ranks_update_error']                        = 'Error Updating Rank';
$lang['ranks_add']                                 = 'Add Rank';
$lang['ranks_add_success']                         = 'Rank Successfully Added';
$lang['ranks_add_error']                           = 'Error Adding Rank';
$lang['ranks_edit']                                = 'Edit Rank';
$lang['ranks_delete']                              = 'Delete Rank';
$lang['ranks_delete_prompt']                       = 'Are you sure you want to delete this rank?';
$lang['ranks_delete_success']                      = 'Rank Successfully Deleted';

$lang['contact_us']                                 = 'Contact Us';

$lang['email_dash']                                 = 'Email';

$lang['email_templates_dash']                       = 'Email Templates';
$lang['email_templates_all']                        = 'All Email Templates';
$lang['email_all']                                  = 'All Email';
$lang['email_edit']                                 = 'Edit Email Template';

$lang['forum_dash']                                 = 'Forum';

$lang['groups_dash']                                = 'Groups';
$lang['groups_all']                                 = 'All Groups';
$lang['groups_update_success']                      = 'Group Successfully Updated';
$lang['groups_update_error']                        = 'Error Updating Group';
$lang['groups_add']                                 = 'Add Group';
$lang['groups_add_success']                         = 'Group Successfully Added';
$lang['groups_add_error']                           = 'Error Adding Group';
$lang['groups_edit']                                = 'Edit Group';
$lang['groups_delete']                              = 'Delete Group';
$lang['groups_delete_prompt']                       = 'Are you sure you want to delete this group?';
$lang['groups_delete_success']                      = 'Group Successfully Deleted';

$lang['hubs_dash']                                  = 'Hubs';
$lang['hubs_assignment']                            = 'Hub Assignment';
$lang['hubs_has_users']                             = 'This Airport Has Users Assigned';
$lang['hubs_delete_users_warning']                  = 'Deleting This Airport Will Move All Assigned Members To An Unassigned Status.';
$lang['hubs_has_aircraft']                          = 'This Airport Has Aircraft Assigned';
$lang['hubs_delete_aircraft_warning']               = 'Deleting This Airport Will Move All Assigned Aircraft To An Unassigned Status.';

$lang['maps_public']                                = 'Live Map';

$lang['news_public']                                = 'News';

$lang['news_dash']                                  = 'News';
$lang['news_add_success']                           = 'News Successfully Added';
$lang['news_add_error']                             = 'Error Adding News';
$lang['news_delete']                                = 'Delete News Item';
$lang['news_delete_prompt']                         = 'Are you sure you want to delete this news item?';
$lang['news_delete_success']                        = 'News Item Successfully Deleted';

$lang['privileges_dash']                            = 'Privileges';
$lang['privileges_all']                             = 'All Privileges';
$lang['privileges_add']                             = 'Add Privilege';
$lang['privileges_edit']                            = 'Edit Privilege';

$lang['schedules_dash']                             = 'Schedules';
$lang['schedules_all']                              = 'All Schedules';
$lang['schedules_add']                              = 'Add Schedule';
$lang['schedules_add_connection']                   = 'Add Connecting Schedule';
$lang['schedules_connection_added_success']         = 'Connecting scheduled added successfully.';
$lang['schedules_connection_added_error']           = 'Error adding connecting schedule.';
$lang['schedules_already_has_connection']           = 'Schedule %var% already has a connecting schedule.';//%var% is str_replacement in cotroller with flight number
$lang['schedules_connecting_schedule']              = 'Connecting Schedule';
$lang['schedules_save']                             = 'Save Schedule';
$lang['schedules_detail']                           = 'Schedule Details';
$lang['schedules_update_success']                   = 'Schedule Successfully Updated';
$lang['schedules_added_success']                    = 'Schedule Successfully Added';
$lang['schedules_update_error']                     = 'Error Updating Schedule';
$lang['schedules_delete_success']                   = 'Schedule Successfully Deleted';
$lang['schedules_build']                            = 'Build Schedules';
$lang['schedules_delete']                           = 'Delete Schedule';
$lang['schedules_delete_prompt']                    = 'Are you sure you want to delete this schedule?';

$lang['settings_dash']                              = 'Settings';
$lang['settings_site']                              = 'Site';
$lang['settings_registration']                      = 'Registration';
$lang['settings_pilotids']                          = 'Pilot ID';
$lang['settings_registration_open']                 = 'Registration Open';
$lang['settings_recaptcha']                         = 'ReCaptcha';
$lang['settings_kacars']                            = 'kAcars';
$lang['settings_sendgrid']                          = 'Sendgrid';
$lang['settings_email']                             = 'Email';
$lang['settings_localization']                      = 'Localization';
$lang['settings_date_format']                       = 'Date Format';

$lang['staff_dash']                                 = 'Staff';
$lang['staff_add_staff']                            = 'Add Staff';
$lang['staff_add_staff_success']                    = 'Staff Successfully Added';
$lang['staff_add_staff_error']                      = 'Error Adding Staff';
$lang['staff_delete']                               = 'Delete Staff Member';
$lang['staff_delete_prompt']                        = 'Are you sure you want to delete this staff member?';
$lang['staff_delete_success']                       = 'Staff Member Successfully Deleted';
$lang['staff_positions']                            = 'Staff Positions';
$lang['staff_add_position']                         = 'Add Staff Position';
$lang['staff_must_add_position']                    = 'A staff position must be added before adding staff members.';
$lang['staff_add_position_success']                 = 'Staff Position Successfully Added';
$lang['staff_add_position_error']                   = 'Error Adding Staff Position';
$lang['staff_edit']                                 = 'Edit Staff Member';
$lang['staff_edit_position']                        = 'Edit Staff Position';
$lang['staff_position_update_success']              = 'Staff Position Successfully Updated';
$lang['staff_position_update_error']                = 'Error Updating Staff Position';
$lang['staff_position_delete']                      = 'Delete Staff Position';
$lang['staff_position_delete_prompt']               = 'Are you sure you want to delete this staff position? This will also delete any associated staff members.';

$lang['update_dash']                                = 'Update';
$lang['update_current_fetch_error']                 = 'Unable to fetch current update version.';
$lang['update_force_complete']                      = 'Completed Forced Update Of Version File.';
$lang['update_current_version']                     = 'Current Version';
$lang['update_installed_version']                   = 'Installed Version';
$lang['update_current']                             = 'Installed version is up to date.';
$lang['update_major_current']                       = 'Major Version Is Current';
$lang['update_major_behind']                        = 'Major Version Is %ver% version(s) behind current.'; //%ver% for template string replace
$lang['update_minor_behind']                        = 'Minor Version Is %ver% version(s) behind current.'; //%ver% for template string replace
$lang['update_version_ahead']                       = 'The version installed is ahead of the current version.';
$lang['update_get_update_files']                    = 'Download Of Update Files.';
$lang['update_no_files_to_download']                = 'No files need to be downloaded.';
$lang['update_updates_waiting']                     = 'There are downloaded updates waiting to be installed.';
$lang['update_install']                             = 'Install update';
$lang['update_install_all']                         = 'Install All Updates';
$lang['update_success']                             = 'Update to version %ver% completed.';//%ver% for template string replace

$lang['logs_dash']                                  = 'Logs';
$lang['logs_all']                                   = 'All Logs';
$lang['logs_general']                               = 'General Logs';
$lang['logs_airline']                               = 'Airline Logs';
$lang['logs_airport']                               = 'Airport Logs';
$lang['logs_aircraft']                              = 'Aircraft Logs';
$lang['logs_news']                                  = 'News Logs';
$lang['logs_ranks']                                 = 'Ranks Logs';
$lang['logs_awards']                                = 'Awards Logs';
$lang['logs_logs']                                  = 'Activity Logs';
$lang['logs_news']                                  = 'News Logs';
$lang['logs_blocks']                                = 'Blocks Logs';
$lang['logs_email']                                 = 'Email Logs';
$lang['logs_delete']                                = 'Delete Logs';
$lang['logs_delete_prompt']                         = 'Are you sure you want to delete this log?';
$lang['logs_delete_success']                        = 'Logs Successfully Deleted';
$lang['logs_all_delete']                            = 'Delete Logs';
$lang['logs__delete_prompt']                        = 'Are you sure you want to delete all logs?';
$lang['logs_0_delete_prompt']                       = 'Are you sure you want to delete all general logs?';
$lang['logs_1_delete_prompt']                       = 'Are you sure you want to delete all airline logs?';
$lang['logs_2_delete_prompt']                       = 'Are you sure you want to delete all aircraft logs?';
$lang['logs_3_delete_prompt']                       = 'Are you sure you want to delete all airport logs?';
$lang['logs_4_delete_prompt']                       = 'Are you sure you want to delete all news logs?';
$lang['logs_5_delete_prompt']                       = 'Are you sure you want to delete all awards logs?';
$lang['logs_6_delete_prompt']                       = 'Are you sure you want to delete all ranks logs?';
$lang['logs_7_delete_prompt']                       = 'Are you sure you want to delete all activity logs?';
$lang['logs_8_delete_prompt']                       = 'Are you sure you want to delete all blocks logs?';
$lang['logs_9_delete_prompt']                       = 'Are you sure you want to delete all email logs?';

$lang['admin_settings']                             = 'Site Settings';
$lang['admin_settings_edit']                        = 'Edit Site Settings';

$lang['pirep_empty_dep_des']                        = 'The departure and-or arrival airport fields are blank';
$lang['pirep_unknown_dep_des']                      = 'The departure and-or arrival airport is not recognized by the system';

$lang['admin_groups']                               = 'User Groups';
$lang['admin_groups_add_group']                     = 'Add New User Group';
$lang['admin_groups_edit_group']                    = 'Edit User Group';
$lang['admin_groups_edit_privileges']               = 'Edit Group Privileges';
$lang['admin_groups_has_privileges']                = 'This Group Is Marked As Full Admin, All Permissions Are Granted.';

$lang['admin_privileges']                           = 'User Privileges';
$lang['admin_privileges_add']                       = 'Add New User Privilege';
$lang['admin_privileges_edit']                      = 'Edit User Privilege';

$lang['settings_updated']                           = 'Settings Updated';

//admin user function messages
$lang['users_dash']                                 = 'Users';
$lang['admin_users']                                = 'Site Users';
$lang['admin_users_edit']                           = 'Edit User Account';
$lang['admin_users_approve']                        = 'Approve User Account';
$lang['admin_users_approved']                       = 'User Account Approved';
$lang['admin_users_account_activated']              = 'User Account Activated.';
$lang['admin_users_account_deactivated']            = 'User Account Deactivated.';
$lang['admin_users_account_suspended']              = 'User Account Suspended.';
$lang['admin_users_account_unsuspended']            = 'User Account Unsuspended.';
$lang['admin_users_account_deleted']                = 'User Account Deleted.';
$lang['admin_users_update_failed']                  = 'User update failed.';
$lang['admin_users_email_failed']                   = 'Email to user failed to send.';

//admin error messages
$lang['admin_error_user_doesnt_exist']              = 'User Does Not Exist.';
$lang['admin_error_user_master_admin_edit']         = 'The Master Admin\'s Status Can Not Be Edited.';

//admin confirm messages
$lang['confirm_activate_user']                      = 'Are you sure you want to activate this user?';
$lang['confirm_deactivate_user']                    = 'Are you sure you want to deactivate this user?';
$lang['confirm_suspend_user']                       = 'Are you sure you want to suspend this user?';
$lang['confirm_unsuspend_user']                     = 'Are you sure you want to unsuspend this user?';
$lang['confirm_delete_user']                        = 'Are you sure you want to delete this user?';
$lang['confirm_delete_group']                       = 'Are you sure you want to delete this group?';

//privileges
$lang['must_be_logged_in']                          = "You must be logged in to access this content.";
$lang['no_privileges']                              = "You do not have privileges to perform this task or access this content.";
$lang['privilege_does_not_exist']                   = "Privilege does not exist.";

//activity log messages
$lang['activity_added_api_aircraft']                = 'Aircraft added using phpVMS API';
$lang['activity_added_api_airline']                 = 'Airline added using phpVMS API';
$lang['activity_added_api_airport']                 = 'Airport added using phpVMS API';

$lang['activity_added_airline']                     = 'Airline added.';
$lang['activity_deleted_airline']                   = 'Airline deleted.';
$lang['activity_edited_airline']                    = 'Airline edited.';
$lang['activity_status_change_airline']             = 'Airline status changed.';

$lang['activity_added_aircraft']                    = 'Aircraft added.';
$lang['activity_deleted_aircraft']                  = 'Aircraft deleted.';
$lang['activity_edited_aircraft']                   = 'Aircraft edited.';
$lang['activity_status_change_aircraft']            = 'Aircraft status changed.';

$lang['activity_added_airport']                     = 'Airport added.';
$lang['activity_deleted_airport']                   = 'Airport deleted.';
$lang['activity_edited_airport']                    = 'Airport edited.';
$lang['activity_status_change_airport']             = 'Airport status changed.';
$lang['activity_hub_status_change_airport']         = 'Airport hub status changed.';

$lang['activity_deleted_schedule']                      = 'Schedule deleted.';

$lang['activity_added_block']                       = 'Block added.';
$lang['activity_deleted_block']                     = 'Block deleted.';
$lang['activity_edited_block']                      = 'Block edited.';

$lang['activity_added_award']                       = 'Award added.';
$lang['activity_deleted_award']                     = 'Award deleted.';
$lang['activity_edited_award']                      = 'Award edited.';
$lang['activity_status_change_award']               = 'Award status changed.';
$lang['activity_order_change_award']                = 'Award order changed.';

$lang['activity_added_rank']                        = 'Rank added.';
$lang['activity_deleted_rank']                      = 'Rank deleted.';
$lang['activity_edited_rank']                       = 'Rank edited.';
$lang['activity_status_change_rank']                = 'Rank status changed.';
$lang['activity_order_change_rank']                 = 'Rank order changed.';

$lang['activity_added_news']                        = 'News added.';
$lang['activity_deleted_news']                      = 'News deleted.';
$lang['activity_edited_news']                       = 'News edited.';
$lang['activity_status_change_news']                = 'News status changed.';
$lang['activity_order_change_news']                 = 'News order changed.';

$lang['activity_edited_email_template']             = 'Email template edited';

$lang['activity_deleted_log']                       = 'Log deleted.';
$lang['activity_deleted_all_log']                   = 'All logs deleted.';

$lang['activity_ran_install']                       = 'Installed System.';
$lang['activity_deleted_install_files']             = 'Deleted all install files.';

$lang['activity_user_registered']                   = 'New user registered - Email: ';

$lang['activity_airport_added_acars']               = 'Airport %var% added via ACARS';//%var% = string replacement for airport icao
$lang['activity_airport_added_acars_failure']       = 'Airport %var% failed to be added via ACARS';//%var% = string replacement for airport icao
$lang['activity_airport_added_pirep']               = 'Airport %var% added via PIREP processing';//%var% = string replacement for airport icao
$lang['activity_airport_added_pirep_failure']       = 'Airport %var% failed to be added via PIREP processing';//%var% = string replacement for airport icao

//flexi-auth messages//

// Account Creation
$lang['account_creation_successful']				= 'Your account has successfully been created.';
$lang['account_creation_unsuccessful']				= 'Unable to create account.';
$lang['account_creation_duplicate_email']			= 'An account with this email address already exists.';
$lang['account_creation_duplicate_username']		= 'An account with this username already exists.';
$lang['account_creation_duplicate_identity'] 		= 'An account with this identity already exists.';
$lang['account_creation_insufficient_data']			= 'Insufficient data to create an account. Ensure a valid identity and password are submitted.';

// Password
$lang['password_invalid']							= "The %s field is invalid.";
$lang['password_change_successful'] 	 	 		= 'Password has successfully been changed.';
$lang['password_change_unsuccessful'] 	  	 		= 'Your submitted password does not match our records.';
$lang['password_token_invalid']  					= 'Your submitted password token is invalid or has expired.';
$lang['email_new_password_successful']				= 'A new password has been emailed to you.';
$lang['email_forgot_password_successful']	 		= 'An email has been sent to reset your password.';
$lang['email_forgot_password_unsuccessful']  		= 'Unable to reset password.';

// Activation
$lang['activate_successful']						= 'Account has been activated.';
$lang['activate_unsuccessful']						= 'Unable to activate account.';
$lang['deactivate_successful']						= 'Account has been deactivated.';
$lang['deactivate_unsuccessful']					= 'Unable to deactivate account.';
$lang['activation_email_successful'] 	 			= 'An activation email has been sent.';
$lang['activation_email_unsuccessful']  	 		= 'Unable to send activation email.';
$lang['account_requires_activation'] 				= 'Your account needs to be activated via email.';
$lang['account_already_activated'] 					= 'Your account has already been activated.';
$lang['email_activation_email_successful']			= 'An email has been sent to activate your new email address.';
$lang['email_activation_email_unsuccessful']		= 'Unable to send an email to activate your new email address.';

// Login / Logout
$lang['login_successful']							= 'You have been successfully logged in.';
$lang['login_unsuccessful']							= 'Your submitted login details are incorrect.';
$lang['logout_successful']							= 'You have been successfully logged out.';
$lang['login_details_invalid'] 						= 'Your login details are invalid.';
$lang['captcha_answer_invalid'] 					= 'CAPTCHA answer is incorrect.';
$lang['login_attempts_exceeded'] 					= 'The maximum login attempts have been exceeded, please wait a few moments before trying again.';
$lang['login_session_expired']						= 'Your login session has expired.';
$lang['account_suspended'] 							= 'Your account has been suspended.';

// Account Changes
$lang['update_successful']							= 'Account information has been successfully updated.';
$lang['update_unsuccessful']						= 'Unable to update account information.';
$lang['delete_successful']							= 'Account information has been successfully deleted.';
$lang['delete_unsuccessful']						= 'Unable to delete account information.';

// Form Validation
$lang['form_validation_duplicate_identity'] 		= "An account with this email address or username already exists.";
$lang['form_validation_duplicate_email'] 			= "EMAIL_USED is not available.";
$lang['form_validation_duplicate_username'] 		= "Username USER_NAME is not available.";
$lang['form_validation_current_password'] 			= "The %s field is invalid.";