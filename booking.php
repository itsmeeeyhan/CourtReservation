<?php  
	include 'db.php';
	session_start();

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$dateIn = $_POST['in'];
		$dateOut = $_POST['out'];
		$court = $_POST['court'];

		// echo '<script>alert("'.date("Y-m-d H:i:s", strtotime($dateIn)).'"");</script>';

		$sql = 'INSERT INTO `booking`(`bookIn`, `bookOut`, `bookCourt`) VALUES ("'.date("Y-m-d H:i:s", strtotime($dateIn)).'", "'.date("Y-m-d H:i:s", strtotime($dateOut)).'", '.$court.')';

		mysqli_query($con, $sql);
	}

?>