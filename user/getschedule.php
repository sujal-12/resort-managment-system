<?php
session_start();
include_once '../assets/conn/dbconnect.php';
$q = $_GET['q'];
$res = mysqli_query($con,"SELECT scheduleId,scheduleDate,scheduleprice,bookAvail,slot_name FROM adminschedule RIGHT JOIN slots ON adminschedule.slot_id =slots.slot_id WHERE scheduleDate='$q' AND bookAvail='available'");
if (!$res) {
die("Error running $sql: " . mysqli_error());
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php
        if (mysqli_num_rows($res)==0) {
        echo "<div class='alert alert-danger' role='alert'>No Data Available.</div>";
        
        } else {
        echo "   <table class='table table-hover'>";
            echo " <thead>";
                echo " <tr>";
                    echo " <th>App Id</th>";
                    echo " <th>Date</th>";
                    echo "  <th>Slot</th>";
                    echo "  <th>Price</th>";
                    echo " <th>Availability</th>";
                    echo "  <th>Book Now!</th>";
                echo " </tr>";
            echo "  </thead>";
            echo "  <tbody>";
                while($row = mysqli_fetch_array($res)) {
                ?>
                <tr>
                    <?php
                    // $avail=null;
                    // $btnclick="";
                    if ($row['bookAvail']!='available') {
                    $avail="danger";
                    $btnstate="disabled";
                    $btnclick="danger";
                    } else {
                    $avail="primary";
                    $btnstate="";
                    $btnclick="primary";
                    }

                   
                    // if ($rowapp['bookAvail']!="available") {
                    // $btnstate="disabled";
                    // } else {
                    // $btnstate="";
                    // }
                    echo "<td>" . $row['scheduleId'] . "</td>";
                    echo "<td>" . $row['scheduleDate'] . "</td>";
                    echo "<td>" . $row['slot_name'] . "</td>";
                    echo "<td>" . $row['scheduleprice'] . "</td>";
                    echo "<td> <span class='label label-".$avail."'>". $row['bookAvail'] ."</span></td>";
                    echo "<td><a href='booking.php?&appid=" . $row['scheduleId'] . "&scheduleDate=".$q."' class='btn btn-".$btnclick." btn-xs' role='button' ".$btnstate.">Book Now</a></td>";
                    // echo "<td><a href='booking.php?&appid=" . $row['scheduleId'] . "&scheduleDate=".$q."'>Book</a></td>";
                    // <td><button type='button' class='btn btn-primary btn-xs' data-toggle='modal' data-target='#exampleModal'>Book Now</button></td>";
                    //triggered when modal is about to be shown
                    ?>
                    
                    </script>
                    <!-- ?> -->
                </tr>
                
                <?php
                }
                }
                ?>
            </tbody>
            <!-- modal start -->
            
            
            
            
            
        </body>
    </html>