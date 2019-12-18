<?php
	if(isset($_POST['submit2'])){
		#echo "all ok";
		session_start(); // Start Session
		$_SESSION['passport'] = $_POST['passport'];
		
		// Redirect
		header('Location: findPledge.php');
	}
?>
<section id="newsletterFindPledge">                                   <!-- newsletter -->
	<div class="container">                                 <!-- all must be contained (padded) -->
		<h1>Find Pledge Request</h1>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="number" name="passport" placeholder="Enter Passport serie and number">
			<input class="button1" type="submit" name="submit2"
			value="Find" style="cursor:pointer";>
		</form>
	</div>
</section>