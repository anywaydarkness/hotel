<?php

	// controller hotel.php

	include_once('config.php'); // data for connecting to the database, etc
	include_once('db.class.php');
	include_once('tpl/hotel.tpl');
	
	$db = new Db($dbHost, $dbUser, $dbPass, $dbName);
	
	$rooms = $db->query('SELECT * FROM rooms');
	
	echo '<pre>'; print_r($rooms);

?>