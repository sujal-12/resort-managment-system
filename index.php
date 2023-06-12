<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <!--font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
<!--icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!--review-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>


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
        <a class="nav-link pr-4 pl-4 h5  h-100 text-white " href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-4 pl-4 h5  h-100 text-white " href="#Services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-4 pl-4 h5  h-100 text-white " href="checkbooking.php">Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link pr-4 pl-4 h5  h-100 text-white " href="#Contact">Contact Us</a>
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
         
<div id="carouselExampleIndicators" class="carousel slide pt-5" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/party1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Receptions</h5>
        <p>We always like to Greet</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/holi.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Holi Events</h5>
        <p>We always like to Greet</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/Seminar.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Team Meetings</h5>
        <p>We always like to Greet</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--carousel end-->

<hr/><!--book-->
<div class="bg-dark" >
  <a href="checkbooking.php">
            <div class="container bg-dark"><marquee>
                <h2 class="text-white">Book Your Slot Now!</h2></marquee>
            </div></a>
        </div>
<hr/>
   <!--about-->     
  <section class="my-2 about_us"id="about">
    <div class="pt-5 pb-5" >
      <h2 class="text-center mt-1 mb-5"><b>About Us</b></h2>
    </div>
    <div class="container-fluid " >
      <div class="row">
         <div class="col-lg-6 col-md-6 col-12">
          <img src="images/g5.jpg" class="img-fluid aboutimg mb-5">
         </div>
         <div class="col-lg-6 col-md-6 col-12">
         <h2 class="display-4 ">We know what you love</h2>
										<p class="py-3 lead"><b>Providing best holiday destination or Event venue with its exceptional amenities, makes Resort one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.A reasonably priced resort in the quiet area, which is surrounded by green and very close to the Ward's Lake. Quiet roads along, which one can choose to go for long walk, along the lake. Staff are very helpful and courteous. Food in the restaurant is good and service prompt.</b></p>
                    <a href="about.php" class="btn btn-success">Read More</a>
         </div>
      </div>
    </div> 
     
  </section>
 
  <!--Services-->
  <section class="swiper mySwiper pt-5 mt-1 mt-6 " id="Services">
  <h2 class="text-center mt-4"><b>Our Services</b></h2>
      <div class="swiper-wrapper  pb-5">
      <div class="swiper-slide"><div class="card" >
        <img class="card-img-top" src="images/e2.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Party Hall</h4>
                <a href="#" class="btn btn-primary">Service Included</a>
              </div>
          </div></div>

        <div class="swiper-slide"><div class="card" >
        <img class="card-img-top" src="images/a1.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Dining Hall</h4>
                <a href="#" class="btn btn-primary">Service Included</a>
              </div>
          </div></div>

          <div class="swiper-slide"><div class="card" >
        <img class="card-img-top" src="images/g8.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">6 Room</h4>
                <a href="#" class="btn btn-primary">Service Included</a>
              </div>
          </div></div>

          <div class="swiper-slide"><div class="card" >
        <img class="card-img-top" src="images/g5.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Swiming Pool</h4>
                <a href="#" class="btn btn-primary">Service Included </a>
              </div>
          </div></div>

          <div class="swiper-slide"><div class="card" >
        <img class="card-img-top " src="images/car.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Car Rental</h4>
                <a href="#" class="btn btn-primary">Add on Services</a>
              </div>
          </div></div>

          <div class="swiper-slide"><div class="card" >
        <img class="card-img-top " src="images/food2.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">Food Package</h4>
                <a href="#" class="btn btn-primary">Add on Services</a>
              </div>
          </div></div>

          <div class="swiper-slide"><div class="card" >
        <img class="card-img-top " src="images/turf1.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title ">Turf</h4>
                <a href="#" class="btn btn-primary ">Add on Services</a>
              </div>
          </div></div>

          <div class="swiper-slide"><div class="card" >
        <img class="card-img-top " src="images/seminar1.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title ">Seminar hall</h4>
                <a href="#" class="btn btn-primary ">Add on Services</a>
              </div>
          </div></div>
          
          <div class="swiper-slide"><div class="card" >
        <img class="card-img-top " src="images/g6.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title ">Additional 4 Rooms</h4>
                <a href="#" class="btn btn-primary ">Add on Services</a>
              </div>
          </div></div>


      </div>
      <div class="swiper-pagination"></div>
</section>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        freeMode: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
  <!--services end-->
   <!-- review -->
   <section id="testimonials" class="mt-2">
    <div class="testimonial-heading">
      <span>Comments</span>
      <h1>Customer Says</h1>
    </div>
    <!-- box-container -->
    <div class="testimonial-box-container">
      <!-- box1 -->
      <div class="testimonial-box">
        <!-- top -->
        <div class="box-top">
          <!-- profile -->
          <div class="profile">
            <div class="profile-img">
              <img src="images/prajwal.jpg" alt="logo"/>
            </div>
            <div class="name-user">
              <strong>Prajwal Jadhav</strong>
              <span>@PrajwalJadhav</span>
            </div>
          </div>
        <!-- review -->
        <div class="review">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        </div>
        <!-- comments -->
        <div class="client-comment">
          <p> This place is cozy, neat and clean. Really good place to stay in Nashik. Great food. Decent price. Good view. Nice rooms. Decent amenities.</p>
        </div>
      </div>
      <!-- box2 -->
      <div class="testimonial-box">
        <!-- top -->
        <div class="box-top">
          <!-- profile -->
          <div class="profile">
            <div class="profile-img">
              <img src="images/nakshtra.jpg" alt="logo"/>
            </div>
            <div class="name-user">
              <strong>Nakshtra</strong>
              <span>@Nakshtra</span>
            </div>
          </div>
        <!-- review -->
        <div class="review">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        </div>
        <!-- comments -->
        <div class="client-comment">
          <p> The food was excellent with a wide variety of menu to suite all kinds of tastebuds.
</p>
        </div>
      </div>
      <!-- box3 -->
      <div class="testimonial-box">
        <!-- top -->
        <div class="box-top">
          <!-- profile -->
          <div class="profile">
            <div class="profile-img">
              <img src="images/carol.jpg" alt="logo"/>
            </div>
            <div class="name-user">
              <strong>Carolin</strong>
              <span>@Carolin</span>
            </div>
          </div>
        <!-- review -->
        <div class="review">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        </div>
        <!-- comments -->
        <div class="client-comment">
          <p> It was actually a last minute decision to organise the event but we never had to regret.. good food, neat room with all amenities, super ambience.. reasonable rates..the staff are very cordial and pleasant..I would recommend this Resort to anyone visiting Nashik.</p>
        </div>
      </div>
      <!-- box4 -->
      <div class="testimonial-box">
        <!-- top -->
        <div class="box-top">
          <!-- profile -->
          <div class="profile">
            <div class="profile-img">
              <img src="images/atharva.jpeg" alt="logo"/>
            </div>
            <div class="name-user">
              <strong>Atharva</strong>
              <span>@Atharva</span>
            </div>
          </div>
        <!-- review -->
        <div class="review">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
         
        </div>
        </div>
        <!-- comments -->
        <div class="client-comment">
          <p> 
             All the Services and the executive suite are top class,However it's a little far from the Police Bazaar shopping area.</p>
        </div>
      </div>

    </div>



  </section>
   
<!-- review end -->

 <!--contact us-->
 <section class="Contact pt-5" id="Contact">
  <div class="wrapper m-auto">
  <h2 class="pb-2">CONTACT US</h2>
    <form action="contactinfo.php" method="POST">
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" name="Name" id="name" placeholder="First and Last" required minlength="3" maxlength="25" />
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" name="Email" id="email" placeholder="email@domain.tld" required />
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea name="Message" id="message" rows="5" placeholder="Type your message here...." required></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="submit"><i class="far fa-paper-plane"></i>Send</button>
      </div>
    </form>
  </div>
    </section>
    <!-- contact end -->
     
   <!--footer-->
   <!-- Site footer -->
   <footer class="site-footer" style="left;10%;">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-4">


          <h6>Quick Links</h6>
            <ul class="footer-links">
              <li><a href="about.php">About Us</a></li>
              <li><a href="index.php #Contact">Contact Us</a></li>
              <li><a href="about.php #team">Contribute</a></li>
              <li><a href="index.php #Services">Services</a></li>
              <li><a href="#">Sitemap</a></li>
            </ul>
           
          </div>

          <div class="col-xs-6 col-md-3">
            <div><h6 class=" pb-2 align-center display-5"> Address </h6>
              <p class="text-justify">
                1101/A-2-Modelcolony,<br>Gangapur road,Nashik,<br>Maharashtra-422005
              </p>          
          </div>
          
            
          </div>

          <div class="col-xs-10 col-md-3">
            
          <h6>Contact</h6>
            <div>Email:cabins@gmail.com<br>
              Phone no:+91 0000000000
        </div>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-2 col-xs-8">
            <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
         <a href="#">Resort</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-6">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>


  <!--footerend-->
  
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/79f38df92a.js" crossorigin="anonymous"></script>
</body>
</html>