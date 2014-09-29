
<?php

// ini_set('display_errors',1);
// ini_set('display_startup_errors',1);
// error_reporting(-1);


$menu = array( 
	"The Basics" => array(
		"Cookie Dough Coffee" => array(
			"desc" => "Drip Coffee & Cookie Dough mixed in",
			"12oz" => 2.00,
			"16oz" => 2.25,
			"20oz" => 2.55,
			"24oz" => 2.85
		),
		"Cafe Au lait" => array(
			"desc" => "Half coffee, half milk",
			"12oz" => 2.20,
			"16oz" => 2.80,
			"20oz" => 3.30,
			"24oz" => 3.90
		),
		"Cappuccino" => array(
			"desc" => "Italian style",
			"8oz" => 1.75,
		),
		"Coffee Of The Day" => array(
			"desc" => "Dark, Medium, Flavored, Decaf & Highlander Grogg",
			"12oz" => 1.50,
			"16oz" => 1.85,
			"20oz" => 2.20,
			"24oz" => 2.55
		),
		"Espresso" => array(
			"desc" => "Straight shots of espresso",
			"12oz" => 1.50,
			"16oz" => 1.75,
			"20oz" => 2.00,
			"24oz" => 2.25
		),
		"Shot In The Dark" => array(
			"desc" => "Any drip coffee & espresso",
			"12oz" => 2.00,
			"16oz" => 2.60,
			"20oz" => 3.20,
			"24oz" => 3.80
		),
		"Coffee Refill" => array(
			"desc" => "Dark, Medium, Flavored, Decaf & Highlander Grogg",
			"12oz" => 1.25,
			"16oz" => 1.35,
			"20oz" => 1.45,
			"24oz" => 1.55
		)
	),
	"Fancy Espressos" => array(
		"Mocha" => array(
			"desc" => "Espresso, milk & Hershys cholocate",
			"12oz" => 1.80,
			"16oz" => 2.20,
		        "20oz" => 2.60,
			"24oz" => 3.00
		),
		"White Mocha" => array(
			"desc" => "Espresso, milk & white cholocate",
			"12oz" => 1.80,
			"16oz" => 2.20,
		        "20oz" => 2.60,
			"24oz" => 3.00
		),
		"Mexi Mocha" => array(
			"desc" => "Espresso, milk & Mexican cholocate",
			"12oz" => 1.80,
			"16oz" => 2.20,
		        "20oz" => 2.60,
			"24oz" => 3.00
		),
		"Flavored Latte" => array(
			"desc" => "Espresso, milk & your choice of flavor",
			"12oz" => 1.80,
			"16oz" => 2.20,
		        "20oz" => 2.60,
			"24oz" => 3.00
		),
		"Americano" => array(
			"desc" => "Espresso & water",
			"12oz" => 1.80,
			"16oz" => 2.20,
		        "20oz" => 2.60,
			"24oz" => 3.00
		),
		"Latte" => array(
			"desc" => "Espresso, milk & form",
			"12oz" => 3.00,
			"16oz" => 3.40,
			"20oz" => 3.80,
			"24oz" => 4.20 
		),
		"Breve" => array(
			"desc" => "Espresso, half & half and form",
			"12oz" => 3.00,
			"16oz" => 3.40,
			"20oz" => 3.80,
			"24oz" => 4.20 
		),
	),
	"Teas" => array(
		"Republic Of Tea" => array(
			"desc" => "Black, green, herbal hot or iced",
			"12oz" => 2.10,
			"16oz" => 2.30,
		        "20oz" => 2.50,
			"24oz" => 2.70
		),
		"Chai" => array(
			"desc" => "Bold spiced black team made with milk",
			"12oz" => 3.55,
			"16oz" => 3.95,
		        "20oz" => 4.35,
			"24oz" => 4.75
		),
		"Red Espresso" => array(
			"desc" => "Rooibos tea extracted like espresso",
			"12oz" => 2.00,
			"16oz" => 2.45,
		        "20oz" => 2.90,
			"24oz" => 3.50
		)
	),
	"Hot Drinks" => array(
		"Steamer" => array(
			"desc" => "Flavored milk",
			"12oz" => 2.19,
			"16oz" => 2.69,
		        "20oz" => 3.19,
		),
		"Apple Cider" => array(
			"desc" => "Bold Spiced Cider",
			"8oz" => 1.99,
			"12oz" => 2.69,
			"16oz" => 2.99,
			"20oz" => 3.29,
			"24oz" => 3.59
		),
		"Pero" => array(
			"desc" => "A Natural Coffee Substitue (Caffeine Free)",
			"12oz" => 2.69,
			"16oz" => 2.99,
			"20oz" => 3.29,
			"24oz" => 3.59
		)
	),
	"Frappes & Cold Drinks" => array(
		"Frappe" => array(
			"desc" => "Available in milk or white chocolate, with or w/o coffee",
			"12oz" => 4.00,
			"16oz" => 4.30,
		        "20oz" => 4.70,
			"24oz" => 5.00
		),
		"Green Matcha Frappe" => array(
			"desc" => "Half Coffee, Half Milk",
			"12oz" => 3.75,
			"16oz" => 4.00,
		        "20oz" => 4.25,
			"24oz" => 4.50
		),
		"Italian Soda" => array(
			"desc" => "Flavored Soda Water",
			"12oz" => 2.20,
			"16oz" => 2.50,
		        "20oz" => 2.80,
			"24oz" => 3.10
		),
		"Cream Soda" => array(
			"desc" => "Italian soda with added cream",
			"12oz" => 2.45,
			"16oz" => 2.75,
		        "20oz" => 3.05,
			"24oz" => 3.35
		),
		"POD Slush" => array(
			"desc" => "Banana, Pina-Colada, Strawberry, Mango, Peach & Lemon Ice",
			"12oz" => 3.40,
			"16oz" => 3.70,
		        "20oz" => 4.00,
			"24oz" => 4.30
		),
		"Thai Tea Frappe" => array(
			"desc" => "Current Special",
			"12oz" => 3.75,
			"16oz" => 4.00,
		        "20oz" => 4.25,
			"24oz" => 4.50
		)
	),
	"Fresh Squeezed Juice" => array(
		"desc" => "Apple, Orange, Grapefruit or Carrot",
		"12oz" => 4.00,
		"16oz" => 4.70,
		"20oz" => 5.40
		"24oz" => 6.10
	),
	"Simple Foods" => array(
		"Muffins" => 1.99,
		"Honey Bran Muffin" => 1.89,
		"Cinnamon Roll" => 1.99,
		"Cream Cheese Danish" => 1.89,
		"Bagel & Cream Cheese" => 2.29,
		"PB & J" => 2.99,
		"Grilled Cheese" => 2.99,
		"Chicken Pecan Salad Sandwich" => 4.89
	)
);

echo json_encode($menu);
?>



