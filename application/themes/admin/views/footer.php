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
 * @file         footer.php                                                   *
 * @author       David Clark <david@simpilotgroup.com>                        *
 * @copyright    Copyright (c) 2017 David Clark                               *
 * @license      License https://opensource.org/licenses/BSD-3-Clause         *
 ******************************************************************************/
if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted">Copyright &copy <?php echo date('Y'); ?> - phpVMS-3</p>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>-->
<script src="<?php echo assets_url; ?>themes/default/js/bootstrap.min.js"></script>

<!-- alert hide -->
<script type="text/javascript">
    $("#alertpanel").delay(3000).slideUp(500);
</script>