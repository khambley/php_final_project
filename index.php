<?php 
$pageTitle = "My MiniFig Store";

include('header.php'); ?>
	
		<div class="section banner">
			<div class="wrapper">
				
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>My Latest MiniFigs</h2>

				<?php include("products.php"); ?>
                <ul class="products">
				<?php 
				$total_products = count($products);
				$position = 0;
				$list_view = "";
				foreach($products as $product_id => $product) { 
					$position++; // updates index of each product in products array
					if ($total_products - $position < 4) { // displays last 4 minifigs in products array
						//list_view contains the last 4 products in the products array, concatenated latest one first
						$list_view = get_list_view($product_id, $product) . $list_view; //function to list out products grid view in products array
					}
				}
				echo $list_view; //echos out all items in $list_view variable which is last 4 minifigs
				?>							
				</ul>

			</div>

		</div>

	</div>
    <?php include('footer.php'); ?>

	