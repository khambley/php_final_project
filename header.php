<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
    <script src="//use.typekit.net/hqt3bds.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
</head>
<body>

	<div class="header">
		<div class="wrapper">
			<h1 class="branding-title"><a href="./">My MiniFig Store</a></h1>
			<ul class="nav">
				<li class="minifigs <?php if (isset($section) && $section == "products") { echo "on"; } ?>"><a href="ProductsListing.php">Buy Minifigs</a></li>
				<li class="contact <?php if (isset($section) && $section == "contact") { echo "on"; } ?>"><a href="contact.php">Contact</a></li>
				<li class="cart"><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=BXGXJX9GP7K4C&amp;display=1">Shopping Cart</a></li>
			</ul>
		</div>
	</div>

	<div id="content">