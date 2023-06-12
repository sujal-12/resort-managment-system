<?php
include_once 'assets/conn/dbconnect.php';
// include_once 'assets/conn/server.php';

$c_Name= $_POST['Name'];
$c_email= $_POST['Email'];
$c_message= $_POST['Message'];

$qryy="INSERT INTO `contact_info`(`c_Name`, `c_email`, `c_message`) VALUES ('$c_Name','$c_email','$c_message')";

 $result=mysqli_query($con, $qryy);
 if($result){
?>
<script type="text/javascript">
alert('We will contact you as soon as possible');
</script>
<?php
header('location:index.php #Contact');
} else {
?>
    <script>
    alert('cannot take inputs');
    </script>
<?php
    }
 ?>