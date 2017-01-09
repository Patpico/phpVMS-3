<?php
/******************************************************************************
 * phpVMS-3 - Virtual Airline Administration Software                         *
 * For more information, visit www.phpvms.net                                 *
 * Forums: http://www.phpvms.net/forum                                        *
 * Documentation: http://www.phpvms.net/docs                                  *
 *                                                                            *
 * Portions of phpVMS-3 is a port of the original phpVMS software package     *
 * developed by Nabeel Shahzad - Copyright (c) 2014                           *
 * License https://opensource.org/licenses/BSD-3-Clause                       *
 *                                                                            *
 * @package      phpVMS3                                                      *
 * @file         navigation.php                                               *
 * @author       David Clark <david@simpilotgroup.com>                        *
 * @copyright    Copyright (c) 2017 David Clark                               *
 * @license      License https://opensource.org/licenses/BSD-3-Clause         *
 ******************************************************************************/
if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
</head>
<body>

    <nav class="navbar navbar-<?php if($this->settings_model->setting_value('ADMIN_THEME') == 'header'){echo 'inverse';}else{echo 'default';} ?> navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-plane"></i> <?php echo $sitename; ?></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo site_url(''); ?>"><i class="fa fa-globe"></i> <?php echo $this->lang->line('site'); ?></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-fw fa-user"></i> <?php echo $username; ?><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('profile'); ?>"><i class="fa fa-fw fa-user"></i> <?php echo $this->lang->line('profile'); ?></a></li>
                            <li><a href="<?php echo site_url('forum/add_signature'); ?>"><i class="fa fa-fw fa-id-card"></i> <?php echo $this->lang->line('signature'); ?></a></li>
                            <li><a href="<?php echo site_url('logout'); ?>"><i class="fa fa-fw fa-sign-out"></i> <?php echo $this->lang->line('logout'); ?></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container-fluid">
    <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
        <div class="nav nav-sidebar">
            <li><a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-fw fa-dashboard"></i> <?php echo $this->lang->line('dashboard'); ?></a></li>
            <li>
                <a role="button" data-toggle="collapse" href="#one">
                    <i class="fa fa-fw fa-users"></i> <?php echo $this->lang->line('users_dash'); ?> <i class="fa fa-fw fa-angle-double-down"></i></a>
                <div id="one" class="panel-collapse collapse<?php
                if($this->router->fetch_class() == 'users' ||
                    $this->router->fetch_class() == 'groups' ||
                    $this->router->fetch_class() == 'privileges'){echo ' in ';} ?>" role="tabpanel">
                    <ul class="list-group nav nav-sidebar dropdown-sidebar">
                        <li><a href="<?php echo site_url('admin/users'); ?>"><?php echo $this->lang->line('users_dash'); ?></a></li>
                        <li><a href="<?php echo site_url('admin/groups'); ?>"><?php echo $this->lang->line('groups_dash'); ?></a></li>
                        <li><a href="<?php echo site_url('admin/privileges'); ?>"><?php echo $this->lang->line('privileges_dash'); ?></a></li>
                    </ul>
                </div>
            </li>
            <li><a href="<?php echo site_url('admin/pilotids'); ?>"><i class="fa fa-fw fa-users"></i> <?php echo $this->lang->line('pilotids_dash'); ?></a></li>
            <li><a href="<?php echo site_url('admin/airlines/listing/1'); ?>"><i class="fa fa-fw fa-building"></i> <?php echo $this->lang->line('airlines_dash'); ?></a></li>
            <li><a href="<?php echo site_url('admin/aircraft/listing/1'); ?>"><i class="fa fa-fw fa-plane"></i> <?php echo $this->lang->line('aircraft_dash'); ?></a></li>
            <li><a href="<?php echo site_url('admin/airports/listing/1'); ?>"><i class="fa fa-fw fa-map-marker"></i> <?php echo $this->lang->line('airports_dash'); ?></a></li>
            <li><a href="<?php echo site_url('admin/hubs'); ?>"><i class="fa fa-fw fa-building-o"></i> <?php echo $this->lang->line('hubs_dash'); ?></a></li>
            <li><a href="<?php echo site_url('admin/schedules/listing/1'); ?>"><i class="fa fa-fw fa-list"></i> <?php echo $this->lang->line('schedules_dash'); ?></a></li>
            <li><a href="<?php echo site_url('admin/awards'); ?>"><i class="fa fa-fw fa-star"></i> <?php echo $this->lang->line('awards_dash'); ?></a></li>
            <li><a href="<?php echo site_url('admin/ranks'); ?>"><i class="fa fa-fw fa-shield"></i> <?php echo $this->lang->line('ranks_dash'); ?></a></li>
            <li><a href="<?php echo site_url('admin/news'); ?>"><i class="fa fa-fw fa-newspaper-o"></i> <?php echo $this->lang->line('news_dash'); ?></a></li>
            <li><a href="<?php echo site_url('admin/email_templates'); ?>"><i class="fa fa-fw fa-envelope"></i> <?php echo $this->lang->line('email_templates_dash'); ?></a></li>
            <li><a href="<?php echo site_url('admin/staff'); ?>"><i class="fa fa-fw fa-users"></i> <?php echo $this->lang->line('staff_dash'); ?></a></li>
            <li><a href="<?php echo site_url('admin/blocks'); ?>"><i class="fa fa-fw fa-code"></i> <?php echo $this->lang->line('blocks_dash'); ?></a></li>
            <li><a href="<?php echo site_url('admin/settings'); ?>"><i class="fa fa-fw fa-cogs"></i> <?php echo $this->lang->line('settings_dash'); ?></a></li>
            <li><a href="<?php echo site_url('admin/logs'); ?>"><i class="fa fa-fw fa-list"></i> <?php echo $this->lang->line('logs_dash'); ?></a></li>
            <li><a href="<?php echo site_url('admin/api/api'); ?>"><i class="fa fa-fw fa-globe"></i> API</a></li>
            <li><a href="<?php echo site_url('admin/update'); ?>"><i class="fa fa-fw fa-save"></i> <?php echo $this->lang->line('update_dash'); ?></a></li>
            <li><a href="<?php echo site_url('convert'); ?>"><i class="fa fa-fw fa-refresh"></i> Convert</a></li>
    </div>
</div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<?php
if($this->session->flashdata('success') != '')    {
    echo '<div id="alertpanel" class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$this->session->flashdata('success').'</div>';
}
if($this->session->flashdata('error') != '')    {
    echo '<div id="alertpanel" class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$this->session->flashdata('error').'</div>';
}
?>

