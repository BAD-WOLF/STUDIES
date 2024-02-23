<?php
require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/functions/ProductFunctions.php';

$products = [];

addProduct($products, "Camiseta", 20);
addProduct($products, "Calça Jeans", 500);
addProduct($products, "Tênis", 80);

listProducts($products);

$total = calculateTotalPrice($products);
echo "Total price of products: $total";

