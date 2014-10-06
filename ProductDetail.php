<?php
include("products.php");

//checks to see if $product array is set.
if (isset($_GET["id"])) {
	$product_id = $_GET["id"];
	if (isset($products[$product_id])) {
		$product = $products[$product_id]; // checks for null or invalid product ids
	}
}
//if product array is not set, redirect to products listing page.
if (!isset($product)) {
	header("Location: ProductsListing.php");
	exit();
} 

$section = "products";
$pageTitle = $product["name"];
include("header.php");

?>

<div class="section page">
	<div class="wrapper">
    	<div class="breadcrumb"><a href="ProductsListing.php">Products Listing</a> &gt; <?php echo $product["name"]; ?></div>
      <div class="minifig-picture">
      	<span>
      	<img src="<?php echo $product["img"]; ?>" alt="<?php echo $product["name"]; ?>" />
        </span>
      </div>
      <div class="minifig-details">
      	<h1>Series <?php echo $product["series"]; ?><br /> <?php echo $product["name"]; ?></h1>
        <div class="bio"><span class="bio-heading">BIO</span><br /> <?php echo $product["bio"]; ?></div>
        <h1><span class="price">$<?php echo $product["price"]; ?></span>+ FREE SHIPPING!</h1>
        
        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
        
        <!-- Paypal uses this for security and validation -->
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="<?php echo $product["paypal"]; ?>">
        
        <!-- We can change the buttons using our code instead of going back to Paypal and having to change there everytime.-->
        <input type="hidden" name="item_name" value="<? echo $product["name"]; ?>" />
        <input type="submit" value="Add To Cart"  name="submit" />
        
        <!--Paypal uses this to record how many times someone has used our form-->
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
        <div class="disclaimer">* All Minifigure packets are opened to guarantee the correct Minifigure – Comes complete with opened packet, leaflet and accessories.</div>
      </div>  
    </div>
</div>

<?php include("footer.php"); ?>
