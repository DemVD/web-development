<?php
	require('config/db.php'); // database information
	// Get submitted data and send it to DB
	if(isset($_POST['upload'])){
		// Get all the submitted data from the form
		$firstName = pg_escape_string($_POST['first_name']);
		$lastName = pg_escape_string($_POST['last_name']);
		$fathersName = pg_escape_string($_POST['fathers_name']);
		$email = $_POST['email'];
		$passport = $_POST['passport'];
		$jewelryCategory = $_POST['category'];
		$jewelryName = pg_escape_string($_POST['jewelry_name']);
		$jewelryDescriprion = pg_escape_string($_POST['jewelry_description']);
		
		// Check if customer record already exists
		$res1 = pg_query("SELECT * FROM customer
		WHERE passport='$passport'");
		$num_rows = pg_num_rows($res1);
		if(!$num_rows){ // New customer
			// First create new customer in db
			$query1 = "INSERT INTO customer(passport, first_name,
			last_name,fathers_name,email) VALUES('$passport',
			'$firstName','$lastName','$fathersName','$email')";
			if(pg_query($conn, $query1)){
				// Than create new item for that customer
				$image = $_FILES['image']['name'];
				$target = "img/".basename($image);
				$query2 = "INSERT INTO customeritem(category, item_name,
				item_description, owner_passport, picture) VALUES('$jewelryCategory',
				'$jewelryName','$jewelryDescriprion','$passport','$image')";
				if(pg_query($conn, $query2)){
					#header('Location: '.ROOT_URL.'');
					move_uploaded_file($_FILES['image']['tmp_name'], $target);
					echo '<script type="text/javascript">alert("New customer, request sent!");</script>';
				}
				else{
					echo '<script type="text/javascript">alert("ERROR. Failed to update database customeritem");</script>';
				}
				
			}
			else{
				echo '<script type="text/javascript">alert("ERROR. Failed to update database customer");</script>';
			}
		}
		else{ // Existing customer - we need just the jewelry info
			$image = $_FILES['image']['name'];
			$target = "img/".basename($image);
			$query2 = "INSERT INTO customeritem(category, item_name,
			item_description, owner_passport, picture) VALUES('$jewelryCategory',
			'$jewelryName','$jewelryDescriprion','$passport','$image')";
			if(pg_query($conn, $query2)){
				#header('Location: '.ROOT_URL.'');
				move_uploaded_file($_FILES['image']['tmp_name'], $target);
				echo '<script type="text/javascript">alert("Existing customer, request sent!");</script>';
			}
			else{
				echo '<script type="text/javascript">alert("ERROR. Failed to update database customeritem");</script>';
			}
		}
	}
?>
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
			<form class="dark" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
			    <h3>Make a pledge request</h3>
			    <p>Our specialists will give an accurate rating 
			    for your jewelry, and a custom pledge time which
				depends on the rarity of your jewelry, but first we 
				need some information.
			    </p>
				<div>
					<label>First Name</label><br>
					<input type="text" name="first_name" placeholder="First Name">
				</div>
				<div>
					<label>Last Name</label><br>
					<input type="text" name="last_name" placeholder="Last Name">
				</div>
				<div>
					<label>Fathers Name</label><br>
					<input type="text" name="fathers_name" placeholder="Fathers Name">
				</div>
				<div>
					<label>E-mail</label><br>
					<input type="email" name="email" placeholder="E-mail adress">
				</div>
				<div>
					<label>Passport Serie and Number</label><br>
					<input type="number" name="passport" placeholder="0123456789">
				</div>
				<div>
					<label>Jewelry Category</label><br>
					<select name="category">
						<option value="UNIQUES">Unique jewelry</option>
						<option value="RINGS">Rings</option>
						<option value="EARRINGS">Earrings</option>
						<option value="CHAINS">Chains</option>
						<option value="BRACELETS">Bracelets</option>
						<option value="NECKLACES">Necklaces</option>
					</select>
				</div>
				<div>
					<label>Jewelry Name</label><br>
					<input type="text" name="jewelry_name" placeholder="985 Golden Chain">
				</div>
				<div>
					<label>Jewelry Description</label><br>
					<textarea name="jewelry_description" placeholder="Message"></textarea>
				</div>
				<div>
					<label>Jewelry picture</label><br>
					<input class="button2" name="image" type="file">
				</div>
				<br>
				<div>
					<input class="button1" type="submit" name="upload" value="Send">
				</div>
				<br>
				<p>Relationships between pawn shops and its customers
				are regulated by Federal Law 196-FZ from 19 july 2007
				"About Pawn Shops". According to law, the pawn shop can
				pledge an item for no longer than a year, however most
				of today's pawn shops pledge items for as long as a month.
				</p>
			</form>
		</div>
	</section>
	
	<?php include('inc/footer.php'); ?>
</body>
</html>