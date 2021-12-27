<?php session_start();
include_once("header.php")

?>
	
	<h5>Admin Page</h5><br>

	<div class="row" style="height: 200px;">
		<div class="col-md-4 card text-center offset-md-4">
			<a href="upload_products.php">Upload Products</a>
		</div>
		<div class="col-md-4 card text-center offset-md-4">
			<a href="upload_category.php">Upload Category</a>
		</div>
	</div>

<?php 
include_once("whatsapp.php");
include_once("footer.php")
?>