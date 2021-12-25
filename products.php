<?php
include_once("classes.php");
include_once("header.php")

?>
	
	<div class="title-div mt-3 text-center"><h3>OUR PRODUCTS</h3></div>

	<div class="row cnt-row" id="r4">

		<?php 
		$objget = new MyProduct;
		$output = $objget->getProduct();
		if(!empty($output)) {
		foreach ($output as $key => $value) {
		
		?>

		<div class="col-md-3 r4c equipment card card-body mt-4 mb-5 mr-2" id="r4c1">
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