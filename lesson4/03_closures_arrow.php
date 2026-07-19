<?php
declare(strict_types=1);

echo "--- 3. CLOSURES & ARROW FUNCTIONS ---\n";

$multiplier = 2; // Variable defined in the outer scope

// 1. Classic Anonymous Function (Closure): 
// Accessing outer scope variables requires explicitly declaring them with the 'use' keyword
$doubleFunction = function(int $number) use ($multiplier): int {
    return $number * $multiplier;
};

echo "Closure: 10 x 2 = " . $doubleFunction(10) . "\n";

// 2. Arrow Functions (Introduced in PHP 7.4): fn() => ...
// Distinct feature: Implicitly captures parent scope variables by value (similar to JavaScript).
// Extremely concise when used as callbacks in array functions (as demonstrated in Lesson 3).

$points = [15, 20, 25]; // Game points recorded across matches

// No 'use ($multiplier)' declaration is necessary as the variable binding is automatic
$doublePoints = array_map(fn($p) => $p * $multiplier, $points);

echo "\nDoubled points array mapped via Arrow Function:\n";
print_r($doublePoints);
?>
