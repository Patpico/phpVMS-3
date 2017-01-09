<html>
<head>
	<title></title>
</head>
<body>
<h3>Verify change of Email Address from <?php echo $current_email;?> to <?php echo $new_email;?></h3>

<p>Please click this link to <?php echo anchor('profile/update_email/'.$user_id.'/'.$update_email_token, 'confirm changing your email to this address');?>.</p>
</body>
</html>
