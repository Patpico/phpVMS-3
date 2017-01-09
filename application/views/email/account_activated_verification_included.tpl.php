<html>
<head>
	<title></title>
</head>
<body>
<h3>Account approved for <?php echo $upro_first_name.' '.$upro_last_name;?> at <?php echo $this->load->get_var('sitename'); ?></h3>

<p>Please click this link to <?php echo anchor('activate/'. $uacc_id .'/'. $uacc_activation_token, 'complete your account activation');?>.</p>
</body>
</html>
