<?php include_once 'includes/header.inc.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="./">Obladi<small>Coffee</small></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="./" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
        <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
        <li class="nav-item active"><a href="shop.php" class="nav-link">Shop</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->

  <section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
            <h1 class="mb-3 mt-5 bread">Order Online</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Shop</span></p>
          </div>

        </div>
      </div>
    </div>
  </section>


  <section class="ftco-menu mb-5 pb-5">
    <div class="container">
      <div class="row d-md-flex">
        <div class="col-lg-12 ftco-animate p-md-5">
          <div class="row">
            <div class="col-md-12 nav-link-wrap mb-5">
              <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-0-tab" data-toggle="pill" href="#coffee-tab" role="tab" aria-controls="v-pills-0" aria-selected="true">Coffee to go</a>

                <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#drinks-tab" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks to go</a>

                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#desserts-tab" role="tab" aria-controls="v-pills-3" aria-selected="false">Desserts to go</a>
              </div>
            </div>
            <div class="col-md-12 d-flex align-items-center">

              <?php

              //crud get list products

              require_once '../core/ProduitC.php';
              $prods=afficherProduitShop();
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

              <div class="tab-content ftco-animate" id="v-pills-tabContent">
                <!--Coffee-->
                <div class="tab-pane fade show active" id="coffee-tab" role="tabpanel" aria-labelledby="v-pills-0-tab">
                  <div class="row">

                    <?php

                    foreach ($coffees as $coffee) {
                    ?>

                    <div class="col-md-3">
                      <div class="menu-entry">
                        <!--Getphoto-->
                        <a href="#" class="img" style="background-image: url(stockage/<?php echo $coffee['photo'] ?>);"></a>
                        <div class="text text-center pt-4">
                          <!--Gettitre+id pour redirection-->
                          <h3><a href="product-single.php?id=<?php echo $coffee['id']; ?>"><?php echo $coffee['titre']; ?></a></h3>
                          <!--getDescription-->
                          <p><?php echo $coffee['description']; ?></p>
                          <!--getPrix-->
                          <p class="price"><span><?php echo $coffee['prix']; ?> DT</span></p>
                          <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                        </div>
                      </div>
                    </div>

                  <?php } ?>

                  </div>
                </div>

                <!--Drinks-->
                <div class="tab-pane fade" id="drinks-tab" role="tabpanel" aria-labelledby="v-pills-1-tab">
                  <div class="row">

                    <?php
                    foreach ($drinks as $drink) {
                    ?>

                    <div class="col-md-4 text-center">
                      <div class="menu-wrap">
                        <a href="#" class="menu-img img mb-4" style="background-image: url(stockage/<?php echo $drink['photo'] ?>);"></a>
                        <div class="text">
                          <h3><a href="product-single.php?id=<?php echo $drink['id']; ?>"><?php echo $drink['titre'] ?></a></h3>
                          <p><?php echo $drink['description'] ?></p>
                          <p class="price"><span><?php echo $drink['prix'] ?> DT</span></p>
                          <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                        </div>
                      </div>
                    </div>

                  <?php } ?>

                  </div>
                </div>

                <!--Desserts-->
                <div class="tab-pane fade" id="desserts-tab" role="tabpanel" aria-labelledby="v-pills-1-tab">
                  <div class="row">

                    <?php
                    foreach ($desserts as $dessert) {
                    ?>

                    <div class="col-md-4 text-center">
                      <div class="menu-wrap">
                        <a href="#" class="menu-img img mb-4" style="background-image: url(stockage/<?php echo $dessert['photo'] ?>);"></a>
                        <div class="text">
                          <h3><a href="product-single.php?id=<?php echo $dessert['id']; ?>"><?php echo $dessert['titre'] ?></a></h3>
                          <p><?php echo $dessert['description'] ?></p>
                          <p class="price"><span><?php echo $dessert['prix'] ?> DT</span></p>
                          <p><a href="cart.html" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                        </div>
                      </div>
                    </div>

                  <?php } ?>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once 'includes/footer.inc.php'; ?>