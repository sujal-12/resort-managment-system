
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
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/home.css">

</head>
<body>


<!--Navbar-->
<nav class="position-fixed fixed-top navbar navbar-expand-lg  py-0 text-justify nav-col" >
<img src="../project//images//logo.jpg" width="48px" height="45px" style="border-radius: 50%;" alt="">
  <a class="navbar-brand pl-4 h3 text-white" href="#">Resort</a>
    <!--<div class="logo"><img src="RImages\img1.jpg" alt="logo"></div>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link pr-4 pl-4 h5 h-100 text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-4 pl-4 h5  h-100 text-white " href="index.php #about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-4 pl-4 h5  h-100 text-white " href="index.php #Services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-4 pl-4 h5  h-100 text-white " href="checkbooking.php">Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-4 pl-4 h5  h-100 text-white " href="index.php #Contact">Contact Us</a>
      </li>
      <li class="nav-item">
            <a class="nav-link pr-4 pl-4 h5  h-100 text-white ml-0 " href="login.php">SignUp/SignIn</a>
          </li>
    </ul>
    
  </div>
  
  
  <!-- <div class="ml-auto "> <a href="#" class="insta-icon fab fa-instagram fa-2x pr-3"></a></div>
  <div class="ml-auto "> <a href="#" class="twit-icon fab fa-twitter fa-2x"></a></div> -->

</nav>

<img src=".//images//image97.jpg" alt="" width="100%" height="100%">

<!--Navbarend-->


<section id="promo-1" class="content-block promo-1 min-height-600px bg-offwhite">
<div class="container  d-flex justify-content-center mt-5  " style="background-color:#dfdfdfb2; ">
              <div class="row">
                <div class=" ">
              <h4 class="slot_head">Check your slots now!<br>
                To book slot please register/login first</h4>
                <hr>
                    <div class="input-group" style="margin-bottom:10px;">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                              </div>
                              <input class="form-control calender " id="date" name="date" value="<?php echo date("Y-m-d")?>" onchange="showUser(this.value)"/>
                              <div class="slotshowing" style="font-weight:900 ;">
                              
                       </div>
                        <!-- date textbox end -->

                        <!-- script start -->
                        <script>

                            function showUser(str) {
                                
                                if (str == "") {
                                    document.getElementById("txtHint").innerHTML = "";
                                    return;
                                } else { 
                                    if (window.XMLHttpRequest) {
                                        // code for IE7+, Firefox, Chrome, Opera, Safari
                                        xmlhttp = new XMLHttpRequest();
                                    } else {
                                        // code for IE6, IE5
                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                    }
                                    xmlhttp.onreadystatechange = function() {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET","getuser.php?q="+str,true);
                                    console.log(str);
                                    xmlhttp.send();
                                }
                            }
                        </script>
                        
                        
                        <div id="txtHint"><b> </b></div>
                          
                       
                    </div>
             </div>
                <!-- /.row -->
            </div>
        </section>
 
        <script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })

    })

</script>

    <!-- date end -->
    

<!-- back to top -->
<!-- <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a> -->
<!-- script -->
  
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/79f38df92a.js" crossorigin="anonymous"></script>
        
</body>



</html>
        