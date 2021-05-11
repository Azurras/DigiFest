<?php
	session_start();
	
	$user = 'root';
	$password = 'root';
	$db = 'DigiFest';
	$host = 'localhost';
	$port = 3306;

	$conn = mysql_connect("$host:$port", $user, $password);
	if(!$conn ) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db($db);

	$festivalName		= $_POST['festivalName'];
	$festivalDate			= $_POST['festivalDate'];



	$sql = "INSERT INTO Festival (FestivalName, FestivalDate)
								Values ('$festivalName', '$festivalDate')";


	if(!mysql_query($sql)) {
		die('Error: '. mysql_error($conn));
	}

	mysql_close($link);
?>