<?php
function addProduct(&$products, $name, $price) {
    $products[] = new Product($name, $price);
}

function listProducts($products) {
    echo "List of Products:\n";
    foreach ($products as $product) {
        echo "- {$product->name}: {$product->price} \n";
    }
}

function calculateTotalPrice($products) {
    $total = 0;
    foreach ($products as $product) {
        $total += $product->price;
    }
    return $total;
}
?>
