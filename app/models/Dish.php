<?php

function getDishes($cat) {

$data = [

"meals" => [
["name"=>"Plov", "price"=>25000, "image"=>"https://source.unsplash.com/400x300/?plov"],
["name"=>"Lagman", "price"=>23000, "image"=>"https://source.unsplash.com/400x300/?noodles"],
["name"=>"Manti", "price"=>22000, "image"=>"https://source.unsplash.com/400x300/?dumplings"],
["name"=>"Shashlik", "price"=>28000, "image"=>"https://source.unsplash.com/400x300/?kebab"],
["name"=>"Soup", "price"=>18000, "image"=>"https://source.unsplash.com/400x300/?soup"],
["name"=>"Rice Bowl", "price"=>21000, "image"=>"https://source.unsplash.com/400x300/?rice"],
["name"=>"Steak", "price"=>45000, "image"=>"https://source.unsplash.com/400x300/?steak"],
["name"=>"Grilled Chicken", "price"=>32000, "image"=>"https://source.unsplash.com/400x300/?chicken"],
["name"=>"Pasta", "price"=>27000, "image"=>"https://source.unsplash.com/400x300/?pasta"],
["name"=>"Fried Fish", "price"=>30000, "image"=>"https://source.unsplash.com/400x300/?fish"],
["name"=>"Veg Plate", "price"=>19000, "image"=>"https://source.unsplash.com/400x300/?vegetables"],
["name"=>"Beef Bowl", "price"=>35000, "image"=>"https://source.unsplash.com/400x300/?beef"],
],

"fastfood" => [
["name"=>"Burger", "price"=>30000, "image"=>"https://source.unsplash.com/400x300/?burger"],
["name"=>"Cheeseburger", "price"=>32000, "image"=>"https://source.unsplash.com/400x300/?cheeseburger"],
["name"=>"Pizza", "price"=>40000, "image"=>"https://source.unsplash.com/400x300/?pizza"],
["name"=>"Hot Dog", "price"=>20000, "image"=>"https://source.unsplash.com/400x300/?hotdog"],
["name"=>"Fries", "price"=>15000, "image"=>"https://source.unsplash.com/400x300/?fries"],
["name"=>"Nuggets", "price"=>18000, "image"=>"https://source.unsplash.com/400x300/?nuggets"],
["name"=>"Taco", "price"=>23000, "image"=>"https://source.unsplash.com/400x300/?taco"],
["name"=>"Wrap", "price"=>25000, "image"=>"https://source.unsplash.com/400x300/?wrap"],
["name"=>"Doner", "price"=>28000, "image"=>"https://source.unsplash.com/400x300/?doner"],
["name"=>"Panini", "price"=>26000, "image"=>"https://source.unsplash.com/400x300/?sandwich"],
["name"=>"Chicken Burger", "price"=>31000, "image"=>"https://source.unsplash.com/400x300/?chickenburger"],
["name"=>"Loaded Fries", "price"=>20000, "image"=>"https://source.unsplash.com/400x300/?loadedfries"],
],

"desserts" => [
["name"=>"Cake", "price"=>20000, "image"=>"https://source.unsplash.com/400x300/?cake"],
["name"=>"Chocolate Cake", "price"=>23000, "image"=>"https://source.unsplash.com/400x300/?chocolatecake"],
["name"=>"Ice Cream", "price"=>15000, "image"=>"https://source.unsplash.com/400x300/?icecream"],
["name"=>"Cupcake", "price"=>12000, "image"=>"https://source.unsplash.com/400x300/?cupcake"],
["name"=>"Donut", "price"=>10000, "image"=>"https://source.unsplash.com/400x300/?donut"],
["name"=>"Pancake", "price"=>18000, "image"=>"https://source.unsplash.com/400x300/?pancake"],
["name"=>"Waffle", "price"=>19000, "image"=>"https://source.unsplash.com/400x300/?waffle"],
["name"=>"Cheesecake", "price"=>24000, "image"=>"https://source.unsplash.com/400x300/?cheesecake"],
["name"=>"Brownie", "price"=>17000, "image"=>"https://source.unsplash.com/400x300/?brownie"],
["name"=>"Macaron", "price"=>22000, "image"=>"https://source.unsplash.com/400x300/?macaron"],
["name"=>"Fruit Tart", "price"=>21000, "image"=>"https://source.unsplash.com/400x300/?tart"],
["name"=>"Milk Dessert", "price"=>16000, "image"=>"https://source.unsplash.com/400x300/?pudding"],
],

"drinks" => [
["name"=>"Cola", "price"=>10000, "image"=>"https://source.unsplash.com/400x300/?cola"],
["name"=>"Pepsi", "price"=>10000, "image"=>"https://source.unsplash.com/400x300/?pepsi"],
["name"=>"Orange Juice", "price"=>12000, "image"=>"https://source.unsplash.com/400x300/?orangejuice"],
["name"=>"Lemonade", "price"=>11000, "image"=>"https://source.unsplash.com/400x300/?lemonade"],
["name"=>"Milkshake", "price"=>15000, "image"=>"https://source.unsplash.com/400x300/?milkshake"],
["name"=>"Coffee", "price"=>14000, "image"=>"https://source.unsplash.com/400x300/?coffee"],
["name"=>"Tea", "price"=>8000, "image"=>"https://source.unsplash.com/400x300/?tea"],
["name"=>"Iced Tea", "price"=>10000, "image"=>"https://source.unsplash.com/400x300/?icedtea"],
["name"=>"Smoothie", "price"=>16000, "image"=>"https://source.unsplash.com/400x300/?smoothie"],
["name"=>"Energy Drink", "price"=>18000, "image"=>"https://source.unsplash.com/400x300/?energydrink"],
["name"=>"Mineral Water", "price"=>6000, "image"=>"https://source.unsplash.com/400x300/?water"],
["name"=>"Hot Chocolate", "price"=>17000, "image"=>"https://source.unsplash.com/400x300/?hotchocolate"],
]

];

return $data[$cat] ?? [];
}
