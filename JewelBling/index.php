<!DOCTYPE html>
<html>
<head>
	<?php include('inc/header.php'); ?>
</head>
<body>
	<?php include('inc/brandingAndNavBar.php'); ?>
	
	<?php include('inc/showcase.php'); ?>
	
	<?php include('inc/newsletterFindPledge.php'); ?>
	
	<section id="boxes">
		<div class="container">
			<div class="box" onclick="location.href='index.php';" style="cursor:pointer;">
				<img src="./img/Discounts.png">
				<h3>Discount Jewelry</h3>
				<p>JewelBling has its own discount category with 
				regular discounts on holidays and weekends!<p>
			</div>
			<div class="box" onclick="location.href='categories.php';" style="cursor:pointer;">
				<img src="./img/Categories.png">
				<h3>Jewelry Categories</h3>
				<p>JewelBling has categorised its wares. Now you will 
				find anything spesific, if we have it.<p>
			</div>
			<div class="box">
				<img src="./img/Uniques.png">
				<h3>Rare and Unique Jewelry</h3>
				<p>JewelBling has rare and unique pieces, from 
				our own designers too.<p>
			</div>
		</div>
	</section>
	
	<?php include('inc/footer.php'); ?>
</body>
</html>