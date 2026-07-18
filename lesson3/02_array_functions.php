<?php
declare(strict_types=1);

echo "--- 2. ARRAY MAP & ARRAY FILTER ---\n";

$shoes = [
    ['id' => 1, 'name' => 'Nike Air Force 1', 'price' => 2500000, 'in_stock' => true],
    ['id' => 2, 'name' => 'Adidas Ultraboost', 'price' => 4000000, 'in_stock' => false],
    ['id' => 3, 'name' => 'Puma Suede', 'price' => 1800000, 'in_stock' => true]
];

// 1. array_filter: Filters items that are currently in stock (in_stock = true)
// Written using a concise arrow function (similar to JavaScript/React syntax)
$availableShoes = array_filter($shoes, fn($shoe) => $shoe['in_stock'] === true);

echo "[In-Stock Items (Filtered using array_filter)]\n";
print_r(array_column($availableShoes, 'name')); // array_column extracts a single column of values

// 2. array_map: Transforms data (e.g., applying a 10% discount to all items)
$saleShoes = array_map(function($shoe) {
    $shoe['price'] = $shoe['price'] * 0.9; // Apply 10% discount
    return $shoe;
}, $shoes);

echo "\n[Product Prices After 10% Discount (Mapped using array_map)]\n";
foreach ($saleShoes as $shoe) {
    echo $shoe['name'] . ": " . number_format($shoe['price']) . " VND\n";
}
?>
