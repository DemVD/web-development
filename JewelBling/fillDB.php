<?php
	require('config/db.php'); // database information
	// Get submitted data and send it to DB
	if(isset($_POST['upload'])){
	// Get all the submitted data from the form
		$category = pg_escape_string($_POST['category']);
		$itemName = pg_escape_string($_POST['itemName']);
		$itemDescription = pg_escape_string($_POST['itemDescription']);
		$originalPrice = $_POST['originalPrice'];
		$currentPrice = $_POST['currentPrice'];
		
		$image = $_FILES['image']['name'];
		$target = "img/localDB/".basename($image);
		$query2 = "INSERT INTO owneditem(category, item_name,
		item_description, picture, price_original, price_current) 
		VALUES('$category','$itemName','$itemDescription', '$image', 
		'$originalPrice', '$currentPrice')";
		if(pg_query($conn, $query2)){
			#header('Location: '.ROOT_URL.'');
			move_uploaded_file($_FILES['image']['tmp_name'], $target);
			echo '<script type="text/javascript">alert("Item Added to owneditems!");</script>';
		}
		else{
			echo '<script type="text/javascript">alert("ERROR. Failed to update database owneditem");</script>';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form class="dark" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
		<div>
			<label>Item Category</label><br>
			<select name="category">
				<option value="DISCOUNTS">Discount Jewelry</option>
				<option value="UNIQUES">Unique jewelry</option>
				<option value="RINGS">Rings</option>
				<option value="EARRINGS">Earrings</option>
				<option value="CHAINS">Chains</option>
				<option value="BRACELETS">Bracelets</option>
				<option value="NECKLACES">Necklaces</option>
			</select>
		</div>
		<div>
			<label>Item Name</label><br>
			<input type="text" name="itemName" placeholder="985 Golden Chain">
		</div>
		<div>
			<label>Item Description</label><br>
			<textarea name="itemDescription" placeholder="Message"></textarea>
		</div>
		<div>
			<label>Item picture</label><br>
			<input class="button2" name="image" type="file">
		</div>
		<div>
			<label>Original Price</label><br>
			<input type="number" name="originalPrice" placeholder="2999">
		</div>
			<div>
			<label>Current Price</label><br>
			<input type="number" name="currentPrice" placeholder="2999">
		</div>
		<div>
			<input class="button1" type="submit" name="upload" value="Send">
		</div>
	</form>
</body>
</html>