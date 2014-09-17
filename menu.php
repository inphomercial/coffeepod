<html>
<head></head>

<body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div id="dump"></div>

<?php
$resp = array(
  'CategoryListResp' => array(
    'category' => array(
      array(
        'categoryId'   => 1,
        'categoryName' => 'Spel',
        'iconUri'      => 'PictoSpel.png'
      ),
      array(
        'categoryId'   => 2,
        'categoryName' => 'Transport',
        'iconUri'      => 'PictoTransport.png'
      ),
    ),
  ),
);

print json_encode($resp);

?>

<!--// <script>
// var menu = {
// 	"The Basics" : {
// 		"Coffee Of The Day" : {
// 			"desc" : ".",
// 			"12oz" : 1.50,
// 			"16oz" : 1.85,
// 			"20oz" : 2.20,
// 			"24oz" : 2.55
// 		},
// 		"Espresso" : {
// 			"desc" : ".",
// 			"12oz" : 1.50,
// 			"16oz" : 1.75,
// 			"20oz" : 2.00,
// 			"24oz" : 2.25
// 		},
// 		"Shot In The Day" : {
// 			"desc" : ".",
// 			"12oz" : 2.00,
// 			"16oz" : 2.60,
// 			"20oz" : 3.20,
// 			"24oz" : 3.80
// 		},
// 		"Americano" : {
// 			"desc" : ".",
// 			"12oz" : 1.80,
// 			"16oz" : 2.20,
// 			"20oz" : 2.60,
// 			"24oz" : 3.00
// 		},
// 		"Cappuccino" : {
// 			"desc" : ".",
// 			"12oz" : 1.75,
// 			"16oz" : 2.00,
// 			"20oz" : 2.25,
// 			"24oz" : 2.50
// 		},
// 		"Cafe Aulait" : {
// 			"desc" : ".",
// 			"12oz" : 2.20,
// 			"16oz" : 2.80,
// 			"20oz" : 3.30,
// 			"24oz" : 3.90
// 		},
// 		"Latte" : {
// 			"desc" : ".",
// 			"12oz" : 3.00,
// 			"16oz" : 3.40,
// 			"20oz" : 3.80,
// 			"24oz" : 4.20
// 		},
// 		"French Press" : {
// 			"desc" : ".",
// 			"12oz" : 0,
// 			"16oz" : 2.60,
// 			"20oz" : 0,
// 			"24oz" : 0
// 		},
// 		"Cookie Dough Coffee" : {
// 			"desc" : ".",
// 			"12oz" : 2.00,
// 			"16oz" : 2.25,
// 			"20oz" : 2.55,
// 			"24oz" : 2.85
// 		},
// 		"Coffee Refill" : {
// 			"desc" : ".",
// 			"12oz" : 1.25,
// 			"16oz" : 1.35,
// 			"20oz" : 1.45,
// 			"24oz" : 1.55
// 		}
// 	},
// 	"Tea" : {
// 		"Republic Of Tea" : {
// 			"desc" : ".",
// 			"12oz" : 2.10,
// 			"16oz" : 2.30,
// 			"20oz" : 2.50,
// 			"24oz" : 2.70
// 		},
// 		"Black Iced Tea" : {
// 			"desc" : ".",
// 			"12oz" : 1.50,
// 			"16oz" : 1.90,
// 			"20oz" : 2.20,
// 			"24oz" : 2.50
// 		},
// 		"Chai" : {
// 			"desc" : ".",
// 			"12oz" : 3.55,
// 			"16oz" : 3.95,
// 			"20oz" : 4.35,
// 			"24oz" : 4.75
// 		},
// 		"Red Espresso" : {
// 			"desc" : ".",
// 			"12oz" : 2.00,
// 			"16oz" : 2.45,
// 			"20oz" : 2.90,
// 			"24oz" : 3.50
// 		}
// 	},
// 	"Simple Foods" : {
// 		"Muffins" : 1.99,
// 		"Honey Bran Muffin": 1.89,
// 		"Cinnamon Roll" : 1.99,
// 		"Cream Cheese Danish" : 1.89,
// 		"Bagel & Cream Cheese" : 2.29,
// 		"PB & J" :2.99,
// 		"Grilled Cheese" : 2.99,
// 		"Chicken Pecan Salad Sandwich" : 4.89
// 	},
// 	"Fresh Squeezed Juice" : {
// 		"Get Well Juice" : {},
// 		"Citrus Sunrise" : {},
// 		"Fred & Ginger" : {},
// 		"Have A Beetiful Day" : {},
// 		"The Hangover" : {},
// 	},
// 	"Sodas" : {
// 		"Italian Soda" : {},
// 		"Cream Soda" : {},
// 		"Fountain Drinks" : {}
// 	},
// 	"Cold/Frozen" : {
// 		"Frappes" : {},
// 		"Green Tea Frappe" : {},
// 		"Espresso Float" : {},
// 		"Pod Slush" : {}
// 	},
// 	"Coffee Free" : {
// 		"Pero": {
// 			"desc" : "This is fake coffee.",
// 			"8oz" : 0,
// 			"12oz" : 2.69,
// 			"16oz" : 2.99,
// 			"20oz" : 3.29,
// 			"24oz" : 3.59
// 		},
// 		"Steamers" : {
// 			"desc" : "Milk & Flavor of your choice.",
// 			"8oz" : 1.79,
// 			"12oz" : 2.19,
// 			"16oz" : 2.69,
// 			"20oz" : 3.19,
// 			"24oz" : 3.89
// 		},
// 		"Apple Cider" : {},
// 		"Hot or Cold Chocolate" : {}
// 	},
// 	"Specialty" : {
// 		"Mocha" : {},
// 		"Mexi Mocha" : {},
// 		"Flavored Latte" : {},
// 		"2 Flavored Latte" : {},
// 		"Milky Way" : {},
// 		"Almond Joy" : {},
// 		"Black & White" : {},
// 		"Hazelnut White Mocha" : {},
// 		"Caramel Macchiato" : {},
// 		"Coconut White Mocha" : {}
// 	}
// };
//
// // console.log(menu);
//
// // $("#dump").append(JSON.stringify(menu, null, "\t"));
//
// // $("#dump").append($.dump(menu));
//
// </script>
//

</body>
</html>


