<?php
include("products.php");
$pageTitle = "My MiniFigs";

//to check the active page 
$section = "products";

include('header.php'); ?>

<div class="section shirts page">
	<div class="wrapper">
		<h1>My Catalog of Minifigures</h1>
        <ul class="products">
        	<?php foreach($products as $product_id => $product) { 
				echo get_list_view($product_id, $product); //function to list out products grid view
				}
			?>
        </ul>
	</div>
</div>

<?php include('footer.php'); ?>