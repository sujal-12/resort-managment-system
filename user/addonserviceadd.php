<?php
include_once '../assets/conn/dbconnect.php';

if (isset($_POST['booking'])) {
$userIc = mysqli_real_escape_string($con,$_POST['user']);
$scheduleid = mysqli_real_escape_string($con,$_POST['appid']);
$comment=mysqli_real_escape_string($con,$_POST['comment']);
header("Location: payment.php?appid=$appid&user=$userIc&comment=$comment");

}
else if (isset($_POST['Add'])) 
{
	
	$appid = $_POST['appid'];
	$user = $_POST['user'];
	$scheduleid = mysqli_real_escape_string($con,$appid);
	$serviceid = mysqli_real_escape_string($con,$_POST['serviceid']);
	
	$res = mysqli_query($con,"SELECT price FROM addonservices where serviceid=$serviceid");
	$service=mysqli_fetch_array($res,MYSQLI_ASSOC);
	$price=$service["price"];
	
	$query = "INSERT INTO temp_addon_services (  userId , scheduleid , serviceid , tempprice  )
	VALUES ( '$user', '$scheduleid', '$serviceid', '$price') ";
	
	$resu = mysqli_query($con,$query);
	
	if($resu)
	{
		header("Location: booking.php?appid=$appid");
	}	
}
	

?>
