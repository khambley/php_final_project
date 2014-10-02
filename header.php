<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
</head>
<body>

	<div class="header">
		<div class="wrapper">
			<h1 class="branding-title"><a href="./">Shirts 4 Mike</a></h1>
			<ul class="nav">
				<li class="shirts <?php if (isset($section) && $section == "products") { echo "on"; } ?>"><a href="products.php">Buy Minifigs</a></li>
				<li class="contact <?php if (isset($section) && $section == "contact") { echo "on"; } ?>"><a href="contact.php">Contact</a></li>
				<li class="cart"><a href="#">Shopping Cart</a></li>
			</ul>
		</div>
	</div>

	<div id="content">