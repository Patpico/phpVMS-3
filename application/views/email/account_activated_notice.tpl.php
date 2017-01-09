<html>
<head>
	<title></title>
</head>
<body>
<h3>Account approved for <?php echo $upro_first_name.' '.$upro_last_name;?> at <?php echo $this->load->get_var('sitename'); ?></h3>

<p>Please click this link to <?php echo anchor('login', 'login to your account');?>.</p>
</body>
</html>
