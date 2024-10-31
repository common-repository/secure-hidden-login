<?php
// loginbar ajax actions
add_action( 'wp_ajax_nopriv_securehiddenlogin_loginbar_ajax', 'securehiddenlogin_loginbar_ajax_function' ); 
//the theloginbar_ajax function runs upon click/key combo acrivator
function securehiddenlogin_loginbar_ajax_function(){
	ob_start();
	$securehiddenlogin_form_display = 'loginbar';
	include("securehiddenlogin.forms.php");
	$securehiddenlogin_return_form = ob_get_contents();
	ob_end_clean();
	//remove the line breaks to send back to jQuery
	echo $securehiddenlogin_return_form = trim(preg_replace('/\s\s+/', ' ', $securehiddenlogin_return_form));
	die();// wordpress may print out a spurious zero without this - can be particularly bad if using json
}

// forgot password ajax actions
add_action( 'wp_ajax_nopriv_securehiddenlogin_forgotpassword_ajax', 'securehiddenlogin_forgotpassword_ajax_function' ); 
//the theloginbar_ajax function runs upon click/key combo acrivator
function securehiddenlogin_forgotpassword_ajax_function(){
	ob_start();
	$securehiddenlogin_form_display = 'forgotpassword';
	include("securehiddenlogin.forms.php");
	$securehiddenlogin_return_form = ob_get_contents();
	ob_end_clean();
	//remove the line breaks to send back to jQuery
	echo $securehiddenlogin_return_form = trim(preg_replace('/\s\s+/', ' ', $securehiddenlogin_return_form));
	die();// wordpress may print out a spurious zero without this - can be particularly bad if using json
}
?>
