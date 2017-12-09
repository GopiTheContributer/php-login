<?php 
	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];

	$mysql_connection = new mysqli('localhost', 'root', 'root', 'guvilearning');

	if(!$mysql_connection){
		die('got connection error ' + mysqli_error());	
	}
	
	$queryResult = mysqli_query($mysql_connection, "SELECT * FROM login WHERE username = '$username' and PASSWORD = '$password' ");
	$fetchedRowsCount = mysqli_num_rows($queryResult);

	if($fetchedRowsCount == 1){
		echo 'valid login';
		$_SESSION['user'] = $username;
	}	
	else {
		echo 'invalid login';
	}

	mysqli_close($mysql_connection);
?>