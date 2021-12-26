<?php 
include_once("classes.php");
include_once("header.php")
?>


 <!------ Category & Banner ----->
 <div class="container-fluid">
    <div class="row" id="indxrw4">
      <div class="col-md-2 indxrw4col" id="indxrw4col1">
        <h6>CATEGORY</h6>
        <nav class="navbar bg-light">
            <ul class="navbar-nav">
                <?php 
                  $objcategory = new MyCategory;
                  $newcat = $objcategory->getCategory();
                  if(!empty($newcat)) {
                  foreach ($newcat as $key => $value) {
                  
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="category.php?category_id=<?php echo $value['category_id'];?>"><?php echo $value['category_name'] ?></a>
                </li>
                <?php 
                    } 
                  }
                ?>
              </ul>
          </nav>
      </div>

      <div class="col-md-8" id="banner">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">

          <div class="carousel-item active">
            <img src="images/banner1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="images/logo2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="images/logo3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>

          <div class="carousel-item">
            <img src="images/logo4.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>


    <div class="col-md-2 text-center animate__animated animate__backInDown">
      <h6>DELIVERIES</h6>
        <img src="images/delivery1.jpg" class="img-fluid" width="200" height="400">
    </div>

    </div>
 </div>


 <!------ About Us ----->
 <div class="container-fluid">
    <div class="row" id="indxrw5">
      <div class="col-md-8" id="r3c1">
        <h4>What we do best</h4>
        <p>
          At SKINSOL SKIN SCARE we produce and sell body cream and soap made with natural ingredient. No chemicals and no effect. Good for the whole family!
        </p>
        <p>
          Is your skin crying out for a remedy from dryness and irritation, green veins and stretch marks. Our super-protective glowing butter creams  are here for you!
        </p>
        <p>
          They are made using 100% nourishing butters and oils, all 100% organic.
          Products are getting sold out...hurry!
        </p>
        <!-- <img src="images/promo.jpg" width="300" height="250" class="my-5"> -->
      </div>

      <div class="col-md-4">
        <h4>Our Videos</h4>
          <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fweb.facebook.com%2FSkinsolskincare%2Fvideos%2F1954421638065219%2F&show_text=false&width=476&t=0" width="450" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true" class="mt-1 img-fluid" alt="advert videos"></iframe>
          <br>
      </div>
    </div>
 </div>


 <!------ Unique Selling Point ----->
 <div class="feature">
   <div class="container-fluid">
      <div class="row align-items-center" id="indxrw6">
          <div class="col-lg-3 col-md-6 feature-col">
              <div class="feature-content">
                <i class="fab fa-cc-mastercard"></i>
                  <h2>Secure Payment</h2>
                  <p>
                      Lorem ipsum dolor sit amet consectetur elit
                  </p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 feature-col">
              <div class="feature-content">
                  <i class="fa fa-truck"></i>
                  <h2>Worldwide Delivery</h2>
                  <p>
                      Lorem ipsum dolor sit amet consectetur elit
                  </p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 feature-col">
              <div class="feature-content">
                  <i class="fa fa-sync-alt"></i>
                  <h2>90 Days Return</h2>
                  <p>
                      Lorem ipsum dolor sit amet consectetur elit
                  </p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 feature-col">
              <div class="feature-content">
                  <i class="fa fa-comments"></i>
                  <h2>24/7 Support</h2>
                  <p>
                      Lorem ipsum dolor sit amet consectetur elit
                  </p>
              </div>
          </div>
      </div>
   </div>
  </div>


 <!------ Products One ----->
 <div class="container-fluid">
    <div class="row" id="indxrw7">
          <?php 
            $objget = new MyProduct;
            $output = $objget->getLimitedProduct();
            if(!empty($output)) {
            foreach ($output as $key => $value) {
          
          ?>
          <div class="col-md-2 mt-2 card indxrw7col" id="indxrw7col1">
            <a href="product_details
            .php?equipment_id=<?php echo $value['product_id'];?>">
            <?php if(empty($value['product_image'])) { ?>
              <img class="card-img-top" src="images/logo12.png" class="img-fluid" alt="product" width="250" height="250"> 
              <?php } else { ?>
              <img class="card-img-top" src="uploads/<?php echo $value['product_image'] ?>" alt="products" width="250" height="250">
              <?php } ?>
              <p><b><?php echo $value['product_name']; ?></b></p>
              <p><span class="span-buy">N</span><?php echo number_format($value['product_price'], 2); ?></p>
            </a>
            </div>
            <?php 
                } 

              }
            ?>
    </div>
 </div>


 <!------ Referal ----->
 <div class="container-fluid">
    <div class="row" id="indxrw8">
      <div class="col-md-4">
        <div class="review-slider-item">
            <div class="review-img">
                <img src="img/review-1.jpg" alt="Image">
            </div>
            <div class="review-text">
                <h2>Customer Name</h2>
                <h3>Profession</h3>
                <div class="ratting">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="review-slider-item">
            <div class="review-img">
                <img src="img/review-2.jpg" alt="Image">
            </div>
            <div class="review-text">
                <h2>Customer Name</h2>
                <h3>Profession</h3>
                <div class="ratting">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="review-slider-item">
            <div class="review-img">
                <img src="img/review-3.jpg" alt="Image">
            </div>
            <div class="review-text">
                <h2>Customer Name</h2>
                <h3>Profession</h3>
                <div class="ratting">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                </p>
            </div>
        </div>
    </div>
    </div>
 </div>


 <!------ Products Two ----->
 <div class="container-fluid">
    <div class="row" id="indxrw9">
      <?php 
            $objget = new MyProduct;
            $output = $objget->getLimitedProduct();
            if(!empty($output)) {
            foreach ($output as $key => $value) {
          
          ?>
          <div class="col-md-2 mt-2 card indxrw7col" id="indxrw7col1">
            <a href="product_details
            .php?equipment_id=<?php echo $value['product_id'];?>">
            <?php if(empty($value['product_image'])) { ?>
              <img class="card-img-top" src="images/logo12.png" class="img-fluid" alt="product" width="250" height="250"> 
              <?php } else { ?>
              <img class="card-img-top" src="uploads/<?php echo $value['product_image'] ?>" alt="products" width="250" height="250">
              <?php } ?>
              <p><b><?php echo $value['product_name']; ?></b></p>
              <p><span class="span-buy">N</span><?php echo number_format($value['product_price'], 2); ?></p>
            </a>
            </div>
            <?php 
                } 

              }
            ?>
    </div>
 </div>


 <!------ Advert Two ----->
 <div class="container-fluid">
    <div class="row" id="indxrw10">
      <div class="col-md-3 col-lg-3">
        Another advert (still thinking about it)
      </div>

      <div class="col-md-3 col-lg-3">
        
      </div>

      <div class="col-md-3 col-lg-3">
        
      </div>

      <div class="col-md-3 col-lg-3">
        
      </div>
    </div>
 </div>

 
 <!------ Base Address ----->
 <div class="container-fluid">
    <div class="row" id="indxrw11">
        <div class="col-md-4 mt-2 indxrw11col" id="indxrw11col1">
          <h5>ABOUT US</h5><hr>
          <p><span class="header_span1">SKIN</span><span class="header_span2">SOL</span> SKINCARE is a shopping center for all skin care products that enhances the beauty of the skin</p>
          <img src="images/skinsol_logo.png" alt="Company logo" width="150" height="100"><br><br>
          <div class="mt-1">
            <a href="admin.php">Admin</a><br>
          </div>
        </div>

        <div class="col-md-4 indxrw11col" id="indxrw11col2">
          <h5>CONTACT US</h5>
          <hr>
          <div class="mb-4">
            <p><i class="fa fa-home"></i> Shop 22<br> 23 Opeyemi Plaza,  Mosalasi Bus Stop,<br>Iyana Ipaja, Lagos<br>
            <i class="fa fa-phone-alt"></i> 07060475625 <br>
            <i class="fa fa-envelope"></i> info@skinsol.com</p>
          </div>

          <div class="mt-4">
            <a href="#"><img src="images/facebook.png" class="img-fluid" alt="Facebook"></a>
            <a href="#"><img src="images/twitter.png" class="img-fluid" alt="Twitter"></a>
            <a href="#"><img src="images/linkedin.png" class="img-fluid" alt="LinkedIn"></a>
            <a href="#"><img src="images/instagram.png" class="img-fluid" alt="Instagram"></a>
          </div>
        </div>

        <div class="col-md-4 indxrw11col" id="indxrw11col3">
          <h5>REACH US</h5><hr>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d990.8239898939057!2d3.2925483847417345!3d6.61010007202241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b90560215aaf5%3A0x9feb8bdf9783ad02!2sMosalasi%20Bus%20Stop!5e0!3m2!1sen!2sng!4v1640260125346!5m2!1sen!2sng" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" class="img-fluid" alt="map to our address"></iframe>
        </div>
      
    </div>
 </div>


 <!------ Footer  ----->
 <div class="container-fluid">
    <div class="row" id="indxrw12">
      <div class="col-md-12 text-center" id="r11c1">
          <p>Designed by &copy; eIndustries 2021. All rights reserved</p>
        </div>
    </div>
 </div>


<?php 
include_once("whatsapp.php");
include_once("footer.php")
?>