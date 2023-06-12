<?php
session_start();
include_once '../assets/conn/dbconnect.php';
$session=$_SESSION[ 'userSession'];
$res=mysqli_query($con, "SELECT a.*, b.*,c.* FROM user a
	JOIN booking b
		On a.icuser = b.userIc
	JOIN adminschedule c
		On b.scheduleId=c.scheduleId
		
	WHERE b.userIc ='$session'");
	if (!$res) {
		die( "Error running $sql: " . mysqli_error());
	}
	$userRow=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Make Booking</title>
		<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
		<link href="assets/css/material.css" rel="stylesheet">
		
		<link href="assets/css/default/style.css" rel="stylesheet">
		<link href="assets/css/default/blocks.css" rcel="stylesheet">
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" />

	</head>
	<body>
		<!-- navigation -->
		<nav class="navbar navbar-default " role="navigation" style="background-color:rgba(115, 250, 232, 0.46);border:none;border-radius:0;">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<img alt="Brand" src="..//images//logo.jpg" style="border-radius:50%;" height="50px">
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav list-inline">
						<ul class="nav navbar-nav">
							<li><a style="color:black; margin-left:7rem; font-size:1.6rem; " href="user.php">Home</a></li>
							<!-- <li><a href="profile.php?userId=<?php echo $userRow['icuser']; ?>" >Profile</a></li> -->
							<li><a style="color:black; margin-left:7rem; font-size:1.6rem;" href="userapplist.php?userId=<?php echo $userRow['icuser']; ?>">booking</a></li>
						</ul>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" style="color:black; margin-right:2rem;" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userRow['userFirstName']; ?> <?php echo $userRow['userLastName']; ?><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="profile.php?userId=<?php echo $userRow['icuser']; ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
								</li>
								<li>
									<a href="userapplist.php?userId=<?php echo $userRow['icuser']; ?>"><i class="glyphicon glyphicon-file"></i> booking</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="userlogout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- navigation -->	
<!-- display appoinment start -->
<?php


echo "<img src='..//images//booking5.jpg' alt='image' width=100% height=680px >";
echo "<div class='row' style='position:absolute;top:15%;left:25%;'>";
echo "<div class='page-header'>";
echo "<h1 style='color:#FAF9F6'>Your booking list. </h1>";
echo "</div>";
echo "<div class='panel panel-primary'>";
//changes
echo "<div class='panel-heading' style='background-color:rgba(110, 0, 0, 0.292);text-align:center;color:black;'>List of booking</div>";
echo "<div class='panel-body'>";
echo "<table class='table table-hover'>";
echo "<thead>";
echo "<tr>";
echo "<th>App Id</th>";
echo "<th>userIc </th>";
echo "<th>userLastName </th>";
echo "<th>scheduleDate </th>";
echo "<th>Slot </th>";
echo "<th>Slot Price </th>";
echo "<th>Net Amt</th>";
echo "<th>Print </th>";
echo "<th>Cancel Booking </th>";
echo "</tr>";
echo "</thead>";
$res = mysqli_query($con, "SELECT a.*, b.*,c.*,s.*
		FROM user a
		JOIN booking b
		On a.icuser = b.userIc
		JOIN adminschedule c
		On b.scheduleId=c.scheduleId
		JOIN slots s
		On c.slot_id=s.slot_id
		WHERE b.userIc ='$session'");

if (!$res) {
die("Error running $sql: " . mysqli_error());
}


while ($userRow = mysqli_fetch_array($res)) {
echo "<tbody>";
echo "<tr>";
echo "<td>" . $userRow['appId'] . "</td>";
echo "<td>" . $userRow['userIc'] . "</td>";
echo "<td>" . $userRow['userLastName'] . "</td>";
echo "<td>" . $userRow['scheduleDate'] . "</td>";
echo "<td>" . $userRow['slot_name'] . "</td>";
echo "<td>" . $userRow['scheduleprice'] . "</td>";
echo "<td>" . $userRow['netamt'] . "</td>";

echo "<td><a href='invoice.php?appid=".$userRow['appId']."' target='_blank'><span class='glyphicon glyphicon-print' aria-hidden='true'></span></a> </td>";

echo "<td class='text-center'><a href='deletebooking.php?selected_pk=".$userRow['appId']."&user=".$userRow['userIc']."&scheduleid=".$userRow['scheduleId']."'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
                            </td>";
}

echo "</tr>";
echo "</tbody>";
echo "</table>";

?>
	</div>
</div>
</div>
</div>
<!-- display appoinment end -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>