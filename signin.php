<?php
	session_start();
	if($_SESSION["isAuth"] =="true"){
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<?php 
		$title="signin";
		require('includes/head.php');
	?>
</head>
<body>
	<div class= "wrapper center-block">
	<?php 
		require('includes/header.php');
	?>
	<div class="topLinks">
		<a href="index.php">HOME</a>
		<span>-</span>
		<p class="page_name">SIGN IN</p>
	</div>
		<div class="content-signin center-block clearfix">
			<div class="left-content">
				<p> LOG IN TO YOUR ACCOUNT</p>
				<form class="login" action="login-process.php" method="post">
					<input type="text" class="form-control" name="email" placeholder="email adress">
					<input type="text"class="form-control" name="password" placeholder="password">
					<button type="submit" name="login">LOGIN</button>
				</form>
				<?php
					if(isset($_GET['error'])) {
						echo '<p class="error">'. $_GET['error'] .'</p>';
					};
				?>
			</div>
			<div class="right-content">
				<p> NEW CUSTOMER REGISTRATION</p>
				<form class="registration" action="new-account-process.php" method="post">
					<input type ="text" class="form-control" name="firstname" placeholder="first name">
					<input type="text" class="form-control" name="lastname" placeholder="last name">
					<input type="text" class="form-control" name="email" placeholder="email">
					<input type="text" class="form-control" name="confirmemail" placeholder="confirm email">
					<input type="text" class="form-control" name="password" placeholder="password">
					<input type="text" class="form-control" name="confirmpassword" placeholder="re-type-password">
					<button type="submit" name="signup">REGISTER</button>
				</form>
				<?php
					if(isset($_GET['err'])) {
						echo '<p class="error">'. $_GET['err'] .'</p>';
					};
				?>
			</div>
		</div>
		<?php
			require('includes/footer.php');
		?>
	</div>
	<script type='text/javascript' src='assets/jquery-1.11.1.min.js'></script>
	<script type='text/javascript' src='assets/bootstrap.min.js'></script>
	<script type='text/javascript'src='slides.js'></script>
	<script type='text/javascript' src='pagination.js'></script>
</body>
</html>