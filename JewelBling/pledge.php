<!DOCTYPE html>
<html>
<head>
	<?php include('inc/header.php'); ?>
</head>
<body>
	<?php include('inc/brandingAndNavBar.php'); ?>
	
	<?php include('inc/newsletterFindPledge.php'); ?>
	
	<section id="main">
		<div class="container">
					<form class="dark">
					    <h3>Make a pledge request</h3>
					    <p>Our specialists will give an accurate rating 
					    for your jewelry, but first we need some information.
					    </p>
						<div>
							<label>First Name</label><br>
							<input type="text" placeholder="First Name">
						</div>
						<div>
							<label>Last Name</label><br>
							<input type="text" placeholder="Last Name">
						</div>
						<div>
							<label>E-mail</label><br>
							<input type="email" placeholder="E-mail adress">
						</div>
						<div>
							<label>Passport serie</label><br>
							<input type="number" placeholder="0123">
						</div>
						<div>
							<label>Passport number</label><br>
							<input type="number" placeholder="456789">
						</div>
						<div>
							<label>Additional details</label><br>
							<textarea placeholder="Message"></textarea>
						</div>
						<div>
							<label>Jewelry pictures</label><br>
							<input class="button2" name="myFile" type="file">
						</div>
						<br>
						<button class="button1" type="submit">Send</button>
					</form>
		</div>
	</section>
	
	<?php include('inc/footer.php'); ?>
</body>
</html>