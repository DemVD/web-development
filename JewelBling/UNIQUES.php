<?php 
	require('config/db.php');
	
	// Create Query
	$query = 'SELECT item_name, item_description, 
	picture, price_original, price_current FROM owneditem 
	WHERE category = \'UNIQUES\'';
	
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
			<article id="main-col">
				<ul id="services">
					<div class="dark">
						<h1>UNIQUES</h1>
					</div>
					
					<?php foreach($items as $item): ?>
						<li>
							<?php echo "<img src='img/localDB/".$item['picture']."' >"; ?>
							<h3><?php echo $item['item_name']; ?></h3>
							<p><?php echo $item['item_description']; ?></p>
							<p>Current price: 
							<?php echo $item['price_current']; ?>
							</p>
							<p>Original price: 
							<?php echo $item['price_original']; ?>
							</p>
						</li>
					<?php endforeach; ?>
				</ul>
			</article>
			
			<?php include('inc/sidebar.php'); ?>
		</div>
	</section>
	
	<?php include('inc/footer.php'); ?>
</body>
</html>