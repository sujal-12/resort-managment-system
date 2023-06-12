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
header("Location: user.php");
}
if (isset($_POST['signup'])) {
    $userFirstName = mysqli_real_escape_string($con,$_POST['userFirstName']);
    $userLastName  = mysqli_real_escape_string($con,$_POST['userLastName']);
    $userEmail     = mysqli_real_escape_string($con,$_POST['userEmail']);
    $icuser     = mysqli_real_escape_string($con,$_POST['icuser']);
    $password         = mysqli_real_escape_string($con,$_POST['password']);
    $month            = mysqli_real_escape_string($con,$_POST['month']);
    $day              = mysqli_real_escape_string($con,$_POST['day']);
    $year             = mysqli_real_escape_string($con,$_POST['year']);
    $userDOB       = $year . "-" . $month . "-" . $day;
    $userGender = mysqli_real_escape_string($con,$_POST['userGender']);
    //INSERT
    $query = " INSERT INTO user (  icuser, password, userFirstName, userLastName,  userDOB, userGender,   userEmail )
    VALUES ( '$icuser', '$password', '$userFirstName', '$userLastName', '$userDOB', '$userGender', '$userEmail' ) ";
    $result = mysqli_query($con, $query);
    // echo $result;
    if( $result )
    {
    ?>
    <script type="text/javascript">
    alert('Register success. Please Login to make an booking.');
    </script>
    <?php
    }
    else
    {
    ?>
    <script type="text/javascript">
    alert('User already registered. Please try again');
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

<script type="text/javascript">
function validate(){
var password=document.getElementById("password").value;
var confirmpassword=document.getElementById("confirm_password").value;

if(password==confirmpassword)
{
	return true;
}
else
{
alert("Password is not matching to Confirm Password.");
	return false;
}


}

</script>

</head>
<body>


<!--Navbar-->
<nav class="position-fixed fixed-top navbar navbar-expand-lg navbar-dark bg-dark py-0 text-justify" >
<img src="../project//images//logo.jpg" width="48px" height="45px" style="border-radius: 50%;" alt="">
  <a class="navbar-brand pl-4 h3 text-white" href="#">Resort</a>    <!--<div class="logo"><img src="RImages\img1.jpg" alt="logo"></div>-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
      <li class="nav-item active">
        <a class="nav-link pr-4 pl-4 h5 h-100" href="index.php">Home <span class="sr-only">(current)</span></a>
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


<img src=".//images//3.jpg" alt="" width="100%" height="100%">
<!--Navbarend-->
<!-- form start -->
<div class="container  d-flex mt-6 justify-content-center  " id="wrap">
                            <div class="row h-100">
                                <div class="d-flex align-items-center">
                                    
                                    <form action="<?php $_PHP_SELF ?>" method="POST" accept-charset="utf-8" class="form" role="form" onSubmit="return validate()">
                                        <h4>Enter your details properly.</h4>
                                        <div class="row">
                                            <div class="col-xs-6 col-md-4">
                                                <input type="text" name="userFirstName" value="" class="form-control input-lg" placeholder="First Name" required />
                                            </div>
                                            <div class="col-xs-6 col-md-4">
                                                <input type="text" name="userLastName" value="" class="form-control input-lg" placeholder="Last Name" required />
                                            </div>
                                        </div>
                                        
                                        <input type="email" name="userEmail" value="" class="col-md-8 form-control input-lg" placeholder="Your Email"  required/>
                                                                                
                                        <input type="password" name="password" id="password" value="" class="col-md-8 form-control input-lg" placeholder="Password"  required/>
                                        
                                        <input type="password" name="confirm_password" id="confirm_password" value="" class="col-md-8 form-control input-lg" placeholder="Confirm Password"  required/>
                                        <label>Birth Date</label>
                                        <div class="row">
                                            
                                            <div class="col-xs-4 col-md-3">
                                                <select name="month" class = "form-control input-lg" required>
                                                    <option value="">Month</option>
                                                    <option value="01">Jan</option>
                                                    <option value="02">Feb</option>
                                                    <option value="03">Mar</option>
                                                    <option value="04">Apr</option>
                                                    <option value="05">May</option>
                                                    <option value="06">Jun</option>
                                                    <option value="07">Jul</option>
                                                    <option value="08">Aug</option>
                                                    <option value="09">Sep</option>
                                                    <option value="10">Oct</option>
                                                    <option value="11">Nov</option>
                                                    <option value="12">Dec</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4 col-md-3">
                                                <select name="day" class = "form-control input-lg" required>
                                                    <option value="">Day</option>
                                                    <option value="01">1</option>
                                                    <option value="02">2</option>
                                                    <option value="03">3</option>
                                                    <option value="04">4</option>
                                                    <option value="05">5</option>
                                                    <option value="06">6</option>
                                                    <option value="07">7</option>
                                                    <option value="08">8</option>
                                                    <option value="09">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4 col-md-3">
                                                <select name="year" class = "form-control input-lg" required>
                                                    <option value="">Year</option>
                                                    
                                                    <option value="1981">1981</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                </select>
                                            </div>
                                        </div>
                                        <label>Gender : </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="userGender" value="male" required/>Male
                                        </label>
                                        <label class="radio-inline" >
                                            <input type="radio" name="userGender" value="female" required/>Female
                                        </label>
                                        <br />
                                        <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy.</span>
                                        
                                        <button class="col-md-8 btn btn-md btn-primary btn-block text-center signup-btn" type="submit"  name="signup" id="signup">Create my account</button>
                                        <p class="login_add"> Already have an account?<a href="login.php">Sign In</a></p>
                                      </form>
                                    
                                </div>
                            </div>
                        </div>



                        

<!-- script -->
  
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/79f38df92a.js" crossorigin="anonymous"></script>

</body>
</html>
