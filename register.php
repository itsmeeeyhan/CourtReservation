<?php  

	include 'db.php';
	session_start();

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$phoneNumber = $_POST['phoneNumber'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);


		$sql = 'INSERT INTO `users`(`firstName`, `lastName`, `address`, `email`, `phoneNumber`, `username`, `password`) VALUES ("'.$firstName.'", "'.$lastName.'", "'.$address.'", "'.$email.'", "'.$phoneNumber.'", "'.$username.'", "'.$password.'")';

		mysqli_query($con, $sql);
	}

?>