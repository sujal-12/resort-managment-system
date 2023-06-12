<?php

include_once 'assets/conn/dbconnect.php';
$q = $_GET['q'];
// echo $q;
$res = mysqli_query($con,"SELECT scheduleDate,slot_name,scheduleprice,bookAvail FROM adminschedule Right Join slots on adminschedule.slot_id=slots.slot_id WHERE scheduleDate='$q'");



if (!$res) {
die("Error running $sql: " . mysqli_error());
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
    
</head>
<body>
     <?php 

        if (mysqli_num_rows($res)==0) {

            echo "<div class='alert alert-danger' role='alert'>admin is not available at the moment. Please try again later.</div>";
                
            } else {
             echo "   <table class='table table-hover'>";
        echo " <thead>";
            echo " <tr>";
                echo " <th>Date</th>";
               echo "  <th>Slot</th>";
               echo "  <th>Price</th>";
                echo " <th>Availability</th>";
            echo " </tr>";
       echo "  </thead>";
       echo "  <tbody>";

         while($row = mysqli_fetch_array($res)) { 

            ?>

            <tr>
                <?php

                // $avail=null;
                if ($row['bookAvail']!='available') {
                $avail="danger";
                } else {
                $avail="primary";
                
            }
                echo "<td>" . $row['scheduleDate'] . "</td>";
                echo "<td>" . $row['slot_name'] . "</td>";
                echo "<td>" . $row['scheduleprice'] . "</td>";
                echo "<td> <span class='label label-".$avail."'>". $row['bookAvail'] ."</span></td>";
                ?>
            </tr>
        <?php
    }
}
    ?>
        </tbody>
    </body>
</html>