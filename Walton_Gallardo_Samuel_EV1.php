<?php

//First part of the exercise

$inventory = [
    "clothes" => [
        [
            "name" => "shirt",
            "price" => 15.99,
            "stock" => 23
        ],
        [
            "name" => "jacket",
            "price" => 37,
            "stock" => 18
        ]
    ],
    "food" => [
        [
            "name" => "potatoes",
            "price" => 0.45,
            "stock" => 123
        ],
        [
            "name" => "caviar",
            "price" => 452,
            "stock" => 58
        ]
    ],

    "videogames" => [
        [
            "name" => "animal crossing",
            "price" => 29.99,
            "stock" => 32
        ],
        [
            "name" => "expedition 33",
            "price" => 78.89,
            "stock" => 18
        ]
    ]
    ];

//Second part of the exercicse
$carrito = [];
function addToChart($category,$product,$amount){
    global $inventory,$carrito;
    $categoryFound = false;
    $nameFound = false;
    $enough = true;
    foreach ($inventory as $classification => $value) {
        if ($category == $value) {
            $categoryFound = true;
            echo "Bien";
            foreach ($value as $key => $attribute) {
                if ($attribute["name"] == $product and $categoryFound = true){
                    $nameFound = true;
                    echo "Bueno";
                }
                if ($amount > $attribute["price"] and $nameFound == true) {
                    $enough = false;
                    echo "Malo";
                }
                if ($nameFound == true and $enough == true) {
                    echo "Genial";
                    break;
                }
        }
        }

    }
}

addToChart("food","caviar",3);











?>