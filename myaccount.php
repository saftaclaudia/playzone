<?php
	session_start();
	if($_SESSION["isAuth"]!="true"){
		header('Location: signin.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<?php 
		$title="myaccount";
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
			<p class="page_name">MY ACCOUNT</p>
		</div>
		<div class="title">MY ACCOUNT</div>
		<div class="break"></div>
		<div class="myaccount_content clearfix">
			<div class="leftMenu">
				<ul class="menuaccount">
					<li><a href ="#" data-section="personal-information-section">PERSONAL INFORMATION</a></li>
					<li><a href="#" data-section="change-password-section">CHANGE PASSWORD</a></li>
					<li> <a href="#" data-section="billing-information-section">BILLING INFORMATION</a></li>
					<li><a href="#" data-section="delivery-information-section">DELIVERY INFORMATION</a></li>
					<li><a href="logout-process.php">LOGOUT</a></li>
				</ul>
			</div>
			<div class="sectionRight">
				<div class="my-account-section personal-information-section">
					<h1 class="section_title">PERSONAL INFORMATION</h1>
					<form method="post" action="" id="form_info" name="personalInformation">
						<input type="text" class="form-control" name="firstname" value="<?php echo $_SESSION["firstname"]; ?>">
						<input type="text" class="form-control" name="lastname" value="<?php echo $_SESSION["lastname"]; ?>">
						<input type="text" class="form-control" name="email" value="<?php echo $_SESSION["email"]; ?>">
						<button type="submit" name="">SAVE</button>
					</form>
				</div>
				<div class="my-account-section change-password-section">
					<h1 class="section_title">CHANGE PASSWORD</h1>
					<form  method="post" action="change-password-process.php" id="form_change_password" name="changePassword">
						<input type="text" class="form-control" name="newpassword" placeholder="NEW PASSWORD">
						<input type="text" class="form-control" name="confirmnewpassword" placeholder="RE-TYPE-NEW-PASSWORD">
						<button type="submit" name="changepassword">SAVE</button>
					</form>
				<?php
					if(isset($_GET['error'])) {
						echo '<p class="error">'. $_GET['error'] .'</p>';
					};
				?>
				<?php
					if(isset($_GET['success'])){
						echo '<p class="success">'.$_GET['success'].'</p>';
					};
				?>
				</div>
					
				<div class="my-account-section billing-information-section">
					<h1 class="section_title">BILLING INFORMATION</h1>
					<form method="post" action="" id="form_billing" name="billingInformation" >
						<input type="text" class="form-control" name="firstname" placeholder="first name" value="<?php echo $_SESSION["firstname"]; ?>">
						<input type="text" class="form-control" name="lastname" placeholder="last name" value="<?php echo $_SESSION["lastname"]; ?>">
						<input type="text" class="form-control" name="address" placeholder="address">
						<input type ="text" class="form-control" name="telephone" placeholder="telephone number">
						<input type ="text" class="form-control" name="idnumber" placeholder ="id number">
						<button type="submit" name="">SAVE</button>
					</form>
				</div>
				<div class="my-account-section delivery-information-section">
					<h1 class="section_title">DELIVERY INFORMATION</h1>
					<form method="post" action="" id="form_delivery" name="deliveryInformation" >
						<input type="text" class="form-control" name="firstname" placeholder="first name" value="<?php echo $_SESSION["firstname"]; ?>">
						<input type="text" class="form-control" name="lastname" placeholder="last name" value="<?php echo $_SESSION["lastname"]; ?>">
						<input type="text" class="form-control" name="address" placeholder="address">
						<input type ="text" class="form-control" name="telephone" placeholder="telephone number">
						<button type="submit" name="">SAVE</button>
					</form>
				</div>
			</div>
		</div>
		<?php
			require('includes/footer.php');
		?>
	</div>
	<script type='text/javascript' src='assets/jquery-1.11.1.min.js'></script>
	<script type='text/javascript' src='assets/bootstrap.min.js'></script>
	<script type='text/javascript' src='myaccount-menu.js'></script>
</body>
</html>