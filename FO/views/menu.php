<<<<<<< HEAD
<?php

require_once '../core/ProduitC.php';
include_once 'includes/header.inc.php'; ?>
=======
<?php 
    session_start()
     include_once 'includes/header.inc.php'; ?>

>>>>>>> 6b87374186ee5418532632cbc05105368ac65c15

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="assets/images/logoobladi.png" style="width: 55px;"></small></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <?php
           if(!isset($_SESSION['id'])){
            ?>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="../../Obladi/views/front/index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="../../Obladi/views/front/gallery.html" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="Reservation.html" class="nav-link">Reservation</a></li>
            <li class="nav-item"><a href="../../Obladi/views/front/blog.php" class="nav-link">Blog</a></li>
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
                <a class="dropdown-item" href="shop.php">Shop</a>
                <a class="dropdown-item" href="menu.php">Cart</a>
              </div>
            </li>
            <li class="nav-item"><a href="../../Obladi/views/front/login.php" class="nav-link btn btn-primary" >Sign in/Sign up</a></li>
            <li class="nav-item cart"><a href="cart.html" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
          </ul>
          <?php
          }
           if(isset($_SESSION['id'])) { ?>
           <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="../../Obladi/views/front/index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="../../Obladi/views/front/gallery.html" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="Reservation.html" class="nav-link">Reservation</a></li>
            <li class="nav-item"><a href="../../Obladi/views/front/blog.php" class="nav-link">Blog</a></li>
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
                <a class="dropdown-item" href="shop.php">Shop</a>
                <a class="dropdown-item" href="menu.php">Cart</a>
              </div>
            </li>
            <li  class="nav-item dropdown" class="nav-item" ><a href="../../Obladi/views/front/myaccount.php" class="nav-link btn btn-primary" > <?php echo $_SESSION['nom']; ?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" name="logout" href="logout.php">logout</a>
              </div></li>
            <li class="nav-item cart"><a href="cart.html" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a></li>
          </ul>
          <?php
        }
        ?>

        </div>
      </div>
    </nav>
    <!-- END nav -->
<!-- END nav -->

  <section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread">Our Menu</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="ftco-intro">
    <div class="container-wrap">
      <div class="wrap d-md-flex align-items-xl-end">
        <div class="info">
          <div class="row no-gutters">
            <div class="col-md-4 d-flex ftco-animate">
              <div class="icon"><span class="icon-phone"></span></div>
              <div class="text">
                <h3>000 (123) 456 7890</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
              <div class="icon"><span class="icon-my_location"></span></div>
              <div class="text">
                <h3>198 West 21th Street</h3>
                <p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
              </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
              <div class="icon"><span class="icon-clock-o"></span></div>
              <div class="text">
                <h3>Open Monday-Friday</h3>
                <p>8:00am - 9:00pm</p>
              </div>
            </div>
          </div>
        </div>
        <div class="book p-4">
          <h3>Book a Table</h3>
          <form action="#" class="appointment-form">
            <div class="d-md-flex">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name">
              </div>
              <div class="form-group ml-md-4">
                <input type="text" class="form-control" placeholder="Last Name">
              </div>
            </div>
            <div class="d-md-flex">
              <div class="form-group">
                <div class="input-wrap">
                  <div class="icon"><span class="ion-md-calendar"></span></div>
                  <input type="text" class="form-control appointment_date" placeholder="Date">
                </div>
              </div>
              <div class="form-group ml-md-4">
                <div class="input-wrap">
                  <div class="icon"><span class="ion-ios-clock"></span></div>
                  <input type="text" class="form-control appointment_time" placeholder="Time">
                </div>
              </div>
              <div class="form-group ml-md-4">
                <input type="text" class="form-control" placeholder="Phone">
              </div>
            </div>
            <div class="d-md-flex">
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group ml-md-4">
                <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">

        <?php
        $prods=afficherProduitMenu();
        $coffees=array();
        $desserts=array();
        $drinks=array();

        foreach ($prods as $prod) {
          switch ($prod['soustype']) {
            case 'coffee':
            array_push($coffees,$prod);
            break;
            case 'dessert':
            array_push($desserts,$prod);
            break;
            case 'drink':
            array_push($drinks,$prod);
            break;
          }
        }
        ?>

        <div class="col-md-6 text-center">
          <h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>

          <?php
          for ($i=0; $i <count($desserts) ; $i++) {
            ?>

            <div class="pricing-entry d-flex ftco-animate">
              <div class="img" style="background-image: url(stockage/<?php echo $desserts[$i]['photo']; ?>);"></div>
              <div class="desc pl-3">
                <div class="text-left d-flex text align-items-center">
                  <h3><span><?php echo $desserts[$i]['titre'] ?></span></h3>
                  <span class="price"><?php echo $desserts[$i]['prix'] ?> DT</span>
                </div>
                <div class="d-block text-left">
                  <p><?php echo $desserts[$i]['description'] ?></p>
                </div>
              </div>
            </div>

          <?php } ?>

        </div>

        <div class="col-md-6 text-center">
          <h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>

          <?php
          for ($i=0; $i <count($drinks) ; $i++) {
            ?>

            <div class="pricing-entry d-flex ftco-animate">
              <div class="img" style="background-image: url(stockage/<?php echo $drinks[$i]['photo']; ?>);"></div>
              <div class="desc pl-3">
                <div class="text-left d-flex text align-items-center">
                  <h3><span><?php echo $drinks[$i]['titre'] ?></span></h3>
                  <span class="price"><?php echo $drinks[$i]['prix'] ?> DT</span>
                </div>
                <div class="d-block text-left">
                  <p><?php echo $drinks[$i]['description'] ?></p>
                </div>
              </div>
            </div>

          <?php } ?>

        </div>

        <div class="m-auto col-md-6 text-center">
          <h3 class="mb-5 heading-pricing ftco-animate">Coffee</h3>

          <?php
          for ($i=0; $i <count($coffees) ; $i++) {
            ?>

            <div class="pricing-entry d-flex ftco-animate">
              <div class="img" style="background-image: url(stockage/<?php echo $coffees[$i]['photo']; ?>);"></div>
              <div class="desc pl-3">
                <div class="text-left d-flex text align-items-center">
                  <h3><span><?php echo $coffees[$i]['titre'] ?></span></h3>
                  <span class="price"><?php echo $coffees[$i]['prix'] ?> DT</span>
                </div>
                <div class="d-block text-left">
                  <p><?php echo $coffees[$i]['description'] ?></p>
                </div>
              </div>
            </div>

          <?php } ?>

        </div>

      </div>
    </div>
  </section>

  <section class="ftco-menu mb-5 pb-5">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Discover</span>
          <h2 class="mb-4">Our Products</h2>
          <p>
            <!--redirection vers Shop-->
            <a href="shop.php" class="btn btn-primary btn-outline-primary">Our products</a>
          </p>
        </div>
      </div>

    </div>
  </section>
  <?php include_once 'includes/footer.inc.php'; ?>
