<?php
function getAllFoods(){
$foods = [
    [
        "name" => "Spicy Ramen",
        "image" => "spicy-ramen.jpg",
        "rating" => "4,6"
    ],
    [
        "name" => "Beef Burger",
        "image" => "beef-burger.jpg",
        "rating" => "3,3"
    ],
    [
        "name" => "Sushi Roll",
        "image" => "sushi-roll.jpg",
        "rating" => "4,2"
    ],
    [
        "name" => "Brownies",
        "image" => "brownies.jpg",
        "rating" => "4,5"
    ],
    [
        "name" => "Spaghetti Carbonara",
        "image" => "spaghetti-carbonara.jpg",
        "rating" => "3,4"
    ],
    [
        "name" => "Tuna Melt Pizza",
        "image" => "tuna-melt-pizza.jpg",
        "rating" => "4,4"
    ]
];
return $foods;
}