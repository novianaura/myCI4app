<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="mu-header">  
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- LOGO -->       

           <!--  Text based logo  -->
          <a class="navbar-brand" href="index.html">Osteria<span>X</span></a> 

		      <!--  Image based logo  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="Logo img"></a>  -->
         

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="index.html">HOME</a></li>
            <li><a href="#mu-about-us">ABOUT US</a></li>                       
            <li><a href="#mu-restaurant-menu">MENU</a></li>                       
            <li><a href="#mu-reservation">RESERVATION</a></li>                       
            <li><a href="#mu-gallery">GALLERY</a></li>
            <li><a href="#mu-chef">OUR CHEFS</a></li> 
            <li><a href="#mu-contact">CONTACT</a></li> 
          </ul>                            
        </div><!--/.nav-collapse -->       
      </div>          
    </nav> 
  </header>
  <!-- End header section -->


  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/simple-animated-counter.js"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script> 
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="assets/js/app.js"></script>
 
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 
</body>
</html>

<style>
    body {
  background-color: #ffffff;
  font-family: "Prata", serif;
  color: #333333;
  font-size: 15px;
  overflow-x: hidden;
  line-height: 24px;
}

.no-padding {
  padding: 0;
}


ul {
  padding: 0;
  margin: 0;
  list-style: none;
}

a {
  text-decoration: none;
  color: #333333;
}

a:hover,
a:focus {
  outline: none;
  text-decoration: none;
}

h1, 
h2, 
h3, 
h4, 
h5, 
h6 {
  font-family: "Open Sans", sans-serif;
}

h2 {
  font-size: 30px;
  font-weight: 700;
  line-height: 40px;
  margin: 0;
}

img {
  border: none;
  max-width: 100%;
}

</style>