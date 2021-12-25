<?php 
include_once("classes.php");
include_once("header.php")
?>


      <div id="banner">
      	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">

          <div class="carousel-item active">
            <img src="images/logo1.png" class="d-block w-100" alt="...">
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


  <div class="title-div mt-5 text-center"><h3>ABOUT US</h3></div>
  <div class="row my-4" id="row3">
      <div class="col-md-7" id="r3c1">
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

      <div class="col-md-5">
        <h4>Our Videos</h4>
          <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fweb.facebook.com%2FSkinsolskincare%2Fvideos%2F1954421638065219%2F&show_text=false&width=476&t=0" width="450" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true" class="mt-1 img-fluid" alt="advert videos"></iframe>
          <br>
      </div>
  </div>

  <div class="title-div mt-5 text-center"><h3>OUR PRODUCTS</h3></div>
  <div class="row cnt-row mb-5" id="r4">

    <?php 
    $objget = new MyProduct;
    $output = $objget->getLimitedProduct();
    if(!empty($output)) {
    foreach ($output as $key => $value) {
    
    ?>

    <div class="col-md-3 r4c equipment card card-body mt-5 mr-2" id="r4c1">
      <a href="product_details
      .php?equipment_id=<?php echo $value['product_id'];?>">
      <?php if(empty($value['product_image'])) { ?>
      <img class="card-img-top" src="images/logo12.png" class="img-fluid" alt="product" width="250" height="250"> 
      <?php } else { ?>
      <img class="card-img-top" src="uploads/<?php echo $value['product_image'] ?>" alt="products" width="250" height="250">
      <?php } ?>
      <p><b><?php echo $value['product_name']; ?></b></p>
      <p><span class="span-buy">N</span><?php echo number_format($value['product_price'], 2); ?></p>
      <p><b><?php echo $value['product_info']; ?></b></p>
      <div class="approval">
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
             <i class="fa fa-star"></i>
          </div>
        </a>
    </div>
    <?php 
        } 

      }
    ?>
  </div>

<?php 
include_once("whatsapp.php");
include_once("footer.php")
?>