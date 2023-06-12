<?php
session_start();
include_once '../assets/conn/dbconnect.php';
if (isset($_GET['appid'])) {
$appid=$_GET['appid'];
}
$res=mysqli_query($con, "SELECT a.*, b.*,c.*,s.* FROM user a
JOIN booking b
On a.icuser = b.userIc
JOIN adminschedule c
On b.scheduleId=c.scheduleId
JOIN slots s
On c.slot_id=s.slot_id
WHERE b.appId  =".$appid);

$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);

$appid=$userRow['appId'];


$sql="select booking_services.*,addonservices.* from booking_services Right join addonservices on booking_services.service_id=addonservices.serviceid where booking_id=$appid";		
$result=array();
$res= mysqli_query($con,$sql);
while ($row1 = mysqli_fetch_assoc($res)) {
$result[]=$row1;
}

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hotel taj</title>
        
        <link rel="stylesheet" type="text/css" href="assets/css/invoice.css">
    </head>
    <body>
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="assets/img/logo.png" style="width:100%; max-width:300px;">
                                </td>
                                
                                <td>
                                    Invoice #: <?php echo $userRow['appId'];?><br>
                                    Hotel taj <?php echo "5start";?><br>

                                    Created: <?php echo date("d-m-Y");?><br>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    <?php echo $userRow['userAddress'];?>
                                </td>
                                
                                <td><?php echo $userRow['userIc'];?><br>
                                    <?php echo $userRow['userFirstName'];?> <?php echo $userRow['userLastName'];?><br>
                                    <?php echo $userRow['userEmail'];?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                
                
                <tr class="heading">
                    <td>
                        booking Details
                    </td>
                    
                    <td>        
                    </td>
                </tr>
                
                <tr class="item">
                    <td>
                        booking ID
                    </td>
                    
                    <td>
                       <?php echo $userRow['appId'];?>
                    </td>
                </tr>
                
                <tr class="item">
                    <td>
                        Schedule ID
                    </td>
                    
                    <td>
                        <?php echo $userRow['scheduleId'];?>
                    </td>
                </tr>

                <tr class="item">
                    <td>
                        Slot
                    </td>
                    
                    <td>
                        <?php echo $userRow['slot_name'];?>
                    </td>
                </tr>
                

                 <tr class="item">
                    <td>
                        booking Date
                    </td>
                    
                    <td>
                        <?php echo $userRow['scheduleDate'];?>
                    </td>
                </tr>
                 <tr class="item">
                    <td>
                        Amount
                    </td>
                    
                    <td>
                        <?php echo $userRow['scheduleprice'];?> 
                    </td>
                </tr>
                <tr class="heading">
                    <td>
                        Add on services
                    </td>
                    
                    <td>
                    </td>
                </tr>
                <?php foreach($result as $row){ ?>
															<tr class="item">
                    <td>
                        <?php echo $row['servicename'];?> 
                    </td>
                    
                    <td>
                        <?php echo $row['price'];?> 
                    </td>
                </tr>
															
															<?php }?>
															
				<tr class="heading">
                    <td>
                        Net Amt.
                    </td>
                    
                    <td>
                        <?php echo $userRow['netamt'];?> 
                    </td>
                </tr>											
                
            </table>
        </div>
        <div class="print">
        <button onClick="myFunction()">Print this page</button>
</div>
<script>
function myFunction() {
    window.print();
}
</script>
    </body>
</html>