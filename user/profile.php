<?php
session_start();
// include_once '../connection/server.php';
include_once '../assets/conn/dbconnect.php';
if(!isset($_SESSION['userSession']))
{
header("Location: ../index.php");
}
$res=mysqli_query($con,"SELECT * FROM user WHERE icuser=".$_SESSION['userSession']);
$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>
<!-- update -->
<?php
if (isset($_POST['submit'])) {
//variables
$userFirstName = $_POST['userFirstName'];
$userLastName = $_POST['userLastName'];
$userMaritialStatus = $_POST['userMaritialStatus'];
$userDOB = $_POST['userDOB'];
$userGender = $_POST['userGender'];
$userAddress = $_POST['userAddress'];
$userPhone = $_POST['userPhone'];
$userEmail = $_POST['userEmail'];
$userId = $_POST['userId'];
// mysqli_query("UPDATE blogEntry SET content = $udcontent, title = $udtitle WHERE id = $id");
$res=mysqli_query($con,"UPDATE user SET userFirstName='$userFirstName', userLastName='$userLastName', userMaritialStatus='$userMaritialStatus', userDOB='$userDOB', userGender='$userGender', userAddress='$userAddress', userPhone=$userPhone, userEmail='$userEmail' WHERE icuser=".$_SESSION['userSession']);
// $userRow=mysqli_fetch_array($res);
header( 'Location: profile.php' ) ;
}
?>
<?php
$male="";
$female="";
if ($userRow['userGender']=='male') {
$male = "checked";
}elseif ($userRow['userGender']=='female') {
$female = "checked";
}
$single="";
$married="";
$separated="";
$divorced="";
$widowed="";
if ($userRow['userMaritialStatus']=='single') {
$single = "checked";
}elseif ($userRow['userMaritialStatus']=='married') {
$married = "checked";
}elseif ($userRow['userMaritialStatus']=='separated') {
$separated = "checked";
}elseif ($userRow['userMaritialStatus']=='divorced') {
$divorced = "checked";
}elseif ($userRow['userMaritialStatus']=='widowed') {
$widowed = "checked";
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>user Dashboard</title>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/default/style.css" rel="stylesheet">
		<!-- <link href="assets/css/default/style1.css" rel="stylesheet"> -->
		<link href="assets/css/default/blocks.css" rel="stylesheet">
		<link href="assets/css/date/bootstrap-datepicker.css" rel="stylesheet">
		<link href="assets/css/date/bootstrap-datepicker3.css" rel="stylesheet">
		<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
		<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
		<!--Font Awesome (added because you use icons in your prepend/append)-->
		<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
		<!-- <link href="assets/css/material.css" rel="stylesheet"> -->
	</head>
	<body>
		
		<!-- navigation -->
		<nav class="navbar navbar-default " role="navigation" style="background-color:rgba(115, 250, 232, 0.46);">
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
				<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav ">
						<ul class="nav navbar-nav">
							<li><a href="user.php">Home</a></li>
							<!-- <li><a href="profile.php?userId=<?php echo $userRow['icuser']; ?>" >Profile</a></li> -->
							<li><a href="userapplist.php?userId=<?php echo $userRow['icuser']; ?>">booking</a></li>
						</ul>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userRow['userFirstName']; ?> <?php echo $userRow['userLastName']; ?><b class="caret"></b></a>
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
		<img src="..//images//5.jpg" alt="image" width=100% height=700px class="bg-img" >
		<div class="container" style="position:absolute;top:10%;left:6%;">
			<section style="padding-bottom: 50px; padding-top: 50px;">
				<div class="row">
					<!-- start -->
					<!-- USER PROFILE ROW STARTS-->
					<div class="row">
						<div class="col-md-3 col-sm-3">
							
							<div class="user-wrapper">
								<img src="assets/img/1.jpg" class="img-responsive" />
								<div class="description">
									<h4><?php echo $userRow['userFirstName']; ?> <?php echo $userRow['userLastName']; ?></h4>
									<h5> <strong> Website Designer </strong></h5>
									<p>
										Pellentesque elementum dapibus convallis.
									</p>
									<hr />
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Profile</button>
								</div>
							</div>
						</div>
						
						<div class="col-md-9 col-sm-9  user-wrapper">
							<div class="description">
								<h3> <?php echo $userRow['userFirstName']; ?> <?php echo $userRow['userLastName']; ?> </h3>
								<hr />
								
								<div class="panel panel-default">
									<div class="panel-body">
										
										
										<table class="table table-user-information" align="center">
											<tbody>
												
												
												<tr>
													<td>userMaritialStatus</td>
													<td><?php echo $userRow['userMaritialStatus']; ?></td>
												</tr>
												<tr>
													<td>userDOB</td>
													<td><?php echo $userRow['userDOB']; ?></td>
												</tr>
												<tr>
													<td>userGender</td>
													<td><?php echo $userRow['userGender']; ?></td>
												</tr>
												<tr>
													<td>userAddress</td>
													<td><?php echo $userRow['userAddress']; ?>
													</td>
												</tr>
												<tr>
													<td>userPhone</td>
													<td><?php echo $userRow['userPhone']; ?>
													</td>
												</tr>
												<tr>
													<td>userEmail</td>
													<td><?php echo $userRow['userEmail']; ?>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					<!-- USER PROFILE ROW END-->
					<!-- end -->
					<div class="col-md-4">
						
						<!-- Large modal -->
						
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Modal title</h4>
									</div>
									<div class="modal-body">
										<!-- form start -->
										<form action="<?php $_PHP_SELF ?>" method="post" >
											<table class="table table-user-information">
												<tbody>
													<tr>
														<td>IC Number:</td>
														<td><?php echo $userRow['icuser']; ?></td>
													</tr>
													<tr>
														<td>First Name:</td>
														<td><input type="text" class="form-control" name="userFirstName" value="<?php echo $userRow['userFirstName']; ?>"  /></td>
													</tr>
													<tr>
														<td>Last Name</td>
														<td><input type="text" class="form-control" name="userLastName" value="<?php echo $userRow['userLastName']; ?>"  /></td>
													</tr>
													
													<!-- radio button -->
													<tr>
														<td>Maritial Status:</td>
														<td>
															<div class="radio">
																<label><input type="radio" name="userMaritialStatus" value="single" <?php echo $single; ?>>Single</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="userMaritialStatus" value="married" <?php echo $married; ?>>Married</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="userMaritialStatus" value="separated" <?php echo $separated; ?>>Separated</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="userMaritialStatus" value="divorced" <?php echo $divorced; ?>>Divorced</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="userMaritialStatus" value="widowed" <?php echo $widowed; ?>>Widowed</label>
															</div>
														</td>
													</tr>
													<!-- radio button end -->
													<tr>
														<td>DOB</td>
														<!-- <td><input type="text" class="form-control" name="userDOB" value="<?php echo $userRow['userDOB']; ?>"  /></td> -->
														<td>
															<div class="form-group ">
																
																<div class="input-group">
																	<div class="input-group-addon">
																		<i class="fa fa-calendar">
																		</i>
																	</div>
																	<input class="form-control" id="userDOB" name="userDOB" placeholder="MM/DD/YYYY" type="text" value="<?php echo $userRow['userDOB']; ?>"/>
																</div>
															</div>
														</td>
														
													</tr>
													<!-- radio button -->
													<tr>
														<td>Gender</td>
														<td>
															<div class="radio">
																<label><input type="radio" name="userGender" value="male" <?php echo $male; ?>>Male</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="userGender" value="female" <?php echo $female; ?>>Female</label>
															</div>
														</td>
													</tr>
													<!-- radio button end -->
													
													<tr>
														<td>Phone number</td>
														<td><input type="tel" class="form-control" name="userPhone" placeholder="1234567890" pattern="[0-9]{10}" title="10 digit phone Number" value="<?php echo $userRow['userPhone']; ?>"  /></td>
													</tr>
													<tr>
														<td>Email</td>
														<td><input type="email" class="form-control" name="userEmail" value="<?php echo $userRow['userEmail']; ?>"  /></td>
													</tr>
													<tr>
														<td>Address</td>
														<td><textarea class="form-control" name="userAddress"  ><?php echo $userRow['userAddress']; ?></textarea></td>
													</tr>
													<tr>
														<td>
															<input type="submit" name="submit" class="btn btn-info" value="Update Info"></td>
														</tr>
													</tbody>
													
												</table>
												
												
												
											</form>
											<!-- form end -->
										</div>
										
									</div>
								</div>
							</div>
							<br /><br/>
						</div>
						
					</div>
					<!-- ROW END -->
				</section>
				<!-- SECTION END -->
			</div>
			<!-- CONATINER END -->
			<script src="assets/js/jquery.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			
			<script type="text/javascript">
														$(function () {
														$('#userDOB').datetimepicker();
														});
														</script>
		</body>
	</html>