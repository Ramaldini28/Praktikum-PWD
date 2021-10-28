<?php
/**
 * using mysqli_connect for database connection
 */
 
	$host = 'localhost';
	$db = 'akademik';
	$username = 'root';
	$password = '';
	$con = @mysqli_connect($host,$username,$password,$db);

	if (!$con) {
		echo "Error".mysqli_connect_error();
		exit();
	}
 
?>