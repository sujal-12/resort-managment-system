
<?php
print_r($_POST);

include_once '../assets/conn/dbconnect.php';

if (isset($_POST['booking11'])) {
$userIc = mysqli_real_escape_string($con,$_POST['user']);
$scheduleid = mysqli_real_escape_string($con,$_POST['appid']);

$holdername = mysqli_real_escape_string($con,$_POST['holdername']);
$netamt = mysqli_real_escape_string($con,$_POST['netamt']);
$cardno = mysqli_real_escape_string($con,$_POST['cardno']);
$avail = "notavail";


$query = "INSERT INTO booking (  userIc , scheduleId  , netamt , cardholder , cardno  )
VALUES ( '$userIc', '$scheduleid', '$netamt', '$holdername', '$cardno') ";

//update table booking schedule
$sql = "UPDATE adminschedule SET bookAvail = '$avail' WHERE scheduleId = $scheduleid" ;
$scheduleres=mysqli_query($con,$sql);
if ($scheduleres) {
	$btn= "disable";
} 
$result = mysqli_query($con,$query);

$query2="SELECT appId from booking where userIc=$userIc AND scheduleId=$scheduleid";
$res2 = mysqli_query($con,$query2);
$app=mysqli_fetch_array($res2,MYSQLI_ASSOC);
$appid=$app['appId'];


$sql3="select * from temp_addon_services where userId=$userIc AND scheduleid=$scheduleid";		
$result3=array();
$res3= mysqli_query($con,$sql3);
while ($row3 = mysqli_fetch_assoc($res3)) {
$result3[]=$row3;
}
$addonsum=0;
foreach($result3 as $row4)
{
	$serviceid=$row4['serviceid'];
	$serviceprice=$row4['tempprice'];
	$addonsum=$addonsum+$serviceprice;

	$query4 = "INSERT INTO booking_services (  booking_id , service_id  , serviceprice  )
VALUES ( '$appid', '$serviceid', '$serviceprice') ";
	$result4 = mysqli_query($con,$query4);


}
$qa6="SELECT scheduleprice FROM adminschedule where scheduleId=$scheduleid";
$res6 = mysqli_query($con,$qa6);
$scheduleprice=mysqli_fetch_array($res6,MYSQLI_ASSOC);

$addonsum=$addonsum+$scheduleprice['scheduleprice'];

$qa7="Update booking set netamt=$addonsum where appId=$appid";
$res7 = mysqli_query($con,$qa7);

$sql5="Delete from temp_addon_services where userId=$userIc AND scheduleid=$scheduleid";		
$res5= mysqli_query($con,$sql5);

// echo $result;
if( $result4 )
{
header("Location: userapplist.php");
}
}
?>
