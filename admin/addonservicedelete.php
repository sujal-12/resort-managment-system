<?php
session_start();
// include_once '../connection/server.php';

include_once '../assets/conn/dbconnect.php';
if(isset($_REQUEST['selected_pk']))
{
$selected_pk=$_REQUEST['selected_pk'];
$sql="DELETE FROM  addonservices where serviceid=$selected_pk";
mysqli_query($con,$sql);

$appid=$_REQUEST['appid'];
}
?>
<script>
 window.location.href = 'addservice.php';
</script>
