<?php
function get_list_view($product_id, $product) {
		//built HTML output
		$output = "";
		
		$output = $output . "<li>";
		$output = $output . '<a href="ProductDetail.php?id=' . $product_id . '">';
		$output = $output . 'Series: ' . $product["series"] . '<br />';
		$output = $output . $product["name"];
		$output = $output . '<img src="' . $product["img"] . '" alt=""' . $product["name"] . '">';
		$output = $output . "<p>View Details</p></a>";
		$output = $output . "</li>";
		
		return $output; //return HTML output
}
$products = array();
$products['010a011'] = array( // sad clown- series 10
	"name" => "Sad Clown",
	"code" => "71001",
	"series" => "10",
	"price" => 4.99,
	"paypal" => "BEV644XXQQXYW", //sad clown paypal button id
	"accessories" => array("Collar"),
	"img" => "img/products/010011-sadclown.jpg",
	"bio" => "Why laugh when you can cry? To the Sad Clown, everything in life is a tragedy. Things that other Minifigures find joyful and jolly only fill him with sadness and woe. Not even puppies, kittens and birthday parties can turn his melancholy frown upside-down."	
);							 
$products['009a002'] = array( // cyclops - series 9
	"name" => "Cyclops",
	"code" => "71000",
	"series" => "9",
	"price" => "4.99",
	"paypal" => "4EU44RMW4LQQE", //cyclops paypal button id
	"accessories" => array("Hammer"),
	"img" => "img/products/009002-cyclops.jpg",
	"bio" => "I’ve got my eye on you. Forever watchful and alert, the Cyclops is the only inhabitant of a distant, uncharted island. He stares out to sea with his one unblinking eye, roaring at anyone who sails too close to the shore. But although he looks big and mean, he secretly hides a very sensitive soul beneath his scowling exterior."
); 
$products['009a007'] = array( // chicken suit guy - series 9
	"name" => "Chicken Suit Guy",
	"code" => "71000",
	"series" => "9",
	"price" => 4.99,
	"paypal" => "WP56C2S4S4LBA",
	"accessories" => array("None"),
	"img" => "img/products/009007-chickensuitguy.jpg",
	"bio" => "What you folks need is a guy in a chicken costume! The Chicken Suit Guy started out as a fast-food mascot, but he knew that he could be much more. If he could help people decide what to have for lunch, then surely there must be other ways that he could help too. So he set out on the road and started to travel the world in search of adventure."
); 
$products['009a010'] = array( // judge - series 9
	"name" => "Judge",
	"code" => "71000",
	"series" => "9",
	"price" => 4.99,
	"paypal" => "DXJBC69K9LXXC",
	"accessories" => array("Gaval"),
	"img" => "img/products/009010-judge.jpg",
	"bio" => "I’ll be the judge of that! The stern Judge considers himself to have the final word on everything. When court is in session, he’s a force of justice, settling arguments and separating the innocent from the guilty with wisdom, a vast knowledge of the law, and his mighty wooden gavel."
);
$products['009a006'] = array( // policeman - series 9
	"name" => "Policeman",
	"code" => "71000",
	"series" => "9",
	"price" => 4.99,
	"paypal" => "TE5AW2BMX4MV8",
	"accessories" => array("Handcuffs, Badge"),
	"img" => "img/products/009006-policeman.jpg",
	"bio" => "Gotcha! There’s no one more dedicated to catching bad guys than the brave Policeman. He may work out of the big city, but he’ll tirelessly pursue crooks no matter where they try to hide, risking life and limb every day while doing his duty to protect the public and uphold the law."
);
$products['009a016'] = array( // plumber - series 9
	"name" => "Plumber",
	"code" => "71000",
	"series" => "9",
	"price" => 4.99,
	"paypal" => "P2HBMKVJRMR98",
	"accessories" => array("Plunger"),
	"img" => "img/products/009016-plumber.jpg",
	"bio" => "Looks like another tough job for ol’ Plungey! Few Minifigures work harder than the good-natured Plumber. He’ll tackle any job, no matter how messy it may be, and always goes to work with a cheery smile on his face. As long as he’s got his trusty plunger and his can-do attitude, there’s nothing he can’t handle."
);
$products['010a014'] = array( // trendsetter - series 10
	"name" => "Trendsetter",
	"code" => "71001",
	"series" => "10",
	"price" => 4.99,
	"paypal" => "BUTWD4NEDXN98",
	"accessories" => array("Cell Phone", "Dog"), 
	"img" => "img/products/010014-trendsetter.jpg",
	"bio" => "It’s not easy to be super fashionable and popular all the time! Everything the Trendsetter does becomes the next big thing. If she buys a certain phone, so does everybody else. If she reads a particular magazine, everyone else reads it too. All of the Minifigures that she meets want to look like her, act like her, and do all of the same things she likes to do."
);
$products['009a003'] = array( // hollywood starlet - series 9
	"name" => "Hollywood Starlet",
	"code" => "71000",
	"series" => "9",
	"price" => 4.99,
	"paypal" => "HY3KG9EVLQ6RN",
	"accessories" => array("trophy"),
	"img" => "img/products/009003-hollywoodstarlet.jpg",
	"bio" => "Thank you so much! I couldn’t have done it without all of you! The Hollywood Starlet may be new on the movie scene, but she’s on the fast track to becoming the most famous and beloved actress in the world. Beautiful and talented, she can make the audience laugh or reduce them to tears, and keeps them coming back to watch her next performance."
);

?>