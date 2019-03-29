<?php include_once 'includes/header.inc.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="./">Obladi<small>Coffee</small></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="./" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
        <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
        <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->

  <section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(assets/images/bg_1.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-8 col-sm-12 text-center ftco-animate">
            <span class="subheading">Welcome</span>
            <h1 class="mb-4">The Best Coffee Testing Experience</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image: url(assets/images/bg_2.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-8 col-sm-12 text-center ftco-animate">
            <span class="subheading">Welcome</span>
            <h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
          </div>

        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image: url(assets/images/bg_3.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-8 col-sm-12 text-center ftco-animate">
            <span class="subheading">Welcome</span>
            <h1 class="mb-4">Creamy Hot and Ready to Serve</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
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
        <div class="col-sm-6 book p-4">
          <h3>Book a Table</h3>
          <form action="reserver.php" method="post" class="appointment-form">
            <div class="d-md-flex">
              <div class="form-group">
                <input type="text" class="form-control" name="fName" placeholder="First Name">
              </div>
              <div class="form-group ml-md-4">
                <input type="text" class="form-control" name="lName" placeholder="Last Name">
              </div>
            </div>
            <div class="d-md-flex">
              <div class="form-group">
                <div class="input-wrap">
                  <div class="icon"><span class="ion-md-calendar"></span></div>
                  <input type="text" name="date"  class="form-control appointment_date" placeholder="Date">
                </div>
              </div>
              <div class="form-group ml-md-4">
                <div class="input-wrap">
                  <div class="icon"><span class="ion-ios-clock"></span></div>
                  <input type="text" name="time" class="form-control appointment_time" placeholder="Time">
                </div>
              </div>
              <div class="form-group ml-md-4">
                <input type="tel" name="tel" class="form-control" placeholder="Phone" required>
              </div>
            </div>
            <div class="d-md-flex">
              <div class="form-group">
                <div class="input-wrap">
                  <div class="icon"><span class="ion-ios-cafe"></span></div>
                  <select class="form-control" name="seats" placeholder="Seats">
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="8">8</option>
                  </select>
                </div>
              </div>
              <div class="form-group ml-md-4">
                <textarea name="msg" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
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

  <section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url(assets/images/about.jpg);"></div>
    <div class="one-half ftco-animate">
      <div class="overlap">
        <div class="heading-section ftco-animate ">
          <span class="subheading">Discover</span>
          <h2 class="mb-4">Our Story</h2>
        </div>
        <div>
          <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-services">
    <div class="container">
      <div class="row">
        <div class="col-md-4 ftco-animate">
          <div class="media d-block text-center block-6 services">
            <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-choices"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Easy to Order</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="media d-block text-center block-6 services">
            <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-delivery-truck"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Fastest Delivery</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="media d-block text-center block-6 services">
            <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-coffee-bean"></span></div>
              <div class="media-body">
                <h3 class="heading">Quality Coffee</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 pr-md-5">
            <div class="heading-section text-md-right ftco-animate">
              <span class="subheading">Discover</span>
              <h2 class="mb-4">Our Menu</h2>
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
              <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-6">
                <div class="menu-entry">
                  <a href="#" class="img" style="background-image: url(assets/images/menu-1.jpg);"></a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="menu-entry mt-lg-4">
                  <a href="#" class="img" style="background-image: url(assets/images/menu-2.jpg);"></a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="menu-entry">
                  <a href="#" class="img" style="background-image: url(assets/images/menu-3.jpg);"></a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="menu-entry mt-lg-4">
                  <a href="#" class="img" style="background-image: url(assets/images/menu-4.jpg);"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(assets/images/bg_2.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                    <strong class="number" data-number="100">0</strong>
                    <span>Coffee Branches</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                    <strong class="number" data-number="85">0</strong>
                    <span>Number of Awards</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                    <strong class="number" data-number="10567">0</strong>
                    <span>Happy Customer</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center">
                  <div class="text">
                    <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                    <strong class="number" data-number="900">0</strong>
                    <span>Staff</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Discover</span>
            <h2 class="mb-4">Best Coffee Sellers</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="menu-entry">
              <a href="#" class="img" style="background-image: url(assets/images/menu-1.jpg);"></a>
              <div class="text text-center pt-4">
                <h3><a href="#">Coffee Capuccino</a></h3>
                <p>A small river named Duden flows by their place and supplies</p>
                <p class="price"><span>$5.90</span></p>
                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="menu-entry">
              <a href="#" class="img" style="background-image: url(assets/images/menu-2.jpg);"></a>
              <div class="text text-center pt-4">
                <h3><a href="#">Coffee Capuccino</a></h3>
                <p>A small river named Duden flows by their place and supplies</p>
                <p class="price"><span>$5.90</span></p>
                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="menu-entry">
              <a href="#" class="img" style="background-image: url(assets/images/menu-3.jpg);"></a>
              <div class="text text-center pt-4">
                <h3><a href="#">Coffee Capuccino</a></h3>
                <p>A small river named Duden flows by their place and supplies</p>
                <p class="price"><span>$5.90</span></p>
                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="menu-entry">
              <a href="#" class="img" style="background-image: url(assets/images/menu-4.jpg);"></a>
              <div class="text text-center pt-4">
                <h3><a href="#">Coffee Capuccino</a></h3>
                <p>A small river named Duden flows by their place and supplies</p>
                <p class="price"><span>$5.90</span></p>
                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-gallery">
      <div class="container-wrap">
        <div class="row no-gutters">
          <div class="col-md-3 ftco-animate">
            <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-1.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-search"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-2.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-search"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-3.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-search"></span>
              </div>
            </a>
          </div>
          <div class="col-md-3 ftco-animate">
            <a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(assets/images/gallery-4.jpg);">
              <div class="icon mb-4 d-flex align-items-center justify-content-center">
                <span class="icon-search"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-menu">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row d-md-flex">
          <div class="col-lg-12 ftco-animate p-md-5">
            <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Main Dish</a>

                  <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

                  <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Desserts</a>
                </div>
              </div>
              <div class="col-md-12 d-flex align-items-center">

                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                  <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                    <div class="row">
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/dish-1.jpg);"></a>
                          <div class="text">
                            <h3><a href="#">Grilled Beef</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <p class="price"><span>$2.90</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/dish-2.jpg);"></a>
                          <div class="text">
                            <h3><a href="#">Grilled Beef</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <p class="price"><span>$2.90</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/dish-3.jpg);"></a>
                          <div class="text">
                            <h3><a href="#">Grilled Beef</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <p class="price"><span>$2.90</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                    <div class="row">
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/drink-1.jpg);"></a>
                          <div class="text">
                            <h3><a href="#">Lemonade Juice</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <p class="price"><span>$2.90</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/drink-2.jpg);"></a>
                          <div class="text">
                            <h3><a href="#">Pineapple Juice</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <p class="price"><span>$2.90</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/drink-3.jpg);"></a>
                          <div class="text">
                            <h3><a href="#">Soda Drinks</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <p class="price"><span>$2.90</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                    <div class="row">
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/dessert-1.jpg);"></a>
                          <div class="text">
                            <h3><a href="#">Hot Cake Honey</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <p class="price"><span>$2.90</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/dessert-2.jpg);"></a>
                          <div class="text">
                            <h3><a href="#">Hot Cake Honey</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <p class="price"><span>$2.90</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 text-center">
                        <div class="menu-wrap">
                          <a href="#" class="menu-img img mb-4" style="background-image: url(assets/images/dessert-3.jpg);"></a>
                          <div class="text">
                            <h3><a href="#">Hot Cake Honey</a></h3>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <p class="price"><span>$2.90</span></p>
                            <p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
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
    </section>

    <section class="ftco-section img" id="ftco-testimony" style="background-image: url(assets/images/bg_1.jpg);"  data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Testimony</span>
            <h2 class="mb-4">Customers Says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
      </div>
      <div class="container-wrap">
        <div class="row d-flex no-gutters">
          <div class="col-lg align-self-sm-end ftco-animate">
            <div class="testimony">
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small.&rdquo;</p>
              </blockquote>
              <div class="author d-flex mt-4">
                <div class="image mr-3 align-self-center">
                  <img src="assets/images/person_1.jpg" alt="">
                </div>
                <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
              </div>
            </div>
          </div>
          <div class="col-lg align-self-sm-end">
            <div class="testimony overlay">
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
              </blockquote>
              <div class="author d-flex mt-4">
                <div class="image mr-3 align-self-center">
                  <img src="assets/images/person_2.jpg" alt="">
                </div>
                <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
              </div>
            </div>
          </div>
          <div class="col-lg align-self-sm-end ftco-animate">
            <div class="testimony">
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small  line of blind text by the name. &rdquo;</p>
              </blockquote>
              <div class="author d-flex mt-4">
                <div class="image mr-3 align-self-center">
                  <img src="assets/images/person_3.jpg" alt="">
                </div>
                <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
              </div>
            </div>
          </div>
          <div class="col-lg align-self-sm-end">
            <div class="testimony overlay">
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however.&rdquo;</p>
              </blockquote>
              <div class="author d-flex mt-4">
                <div class="image mr-3 align-self-center">
                  <img src="assets/images/person_2.jpg" alt="">
                </div>
                <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
              </div>
            </div>
          </div>
          <div class="col-lg align-self-sm-end ftco-animate">
            <div class="testimony">
              <blockquote>
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small  line of blind text by the name. &rdquo;</p>
              </blockquote>
              <div class="author d-flex mt-4">
                <div class="image mr-3 align-self-center">
                  <img src="assets/images/person_3.jpg" alt="">
                </div>
                <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-appointment">
      <div class="overlay"></div>
      <div class="container-wrap">
        <div class="row no-gutters d-md-flex align-items-center">
          <div class="col-md-6 d-flex align-self-stretch">
            <div id="map">
              <iframe src="https://maps.google.com/maps?q=Obladi Coffee&amp;output=embed" width="100%" height="100%"></iframe>
            </div>
          </div>
          <div class="col-md-6 appointment ftco-animate">
            <h3 class="mb-3">Book a Table</h3>
            <form action="reserver.php" method="post" class="appointment-form">
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" class="form-control" name="fName" placeholder="First Name">
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" class="form-control" name="lName" placeholder="Last Name">
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-md-calendar"></span></div>
                    <input type="text" name="date"  class="form-control appointment_date" placeholder="Date">
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-ios-clock"></span></div>
                    <input type="text" name="time" class="form-control appointment_time" placeholder="Time">
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <input type="tel" name="tel" class="form-control" placeholder="Phone" required>
                </div>
              </div>
              <div class="d-md-flex">
                <div class="form-group">
                  <div class="input-wrap">
                    <div class="icon"><span class="ion-ios-cafe"></span></div>
                    <select class="form-control" name="seats" placeholder="Seats">
                      <option value="2">2</option>
                      <option value="4">4</option>
                      <option value="8">8</option>
                    </select>
                  </div>
                </div>
                <div class="form-group ml-md-4">
                  <textarea name="msg" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
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

<?php include_once 'includes/footer.inc.php'; ?>