<!DOCTYPE html>


<html lang="en">

  <head>

 <?php
 session_start();
 include "../../entities/utilisateur.php";
include "../../core/utilisateurC.php";
 ?>
    
    <title>Obladi Coffee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="images/logoobladi.png" style="width: 55px;"></small></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          
           <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="Reservation.html" class="nav-link">Reservation</a></li>
            <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="about.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About us</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="contact.html">Contact us</a>
                <a class="dropdown-item" href="product-single.html">Our Team</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="shop.html">Shop</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="room.html">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
              </div>
            </li>
            <li  class="nav-item dropdown" class="nav-item" ><a href="myaccount.php" class="nav-link btn btn-primary" > <?php echo $_SESSION['nom']; ?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" name="logout" href="logout.php">logout</a>
              </div></li>
            <li class="nav-item cart"><a href="cart.html" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
          </ul>

        </div>
      </div>
    </nav>
    <!-- END nav -->
    <div style="margin-top: 231px;margin-left: 195px;display: table;" >

<form method="POST" class="billing-form ftco-bg-dark p-3 p-md-5" style="background-color: #4b9d4d99" >
              <h3 class="mb-4 billing-heading">Modifier </h3>
              <div class="row align-items-end">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nom">nom</label>
                    <input type="text" class="form-control" value="<?php echo $_SESSION['nom']; ?>"   name="nom">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="prenom">Last Name</label>
                    <input type="text" class="form-control"   value="<?php echo $_SESSION['prenom']; ?>"   name="prenom">
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="towncity">date </label>
                    <input type="date" class="form-control" name="dateNaissance" value="<?php echo $_SESSION['dateNaissance']; ?>">
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                <div class="w-100"></div>
               
                <div class="w-100"></div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="towncity">profession </label>
                    <input type="text" class="form-control" name="prof" value="<?php echo $_SESSION['prof']; ?>">
                  </div>
                </div>
                <div class="w-100"></div>
                
                <div class="col-md-6">
                  <div class="form-group">
                    <select name="region" class="forms_field-input" value="<?php echo $_SESSION['region']; ?>">
                  <option value="none">Sélectionnez votre region</option>
                  <option value="La petite ariana">La petite ariana</option>
                  <option value="Cité el ghazela">Cité el ghazela</option>
                  <option value="Raoued">Raoued</option>
                  <option value="Menzah">Menzah</option>
            </select>
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="phone">Numero Tel </label>
                    <input type="number" class="form-control" name="numTel" value="<?php echo $_SESSION['numTel']; ?>" >
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                  <div class="form-group mt-4">
                    <div class="radio">
                      <button type="submit" class="btn btn-white py-3 px-4" name="modifier">Modifier </button>
                    </div>
                  </div>
                </div>
              </div>
            </form><!-- END -->

               
                
                
              </form>
                  <?php


if (isset($_POST['modifier'])){
  $utilisateur=new utilisateur($_POST['nom'],$_POST['prenom'],$_SESSION['email'],$_POST['dateNaissance'],$_SESSION['mdp'],$_POST['numTel'],$_POST['region'],$_POST['prof'],true,$_SESSION['nbrCnx']);
  $uc=new utilisateurC();
  $uc->modifierUtilisateur($utilisateur);
  echo $_POST['nom'];
  unset($_SESSION["nom"]);
  unset($_SESSION["prenom"]);
  unset($_SESSION["dateNaissance"]);
  unset($_SESSION["numTel"]);
  unset($_SESSION["region"]);
  unset($_SESSION["prof"]);
  $_SESSION['nom'] = $_POST['nom'];
  $_SESSION['prenom'] = $_POST['prenom'];
 
  $_SESSION['dateNaissance'] = $_POST['dateNaissance'];

  $_SESSION['numTel'] = $_POST['numTel'];
  $_SESSION['region'] = $_POST['region'];
  $_SESSION['prof'] = $_POST['prof'];
header("Refresh:0");

}

?>
                 
               </div>



      
 <footer class="ftco-footer ftco-section img">
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Eco-Friendly coffee place & working space</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://www.facebook.com/ObladiCoffee/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/obladicoffee/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5 mb-md-5" style="display: -webkit-box;">
            <div class="ftco-footer-widget mb-4">
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FObladiCoffee%2F&tabs=timeline&width=340&height=300&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
                <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Passage du lac argento, Tunis, Tunisia</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+216 24 318 745</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">contact@obladi.tn</span></a></li>
                </ul>
              </div>
              </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              
           

            </div>
          </div>
        </div>
    </footer>
    
    
  

  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

    
  </body>
</html>