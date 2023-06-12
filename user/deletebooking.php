<?php
include_once '../assets/conn/dbconnect.php';
// Get the variables.
$appid = $_REQUEST['selected_pk'];
$user = $_REQUEST['user'];
$scheduleid = $_REQUEST['scheduleid'];
// echo $appid;

$sq="DELETE FROM booking WHERE appId=$appid AND userIc=$user";
echo $sq;
$delete = mysqli_query($con,$sq);
$delete = mysqli_query($con,"DELETE FROM booking_services WHERE booking_id=$appid");
$delete = mysqli_query($con,"UPDATE adminschedule set bookAvail='available' WHERE scheduleId=$scheduleid");



// if(isset($delete)) {
//    echo "YES";
// } else {
//    echo "NO";
// }



?>
<script>
 window.location.href = 'userapplist.php';
</script>
