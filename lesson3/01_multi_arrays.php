<?php
declare(strict_types=1);

echo "--- 1. ASSOCIATIVE AND MULTIDIMENSIONAL ARRAYS ---\n";

// Multidimensional associative array (simulating data retrieval from the 'shoes' table)
$shoes = [
    [
        'id' => 1,
        'name' => 'Nike Air Force 1',
        'price' => 2500000,
        'in_stock' => true
    ],
    [
        'id' => 2,
        'name' => 'Adidas Ultraboost',
        'price' => 4000000,
        'in_stock' => false
    ],
    [
        'id' => 3,
        'name' => 'Puma Suede',
        'price' => 1800000,
        'in_stock' => true
    ]
];

echo "Second shoe item name: " . $shoes[1]['name'] . "\n";

// Iterate through the multidimensional array
echo "\n[List of In-Stock Inventory]\n";
foreach ($shoes as $shoe) {
    if ($shoe['in_stock']) {
        echo "- " . $shoe['name'] . " (Price: " . number_format($shoe['price']) . " VND)\n";
    }
}
?>
