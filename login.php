<?php
include_once 'assets/conn/dbconnect.php';
// include_once 'assets/conn/server.php';
?>


<!-- login -->
<!-- check session -->
<?php
session_start();
// session_destroy();
if (isset($_SESSION['userSession']) != "") {
header("Location: user/user.php");
}
if (isset($_POST['login']))
{
$icuser = mysqli_real_escape_string($con,$_POST['icuser']);
$password  = mysqli_real_escape_string($con,$_POST['password']);

$res = mysqli_query($con,"SELECT * FROM user WHERE userEmail = '$icuser'");
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
if ($row['password'] == $password)
{
$_SESSION['userSession'] = $row['icuser'];
?>
<script type="text/javascript">
alert('Login Success');
</script>
<?php
header("Location: user/user.php");
} else {
?>
<script>
alert('wrong input ');
</script>
<?php
}
}
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
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/home.css">

</head>
<body>
<!--Navbar-->
<nav class="position-fixed fixed-top navbar navbar-expand-lg  py-0 text-justify nav-col" >
<img src="../project//images//logo.jpg" width="48px" height="45px" style="border-radius: 50%;" alt="">
  <a class="navbar-brand pl-4 h3 text-white" href="#">Resort</a>    <!--<div class="logo"><img src="RImages\img1.jpg" alt="logo"></div>-->
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



<!--Navbarend-->
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
               
                <button type="button" class="submit-btn">Sign In</button>
            </div>
            
        <form class="input-group" id="log"method="POST" accept-charset="UTF-8" >
            <label class="sr-only" for="icuser">Email</label>
            <input type="email" class="input-field" name="icuser" placeholder="Email Address" required>
            <label class="sr-only" for="password">Password</label>
            <input type="password" class="input-field" name="password" placeholder="Password" required>

             <button type="submit" name="login" id="login" class="submit-btn">Log in</button>
             <br>
             <p class="signup_add"> Don't have an account? &nbsp; <a href="signup.php">sign up</a></p>
             <p class="signup_add"> If you are an admin.. &nbsp; <a href="adminlogin.php">admin</a></p>
             
</form>
</div>
</div>
</div>
   <!-- back to top -->
<!-- <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a> -->



<!-- script -->
  
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/79f38df92a.js" crossorigin="anonymous"></script>     

</body>



</html>

