<?php
include_once '../assets/conn/dbconnect.php';
// Get the variables.
$icuser = $_POST['ic'];
// echo $appid;

$delete = mysqli_query($con,"DELETE FROM user WHERE icuser=$icuser");
// if(isset($delete)) {
//    echo "YES";
// } else {
//    echo "NO";
// }



?>

