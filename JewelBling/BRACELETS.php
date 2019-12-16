<?php 
	require('config/db.php');
	
	// Create Query
	$query = 'SELECT item_name, item_description, 
	picture, price_original, price_current FROM owneditem 
	WHERE category = \'BRACELETS\'';
	
	// Get Result
	$result = pg_query($conn, $query);
	
	// Fetch data
	$items = pg_fetch_all($result);
	#var_dump($items);
	
	// Free results, close connection
	pg_free_result($result);
	pg_close($conn);
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
			<?php include('inc/categoriesUnsortedList.php'); ?>
			
			<?php include('inc/sidebar.php'); ?>
		</div>
	</section>
	
	<?php include('inc/footer.php'); ?>
</body>
</html>