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
 * @file         default.php                                                  *
 * @author       David Clark <david@simpilotgroup.com>                        *
 * @copyright    Copyright (c) 2017 David Clark                               *
 * @license      License https://opensource.org/licenses/BSD-3-Clause         *
 ******************************************************************************/
if (!defined('BASEPATH')) exit('No direct script access allowed');

echo $template['partials']['header'];
echo $template['partials']['header_includes'];
echo $template['partials']['navigation'];
echo $template['body'];
echo $template['partials']['footer'];
echo $template['partials']['footer_includes'];
echo $template['partials']['footer_end'];
?>