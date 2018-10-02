<?php  

	include 'db.php';
	session_start();

	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password = md5(mysqli_real_escape_string($con, $_POST['password']));


		$sql = 'SELECT * FROM users WHERE username = "'.$username.'" AND password = "'.$password.'"';

		$result = mysqli_query($con, $sql);
		$rows = mysqli_num_rows($result);

		if ($rows == 1) {
			$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
			$_SESSION['user'] = $data['firstName'] . " " . $data['lastName'];
			header("Location: ./home.php");
		}
		else {
			header("Location: ./index.html");
		}
	}

?>