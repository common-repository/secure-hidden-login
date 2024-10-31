<?php
$options = get_option('securehiddenlogin');
if (!@array_key_exists('button_color',$options)) {
	$options['button_color'] = 'green';
}
if (!@array_key_exists('button_colorfp',$options)) {
	$options['button_colorfp'] = 'green';
}
if (ord(strtolower($options['triggerchar'])) == 0) {
	$options['triggerchar']='l'; /* set default value*/
}
$register_link = '';
if ($options['register_link'] == 'on') {
	ob_start();
	wp_register('','');
	$register_link = ob_get_contents();
	ob_end_clean();
}
if ($securehiddenlogin_form_display == 'loginbar') {
?>
<form name="loginform" id="securehiddenloginform" action="<?=site_url('wp-login.php')?>" method="post">

<input type="text" name="log" id="user_login" size="25" placeholder="Username" />
<input type="password" name="pwd" id="user_pass" size="25" placeholder="Password" />

<input type="hidden" name="redirect_to" value="<?=home_url()?>" />
<input type="submit" class="<?=$options['button_color']?>" name="wp-submit" id="wp-submit" value="Log In" />
<input type="button" class="<?=$options['button_colorfp']?>" value="Forgot Password" onclick="forgot_password(); return false;" />
</form>
<?php echo $register_link; 
}
if ($securehiddenlogin_form_display == 'forgotpassword') {
?>
<form name="lostpasswordform" id="securehiddenloginform" 
action="<?=site_url('/')?>wp-login.php?action=lostpassword" method="post">
<input type="text" name="user_login" id="user_login" size="25" placeholder="Username or Email" />
<input type="hidden" name="redirect_to" value="<?=home_url('/')?>?forgotpassword=success" />
<input type="submit" class="<?=$options['button_colorfp']?>" name="wp-submit" id="wp-submit" value="Get New Password" />
<input type="button" class="<?=$options['button_colorfp']?>" value="Back To Login" onclick="show_loginbar(); return false;" />
</form>
<?php
}
?>