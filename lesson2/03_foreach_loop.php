<?php
declare(strict_types=1);

echo "--- 2.3. FOREACH LOOP ---\n";

// 1. Indexed Array
$games = ['League of Legends', 'Valorant', 'Crossfire'];

echo "[Indexed Array]\n";
foreach ($games as $game) {
    echo "- Game: $game\n";
}

// 2. Associative Array (Similar to Object/Map in other languages)
$playerStats = [
    'name' => 'Dave',
    'position' => 'Small Forward',
    'vertical_jump' => 'Decent',
    'favorite_shoe' => 'Nike'
];

echo "\n[Associative Array - Retrieving Keys and Values]\n";
foreach ($playerStats as $key => $value) {
    // Capitalize the first letter of the key using ucfirst() for better formatting
    echo ucfirst($key) . ": " . $value . "\n";
}

// WARNING: A common pitfall when using references (&) in foreach loops
$numbers = [1, 2, 3];
foreach ($numbers as &$num) {
    $num *= 2; // Double each element directly in the original array
}
unset($num); // CRITICAL: Always unset the reference! Otherwise, $num remains bound to the last element, causing unexpected side effects if reused later.

echo "\n[Array after doubling elements (using references)]\n";
print_r($numbers);
?>
