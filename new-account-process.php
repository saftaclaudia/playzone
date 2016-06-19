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
	$err = "";
	$success="";
	$userexist="";
	$_SESSION["firstname"]=$_POST['firstname'];
	$_SESSION["lastname"]=$_POST['lastname'];
	$_SESSION["email"]=$_POST['email'];
	$_SESSION["confirmemail"]=$_POST['confirmemail'];
	$_SESSION["password"]=$_POST['password'];
	$_SESSION["confirmpassword"]=$_POST['confirmpassword'];
	function NewUser(){
		global $success;
		$firstname = $_POST['firstname'];
		$lastname= $_POST['lastname'];
		$email = $_POST['email'];
		$confirmemail= $_POST['confirmemail'];
		$password= md5($_POST['password']);
		$confirmpassword = md5($_POST['confirmpassword']);
		$query ="INSERT INTO users (firstname, lastname, email, confirmemail, password, confirmpassword) VALUES('$firstname', '$lastname', '$email', '$confirmemail','$password', '$confirmpassword')";
		$data =mysql_query($query);
		if ($data){
			$success ="You've successfully signed up for playtime";
		}
		else {
			die('Error :' . mysql_error());
		}
	}
	function SignUp(){
		global $err;
		global $userexist;
		global $success;
		if(empty($_POST['firstname'])){
			$err = "Firstname is required";
			return false;
		}
		if(empty($_POST['lastname'])){
			$err ="Lastname is required";
			return false;
		}
	 	if(empty($_POST['email'])){
			$err ="Email is required";
			return false;
		}
		$email = $_POST['email'];
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$err ="Email is invalid";
			return false;
		}
		if(empty($_POST['confirmemail'])){
			$err ="Confirm email is required";
			return false;
		}
		$confirmemail = $_POST['confirmemail'];
		if (!filter_var($confirmemail, FILTER_VALIDATE_EMAIL)) {
			$err ="Confirm email is invalid";
			return false;
		}
		if ($_POST['email'] != $_POST['confirmemail']){
			$err ="Email do not match";
			return false;
		}
		if(empty($_POST['password'])){
			$err ="Password is required";
			return false;
		}
		if(empty($_POST['confirmpassword'])){
			$err ="Confirm password in required";
			return false;
		}
		if ($_POST['password'] != $_POST['confirmpassword']){
			$err ="Error passwors do not match";
			return false;
		}
		if($err == ""){
			$queryexist="SELECT * FROM users WHERE email = '$_POST[email]' ";
			$query = mysql_query($queryexist) or die (mysql_error());
			$row = mysql_fetch_array($query);
			if(!$row){
				NewUser();
			}
			else
			{
				$userexist="Sorry you are already registered user";
			}
		}
	}
	if(isset($_POST['signup'])){
		SignUp();
	}
	header('Location: signin.php');
	mysql_close();
	die();
?>
