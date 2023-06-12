<?php
session_start();
include_once '../assets/conn/dbconnect.php';
$session= $_SESSION['userSession'];
// $appid=null;
// $appdate=null;
if (isset($_GET['appid'])) {
	
	$appid = $_GET['appid'];
}
// on b.icuser = a.icuser
$qa="SELECT a.*, b.*, s.* FROM adminschedule a,slots s INNER JOIN user b
WHERE s.slot_id=a.slot_id AND scheduleId=$appid AND b.icuser=$session";
$res = mysqli_query($con,$qa);
$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
$appdate =$userRow['scheduleDate'];
$sql="select * from addonservices";		
$result=array();
$res= mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_assoc($res)) {
$result[]=$row1;
}
	
//INSERT


/*if (isset($_POST['Add'])) {

$userIc = $userRow['icuser'];
$scheduleid = mysqli_real_escape_string($con,$appid);
$serviceid = mysqli_real_escape_string($con,$_POST['serviceid']);

$res = mysqli_query($con,"SELECT price FROM addonservices where serviceid=$serviceid");
$service=mysqli_fetch_array($res,MYSQLI_ASSOC);
$price=$service["price"];

$query = "INSERT INTO temp_addon_services (  userId , scheduleid , serviceid , tempprice  )
VALUES ( '$userIc', '$scheduleid', '$serviceid', '$price') ";

$resu = mysqli_query($con,$query);


$sql="select * from addonservices";		
$result=array();
$res= mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_assoc($res)) {
$result[]=$row1;
}
}*/
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Book slot</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/default/style.css" rel="stylesheet">
<link href="assets/css/default/blocks.css" rcel="stylesheet">
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
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
    <img src="..//images//finalbooking.jpg" alt="image" width=100% height=883px class="bg-img" >
		<div class="container"  style="position:absolute;top:4%;left:22%;">
			<section style="padding-bottom: 5px; padding-top: 50px;">
<div class="row">
<!-- start -->
<!-- USER PROFILE ROW STARTS-->
<div class="row">
<div class="col-md-3 col-sm-3">
  <div class="user-wrapper"> <img src="assets/img/1.jpg" class="img-responsive" />
    <div class="description">
      <h4><?php echo $userRow['userFirstName']; ?> <?php echo $userRow['userLastName']; ?></h4>
      <h5> <strong> Resort </strong></h5>
      <p> </p>
      <hr />
      <button type="button" class="btn" data-toggle="modal" data-target="#myModal"><a href="profile.php?userId=<?php echo $userRow['icuser']; ?>"><i class="fa fa-fw fa-user"></i> Update Profile</a></button>
    </div>
  </div>
</div>
<div class="col-md-9 col-sm-9  user-wrapper">
<div class="description">
<div class="panel panel-default">
<div class="panel-body">
  
<div class="panel panel-default">
  <div class="panel-heading">user Information</div>
  <div class="panel-body"> user Name: <?php echo $userRow['userFirstName'] ?> <?php echo $userRow['userLastName'] ?><br>
    user IC: <?php echo $userRow['icuser'] ?><br>
    Contact Number: <?php echo $userRow['userPhone'] ?><br>
    Address: <?php echo $userRow['userAddress'] ?> </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading">booking Information</div>
  <div class="panel-body"> Slot: <?php echo $userRow['slot_name'] ?><br>
    Date: <?php echo $userRow['scheduleDate'] ?><br>
    Price: <?php echo $userRow['scheduleprice'] ?><br>
  </div>
</div>
<div class="panel panel-default">
<div class="panel-heading">Add On Services</div>
<div class="panel-body">
  <div class="form-group">
  <form class="form" action="addonserviceadd.php" method="POST">
    <input type="hidden" id="user" name="user" value=<?php echo $userRow['icuser']; ?> >
    <input type="hidden" id="appid" name="appid" value=<?php echo $appid; ?> >
    <select name="serviceid" id="serviceid"  class="form-control" tabindex="1" autofocus tabindex="1">
    <option selected="selected" value="" disabled="disabled">--Select Add On Services--</option>
    <?php foreach($result as $row){ ?>
    <option value="<?php echo $row['serviceid']; ?>"><?php echo $row['servicename']; ?></option>
    <?php }?>
    </select>
    </div>
    <div class="form-group">
    <input type="submit" name="Add" id="Add" class="btn btn-primary" value="Add">
  </form>
</div>
<table class="table table-hover table-bordered">
<thead>
  <tr class="filters">
    <th>Service</th>
    <th>Price</th>
    <th></th>
  </tr>
</thead>
<?php 
							$userIc1 = mysqli_real_escape_string($con,$userRow['icuser']);
							$q="SELECT servicename,temp_service_id,tempprice from temp_addon_services Right Join addonservices on temp_addon_services.serviceid=addonservices.serviceid WHERE scheduleid=$appid AND userId=".$userIc1;
							
                            $result=mysqli_query($con,$q);
                            

                                  
                            while ($adminschedule=mysqli_fetch_array($result)) {
                                
                              
                                echo "<tbody>";
                                echo "<tr>";
                                    echo "<td>" . $adminschedule['servicename'] . "</td>";
                                    echo "<td>" . $adminschedule['tempprice'] . "</td>";
                                   
                                    echo "<form method='POST'>";
									$id=$adminschedule['temp_service_id'];
                                    echo "<td class='text-center'><a href='addonservicedelete.php?selected_pk=$id&appid=$appid' class='delete'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>
                            </td>";
                               
                            } 
                                echo "</tr>";
                           echo "</tbody>";
                       echo "</table>";
							?>
							  <button type="button" class="btn btn-primary" onClick="window.location.href='payment.php?appid=<?php echo $appid; ?>&user=<?php echo $userRow['icuser']; ?>'" >Make Booking</button>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

  
<!-- USER PROFILE ROW END-->
<!-- end -->

</body>
</html>
