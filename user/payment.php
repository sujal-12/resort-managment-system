<?php
include_once '../assets/conn/dbconnect.php';
$userIc = mysqli_real_escape_string($con,$_GET['user']);
$scheduleid = mysqli_real_escape_string($con,$_GET['appid']);
$sql3="select * from temp_addon_services where userId=$userIc AND scheduleid=$scheduleid";		
$result3=array();
$res3= mysqli_query($con,$sql3);
while ($row3 = mysqli_fetch_assoc($res3)) {
$result3[]=$row3;
}
$addonsum=0;
foreach($result3 as $row4)
{
	$serviceprice=$row4['tempprice'];
	$addonsum=$addonsum+$serviceprice;	
}
$qa6="SELECT scheduleprice FROM adminschedule where scheduleId=$scheduleid";
$res6 = mysqli_query($con,$qa6);
$scheduleprice=mysqli_fetch_array($res6,MYSQLI_ASSOC);

$addonsum=$addonsum+$scheduleprice['scheduleprice'];

?>


<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> 
  <!--font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
<!--icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- css -->
<link rel="stylesheet" type="text/css" href="css/payment.css">
<link rel="stylesheet" type="text/css" href="css/home.css">
<style>
* {
    margin: 0;
    padding: 0
}

html {
    height: 100%
}

body {
    background-color: #000000
}

.card0 {
    margin: 50px 12px 40px 12px;
    border: 0
}

.card1 {
    margin: 0;
    padding: 0;
    object-fit: contain;
    height: 100%;
    background-color: #EDE7F6;
    position: relative;
    border-top-left-radius: 10px !important;
    border-bottom-left-radius: 10px !important;
}

#sub-heading1 {
    font-size: 55px;
}

#sub-heading2 {
    font-size: 20px;
    color: grey;
}

.gift-input {
    background: none;
}

#heading {
    font-size: 33px;
    color: #000000;
    padding-bottom: 20px;
}

.placeicon {
    font-family: fontawesome !important
}

.card2 {
    padding: 25px;
    padding-left: 35px;
    padding-right: 35px;
    margin: 0;
    height: 100%;
    border-top-right-radius: 10px !important;
    border-bottom-right-radius: 10px !important;
}

.text-dark {
    color: grey !important;
}

.form-card {
    height: 100%;
    position: relative;
}

.form-card input,
.form-card textarea {
    padding: 5px 1px 10px 1px;
    border: none;
    border-bottom: 1px solid lightgrey;
    border-radius: 0px;
    margin-bottom: 35px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 1px;
}

.form-card input:focus,
.form-card textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: none;
    font-weight: bold;
    border-bottom: 1.5px solid skyblue;
    padding-bottom: 9.5px;
    outline-width: 0;
}

.form-card .btn-success {
    color: #ffffff !important;
    margin-bottom: 25px !important;
    font-weight: 300;
    width: 100%;
    border-radius: 4px;
    letter-spacing: 2px;
    font-family: Trebuchet MS !important;
}

.bottom {
    bottom: 0;
    position: absolute;
    width: 100%;
}

@media (max-width: 768px) {
    .bottom {
        position: relative;
    }

    .card1 {
        padding-right: 15px;
        border-top-left-radius: 10px !important;
        border-top-right-radius: 10px !important;
        border-bottom-left-radius: 0px !important;
        border-bottom-right-radius: 0px !important;
    }

    .card2 {
        border-bottom-left-radius: 10px !important;
        border-bottom-right-radius: 10px !important;
        border-top-left-radius: 0px !important;
        border-top-right-radius: 0px !important;
    }
}

.fit-image {
    width: 100%;
    object-fit: cover;
}

.radio-group {
    position: relative;
    margin-bottom: 25px
}

.radio {
    display: inline-block;
    width: 204;
    height: 64;
    border-radius: 0;
    background: #B2EBF2;
    box-sizing: border-box;
    border-top: 3px solid #E8F5E9;
    cursor: pointer;
    margin: 8px 0px 8px 0px;
    transition: 0.3s;
}

.radio:hover {
    border-top: 3px #B2EBF2 solid;
    transition: 0.3s;
}

.radio.selected {
    border-top: 3px solid #0091EA;
    transition: 0.3s;
}
</style>

</head>
<body>
<div class="container-fluid">								
    <form method="post" action="finalbooking.php" class="form-control">

    <div class="row justify-content-center">
        <div class="col-6 col-sm-10 col-md-6 col-lg-6 col-xl-10">
            <div class="card card0">
                <div class="row">
                    
                    <div class="col-md-12 col-sm-12 p-0 box">
                        <div class="card rounded-0 border-0 card2">
                            <div class="form-card">
                                <h2 id="heading" class="text-center">Payment Information</h2>

                                <div class="radio-group">
                                    <div class='radio selected' data-value="credit"><img src="https://i.imgur.com/28akQFX.jpg" width="200px" height="60px"></div>
                                    <div class='radio' data-value="paypal"><img src="https://i.imgur.com/5QFsx7K.jpg" width="200px" height="60px"></div> <br>
                                </div>

                                <h3 id="credit" class="mb-3">Credit card</h3>
								
								<input type="hidden" id="user" name="user" value=<?php echo $userIc; ?> >
								<input type="hidden" id="appid" name="appid" value=<?php echo $scheduleid; ?> >
								<!-- <input type="hidden" id="comment" name="comment" value=<?php echo $comment; ?> > -->
								<input type="hidden" id="netamt" name="netamt" value=<?php echo $addonsum; ?> >	
                                <input type="text" name="holdername" placeholder="John Smith" required />
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="cardno" id="cr_no" placeholder="0000000000000000" minlength="16" maxlength="16"required />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-9 col-md-7">
                                        <input type="text" name="exp" id="exp" placeholder="MM/YY" minlength="5" maxlength="5" required />
                                    </div>
                                    <div class="col-3 col-md-5">
                                        <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3" required>
                                    </div>
                                </div>
                                <br /><br /><br /><br /><br /><br />

                                <div class="bottom">
                                    <div class="row justify-content-center">
                                        <div class="col-12">
                                            <h4 id="total" class="text-center">Total: <?php echo $addonsum; ?></h4>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <input type="submit" name="booking11" value="Make Payment" class="btn btn-success">
											</form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
        $(document).ready(function() {
            $('#form1').bootstrapValidator({
                fields: { 
                    cardno: {
            verbose: false,
                validators: {notEmpty: {
                        message: 'The Card Number is required and can\'t be empty'
                    },stringLength: {
                    min: 16,
                    max: 16,
                    message: 'The Card Number must 16 characters long'
                },regexp: {
                        regexp: /^[0-9 ]+$/,
                        message: 'Enter a valid Card Number'
                    } } },
                    cvv: {
            verbose: false,
                validators: {notEmpty: {
                        message: 'The cvv is required and can\'t be empty'
                    },stringLength: {
                    min: 3,
                    max: 3,
                    message: 'The cvv must 3 characters long'
                },regexp: {
                        regexp: /^[0-9 ]+$/,
                        message: 'Enter a valid cvv'
                    } } }}
            });
            });
</script>
</body>
</html>