<?php
	session_start();
	define('DB_NAME' , 'playtime');
	define('DB_USER' , 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST' , 'localhost');
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link){
		die('Could not connect :' . mysql_error());
	}
	$db_selected = mysql_select_db(DB_NAME, $link);
	if(!$db_selected){
		die('Con\'t use' . DB_NAME . ":" . mysql_error());
	};
		global $error;
		global $success;

		$email=$_SESSION['email'];
		$newpassword = md5($_POST['newpassword']);
		$confirmnewpassword = md5($_POST['confirmnewpassword']);
		$result = mysql_query("SELECT password,confirmpassword FROM users WHERE email='$email'");

		if(empty($_POST['newpassword'])){
			$error ="New password is required";
		}
		if(empty($_POST['confirmnewpassword'])){
			$error ="Confirm new password is required";
		}
		if($_POST['newpassword'] !=$_POST['confirmnewpassword']){
			$error="The new password and confirm new password fields must be the same";
		}
		if($error == ""){
			$sql=mysql_query("UPDATE users SET password='$newpassword' where email='$email'");
			$sql=mysql_query("UPDATE users SET confirmpassword='$confirmnewpassword' where email='$email'");
			echo 'success';
		} else{
			echo $error;
		}
	mysql_close();
	die();
?>