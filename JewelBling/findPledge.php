<?php 
	require('config/db.php');
	
	session_start();
	$passportImp = $_SESSION['passport'];
	
	// Create Query
	$query = "SELECT category, item_name, item_description, 
	item_price, commission_fee, expiration_date, picture 
	FROM customeritem 
	WHERE owner_passport = '$passportImp'";
	
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
			<h1> Search results </h1>
		</div>
		
		<?php
		function detOutp($item){
			if($item != null){
				return $item;
			}
			else{
				return 'Currently unrated.';
			}
		}
		?>
		
		<?php if($items != null) : ?>
			<?php foreach($items as $item): ?>
				<li>
					<?php echo "<img src='img/localDB/".$item['picture']."' >"; ?>
					<h3><?php echo $item['category'].' CATEGORY'; ?></h3>
					<h3><?php echo $item['item_name']; ?></h3>
					<p><?php echo $item['item_description']; ?></p>
					<p>Rated price: 
					<?php echo detOutp($item['item_price']); ?>
					</p>
					<p>Commission fee: 
					<?php echo detOutp($item['commission_fee']); ?>
					</p>
					<p>Expiration date: 
					<?php echo detOutp($item['expiration_date']); ?>
					</p>
				</li>
			<?php endforeach; ?>
		<?php else: ?>
			<h2> No requests found. </h2>
			<h3> If you did send request, check 
			your passport number and try again. </h3>
			<h4> Maybe the deal has expired? </h4>
		<?php endif; ?>
		
	</ul>
</article>
			
			<?php include('inc/sidebar.php'); ?>
		</div>
	</section>
	
	<?php include('inc/footer.php'); ?>
</body>
</html>