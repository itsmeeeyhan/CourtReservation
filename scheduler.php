<?php  
	include 'db.php';
	session_start();

	date_default_timezone_set('Asia/Manila');

	$dataArray = [];
	$sql = 'SELECT * FROM booking';
	$result = mysqli_query($con, $sql);
	while($data = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		array_push($dataArray, date("H:i:s", strtotime($data['bookIn'])));
	}

	$date = date('F-d-Y');

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Reservations</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="design.css">
<link rel="stylesheet"  href="css/bootstrap.min.css" />
<link rel="stylesheet"  href="css/bootstrap.css" />
<link rel="stylesheet" href="css/mdb.min.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript" src="js/func.js"></script>

<!--  added -->
<script type="text/javascript" src="./js/buttons.js"></script>
</head>

<body id = "tab">
	<nav class = "navbar navbar-expand-lg fixed-top top-navbar-collapse" style = "background-color: #000;">
			<ul class = "navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Sports</a>
					  <div class="dropdown-menu">
						<a class="dropdown-item" href="#">Basketball</a>
						<a class="dropdown-item" href="#">Volleyball</a>
						<a class="dropdown-item" href="#">Badminton</a>
						<a class="dropdown-item" href="#">Tennis</a>
					  </div>
				</li>
			</ul>
			<ul class = "navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link text-white" data-toggle="modal" data-target="#logModalForm">Sign In</a></li>
			</ul>
		</nav>
		
		<br/>
		<br/>
		<br/>
		<br/>
		
		<a style="margin-left: 590px; 0" class = "btn btn-blue wow fadeIn" data-wow-delay="0.4s">Reserve Now</a>
		
		<br/>
		<br/>

	<div class="table-responsive">
		<table id="tablePreview" class="table table-hover">
		  <thead>
			<h1 style = "text-align: center;"><?php echo $date;  ?> <h1>
			<tr style = "background-color:#bec0c4; color: black">
			  <th>     </th>
			  <th>Time</th>
			  <th>Court1</th>
			  <th>Court2</th>
			  <th>Court3</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th scope="row"></th>
			  <td>6:00</td>
			  <td><?php if (in_array("6:00:00", $dataArray)) echo "Close"; else echo '<input type="button" value="Open" onclick="button(this)">'; ?></td>
			  <td>Open</td>
			  <td>Open</td>
			<tr>
			 <tr>
			  <th scope="row"></th>
			  <td>7:00</td>
			  <td><?php if (in_array("7:00:00", $dataArray)) echo "Close"; else echo '<input type="button" value="Open" onclick="button(this)">'; ?></td>
			  <td>Open</td>
			  <td>Open</td>
			<tr>
			<tr>
			  <th scope="row"></th>
			  <td>8:00</td>
			  <td><?php if (in_array("8:00:00", $dataArray)) echo "Close"; else echo '<input type="button" value="Open" onclick="button(this)">'; ?></td>
			  <td>Open</td>
			  <td>Open</td>
			<tr>
			<tr>
			  <th scope="row"></th>
			  <td>9:00</td>
			  <td><?php if (in_array("9:00:00", $dataArray)) echo "Close"; else echo '<input type="button" value="Open" onclick="button(this)">'; ?></td>
			  <td>Open</td>
			  <td>Open</td>
			<tr>
			<tr>
			  <th scope="row"></th>
			  <td>10:00</td>
			  <td><?php if (in_array("10:00:00", $dataArray)) echo "Close"; else echo '<input type="button" value="Open" onclick="button(this)">'; ?></td>
			  <td>Close</td>
			  <td>Open</td>
			<tr>
			<tr>
			  <th scope="row"></th>
			  <td>11:00</td>
			  <td><?php if (in_array("11:00:00", $dataArray)) echo "Close"; else echo '<input type="button" value="Open" onclick="button(this)">'; ?></td>
			  <td>Close</td>
			  <td>Open</td>
			<tr>
			<tr>
			  <th scope="row"></th>
			  <td>12:00</td>
			  <td><?php if (in_array("12:00:00", $dataArray)) echo "Close"; else echo '<input type="button" value="Open" onclick="button(this)">'; ?></td>
			  <td>Close</td>
			  <td>Open</td>
			<tr>
			<tr>
			  <th scope="row"></th>
			  <td>13:00</td>
			  <td><?php if (in_array("13:00:00", $dataArray)) echo "Close"; else echo '<input type="button" value="Open" onclick="button(this)">'; ?></td>
			  <td>Close</td>
			  <td>Open</td>
			<tr>
			<tr>
			  <th scope="row"></th>
			  <td>14:00</td>
			  <td><?php if (in_array("14:00:00", $dataArray)) echo "Close"; else echo '<input type="button" value="Open" onclick="button(this)">'; ?></td>
			  <td>Open</td>
			  <td>Open</td>
			<tr>
			<tr>
			  <th scope="row"></th>
			  <td>15:00</td>
			  <td><?php if (in_array("15:00:00", $dataArray)) echo "Close"; else echo '<input type="button" value="Open" onclick="button(this)">'; ?></td>
			  <td>Open</td>
			  <td>Open</td>
			<tr>
			<tr>
			  <th scope="row"></th>
			  <td>16:00</td>
			  <td><?php if (in_array("16:00:00", $dataArray)) echo "Close"; else echo '<input type="button" value="Open" onclick="button(this)">'; ?></td>
			  <td>Open</td>
			  <td>Open</td>
			<tr>
			<tr>
			  <th scope="row"></th>
			  <td>17:00</td>
			  <td><?php if (in_array("17:00:00", $dataArray)) echo "Close"; else echo '<input type="button" value="Open" onclick="button(this)">'; ?></td>
			  <td>Open</td>
			  <td>Open</td>
			<tr>
			<tr>
			  <th scope="row"></th>
			  <td>18:00</td>
			  <td><?php if (in_array("18:00:00", $dataArray)) echo "Close"; else echo '<input type="button" value="Open" onclick="button(this)">'; ?></td>
			  <td>Open</td>
			  <td>Open</td>
			  <tr>
			  <th scope="row"></th>
			  <td>19:00</td>
			  <td><?php if (in_array("19:00:00", $dataArray)) echo "Close"; else echo '<input type="button" value="Open" onclick="button(this)">'; ?></td>
			  <td>Open</td>
			  <td>Open</td>
			<tr>
			<tr>
		  </tbody>
	</div>

</body>
</html>