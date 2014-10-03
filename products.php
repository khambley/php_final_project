<?php
// products array = ("product_name", "product_series", "product_price", "product_img", "product_desc")
$products = array();
$products['010011'] = array( // sad clown- series 10
	"name" => "Sad Clown",
	"series" => "10",
	"price" => 4.99,
	"img" => "img/products/010011-sadclown.jpg",
	"bio" => "Sad Clown Series 10 <br />All Minifigure packets will be opened to guarantee the correct Minifigure – Comes complete with opened packets leaflet and accessories"	
);							 
$products['009002'] = array( // cyclops - series 9
	"name" => "Cyclops",
	"series" => "9",
	"price" => "4.99",
	"img" => "img/products/009002.jpg",
	"bio" => "I’ve got my eye on you. Forever watchful and alert, the Cyclops is the only inhabitant of a distant, uncharted island. He stares out to sea with his one unblinking eye, roaring at anyone who sails too close to the shore. But although he looks big and mean, he secretly hides a very sensitive soul beneath his scowling exterior."
); 
$products['009007'] = array( // chicken suit guy - series 9
	"name" => "Chicken Suit Guy",
	"series" => "9",
	"price" => 4.99,
	"img" => "img/products/009007.jpg",
	"bio" => "What you folks need is a guy in a chicken costume! The Chicken Suit Guy started out as a fast-food mascot, but he knew that he could be much more. If he could help people decide what to have for lunch, then surely there must be other ways that he could help too. So he set out on the road and started to travel the world in search of adventure."
); 
$products['009010'] = array( // judge - series 9
	"name" => "Judge",
	"series" => "9",
	"price" => 4.99,
	"img" => "img/products/009010.jpg",
	"bio" => "I’ll be the judge of that! The stern Judge considers himself to have the final word on everything. When court is in session, he’s a force of justice, settling arguments and separating the innocent from the guilty with wisdom, a vast knowledge of the law, and his mighty wooden gavel."
);
$products['009006'] = array( // policeman - series 9
	"name" => "Policeman",
	"series" => "9",
	"price" => 4.99,
	"img" => "img/products/009006-policeman.jpg",
	"bio" => "Gotcha! There’s no one more dedicated to catching bad guys than the brave Policeman. He may work out of the big city, but he’ll tirelessly pursue crooks no matter where they try to hide, risking life and limb every day while doing his duty to protect the public and uphold the law."
);
$products['009016'] = array( // plumber - series 9
	"name" => "Plumber",
	"series" => "9",
	"price" => 4.99,
	"img" => "img/products/009016-plumber.jpg",
	"bio" => "Looks like another tough job for ol’ Plungey! Few Minifigures work harder than the good-natured Plumber. He’ll tackle any job, no matter how messy it may be, and always goes to work with a cheery smile on his face. As long as he’s got his trusty plunger and his can-do attitude, there’s nothing he can’t handle."
);
$products['010014'] = array( // trendsetter - series 10
	"name" => "Trendsetter",
	"code" => "71001",
	"series" => "10",
	"price" => 4.99,
	"img" => "img/products/010014-trendsetter.jpg",
	"bio" => "It’s not easy to be super fashionable and popular all the time! Everything the Trendsetter does becomes the next big thing. If she buys a certain phone, so does everybody else. If she reads a particular magazine, everyone else reads it too. All of the Minifigures that she meets want to look like her, act like her, and do all of the same things she likes to do."
);
$products['011b001'] = array( // trendsetter - series 10
	"name" => "Trendsetter",
	"code" => "71005",
	"series" => "10",
	"price" => 4.99,
	"img" => "img/products/010014-trendsetter.jpg",
	"bio" => "It’s not easy to be super fashionable and popular all the time! Everything the Trendsetter does becomes the next big thing. If she buys a certain phone, so does everybody else. If she reads a particular magazine, everyone else reads it too. All of the Minifigures that she meets want to look like her, act like her, and do all of the same things she likes to do."
);
?>


<?php 
$pageTitle = "My MiniFigs";

//to check the active page 
$section = "products";

include('header.php'); ?>

<div class="section page">
	<div class="wrapper">
		<h1>My Catalog of Minifigures</h1>
        <ul>
        	<?php foreach($products as $product) { ?>
            <li><?php echo $product ?></li>
            <?php } ?>
        </ul>
	</div>
</div>

<?php include('footer.php'); ?>