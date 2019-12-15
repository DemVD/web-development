<?php
	require('config/config.php');
	// Create connection to DB
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	
	// check the connection
	if(mysqli_connect_errno()){
		// Connection failed
		echo 'Failed to connect to MySQLi'.mysqli_connect_errno();
	}
?>