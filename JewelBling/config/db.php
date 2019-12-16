<?php
	require('config/config.php');
	// Create connection to DB
	$conn = pg_connect(DB_HOST.' '.DB_NAME.' '.DB_USER.' '.DB_PW);
?>