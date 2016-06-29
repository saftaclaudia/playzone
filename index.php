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
		$title="homepage";
		require('includes/head.php');
	?>
</head>
<body>
	<div class= "wrapper center-block">
		<?php
			require('includes/header.php');
		?>
		<div class="central_content clearfix">
			<div class="prev"></div>
			<ul class="slider">
				<li><img src="images/img_1.jpg"/></li>
				<li><img src="images/img_2.jpg"/></li>
				<li><img src='images/img_3.jpg'/></li>
				<li><img src="images/img_4.jpg"/></li>
				<li><img src='images/img_5.jpg'/></li>
				<li><img src='images/img_6.jpg'/></li>
			</ul>
			<div class="next"></div>
		</div>
		<?php
			require('includes/footer.php');
		?>
	</div>
	<script type='text/javascript' src='assets/jquery-1.11.1.min.js'></script>
	<script type='text/javascript' src='assets/bootstrap.min.js'></script>
	<script type='text/javascript'src='slides.js'></script>
</body>
</html>

