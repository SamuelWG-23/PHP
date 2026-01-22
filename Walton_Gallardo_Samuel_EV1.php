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
        if ($classification == $category) {
            $categoryFound = true;
            foreach ($value as $key => $attribute) {
                if ($attribute["name"] == $product){
                    $nameFound = true;
                    $cost = $attribute["price"];
                }
                if ($amount > $attribute["stock"] and $nameFound == true) {
                    $enough = false;
                }
            }
        }
    }
    if ($nameFound == true and $enough == true and $categoryFound == true) {
        $carrito[] = ["name" => $product, "stock" => $amount, "price" => $cost];
    }else {
        echo "El producto o la categoría no son correctas o el stock es insuficiente. Inténtelo de nuevo.";
    }
}
function showChart(){
    global $carrito;
    $total = 0;
    foreach ($carrito as $key => $value) {
        $total += ($value["price"] * $value["stock"]);
    }
    if ($total >= 100) {
        $total *= 0.10;
        echo "";
    }
}


addToChart("food","caviar",5);
addToChart("food","potatoes",40);
var_dump($carrito);
showChart();

?>