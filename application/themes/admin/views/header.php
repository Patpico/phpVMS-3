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
 * @file         header.php                                                   *
 * @author       David Clark <david@simpilotgroup.com>                        *
 * @copyright    Copyright (c) 2017 David Clark                               *
 * @license      License https://opensource.org/licenses/BSD-3-Clause         *
 ******************************************************************************/
if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>favicon.ico">

    <title><?php echo $template['title']; ?></title>

    <!-- bootstrap core css -->
    <link href="<?php echo assets_url; ?>themes/default/css/bootstrap.min.css" rel="stylesheet">
    <!-- add bootstrap theme css -->
    <link href="<?php echo assets_url; ?>themes/default/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- add bootstrap theme css -->
    <link href="<?php echo assets_url; ?>themes/default/css/bootstrap-dashboard.css" rel="stylesheet">
    <!-- FontAwesome core CSS -->
    <link href="<?php echo assets_url; ?>themes/default/css/font-awesome.css" rel="stylesheet">
    <style type="text/css">
        .navbar-static-top {
            margin-bottom: 19px;
        }
        body {
            /* Move down content because we have a fixed navbar that is 50px tall */
            padding-top: 50px;
            /* Margin bottom by footer height */
            margin-bottom: 60px;
        }
        .sidebar {
            top:50px;
        }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
