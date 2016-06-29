<!DOCTYPE html>
<html>
<head>
	<?php 
		$title="toys";
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
			<p class="page_name">TOYS</p>
		</div>
		<input type="hidden" id="current_page"/>
		<input type="hidden" id="show_per_page"/>
		<div class="content clearfix">
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/1.png"/></a>
				</div>
				<div class="productInfo">Pirat girl</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/2.png"/></a>
				</div>
				<div class="productInfo">Play with swing</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/3.png"/></a>
				</div>
				<div class="productInfo">Girl with rabbit</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/4.png"/></a>
				</div>
				<div class="productInfo">Quality time</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/5.png"/></a>
				</div>
				<div class="productInfo">Venice</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/6.png"/></a>
				</div>
				<div class="productInfo">Meditation</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/7.png"/></a>
				</div>
				<div class="productInfo">Winter feelings</div>
				<div class="productPrice">200lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/8.png"/></a>
				</div>
				<div class="productInfo">Guitar music</div>
				<div class="productPrice">200lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/1.png"/></a>
				</div>
				<div class="productInfo">Pirat girl</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/3.png"/></a>
				</div>
				<div class="productInfo">Play with swing</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/5.png"/></a>
				</div>
				<div class="productInfo">Girl with rabbit</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/7.png"/></a>
				</div>
				<div class="productInfo">Quality time</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/8.png"/></a>
				</div>
				<div class="productInfo">Venice</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/6.png"/></a>
				</div>
				<div class="productInfo">Meditation</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/4.png"/></a>
				</div>
				<div class="productInfo">Winter feelings</div>
				<div class="productPrice">200lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/2.png"/></a>
				</div>
				<div class="productInfo">Guitar music</div>
				<div class="productPrice">200lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/8.png"/></a>
				</div>
				<div class="productInfo">Pirat girl</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/6.png"/></a>
				</div>
				<div class="productInfo">Play with swing</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/4.png"/></a>
				</div>
				<div class="productInfo">Girl with rabbit</div>
				<div class="productPrice">100lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/5.png"/></a>
				</div>
				<div class="productInfo">Winter feelings</div>
				<div class="productPrice">200lei</div>
			</div>
			<div class="product1">
				<div>
					<a href="#"><img src="images/toys/2.png"/></a>
				</div>
				<div class="productInfo">Guitar music</div>
				<div class="productPrice">200lei</div>
			</div>
		</div>
		<div id='page_navigation'></div>  
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