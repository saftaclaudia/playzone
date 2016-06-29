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
	$error="";
	$success="";
	if (isset($_POST['email']) and isset($_POST['password'])){
		$email = $_POST['email'];
		$password= md5($_POST['password']);
		$query ="SELECT firstname,lastname FROM users WHERE email='$email' and password='$password'";
		$result=mysql_query($query) or die (mysql_error());
		$count=mysql_num_rows($result);
		$row= mysql_fetch_assoc($result);
		if($count==1){
			 $_SESSION['email']= $email;
			 $_SESSION['firstname']=$row['firstname'];
			 $_SESSION['lastname']=$row['lastname'];
			 $_SESSION["isAuth"]="true"; 
			 header('Location: myaccount.php');
		} else{
			$error="Invalid Login email or password";
			header('Location: signin.php');
		}
	}
	mysql_close();
	die();
?>