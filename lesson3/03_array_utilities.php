<?php
declare(strict_types=1);

echo "--- 3. ARRAY UTILITY FUNCTIONS ---\n";

$player = [
    'name' => 'Dave',
    'position' => 'Small Forward',
    'vertical' => 70
];

$validPositions = ['Point Guard', 'Shooting Guard', 'Small Forward', 'Power Forward', 'Center'];

// 1. in_array: Determines if a value exists within an indexed array
// Frequently utilized for authorization checks (e.g., roles) or input validation processes
if (in_array($player['position'], $validPositions)) {
    echo "Valid position identified.\n";
}

// 2. array_key_exists vs isset: Verifies key existence within an associative array
// isset() returns false if the key points to a NULL value.
// array_key_exists() strictly checks for key presence, regardless of its associated value.
if (array_key_exists('vertical', $player)) {
    echo "This athlete has a vertical jump metric of: " . $player['vertical'] . " cm\n";
}

// 3. Array Merging: Spread Operator (...) supported from PHP 7.4 (identical to JavaScript)
$baseStats = ['strength' => 80, 'stamina' => 85];
$fullPlayer = [...$player, ...$baseStats];

echo "\n[Merged Player Profile Data]\n";
print_r($fullPlayer);

// 4. Array Destructuring: Highly efficient for extracting parameters from data sources like APIs
['name' => $playerName, 'position' => $pos] = $fullPlayer;
echo "Destructured: Name is $playerName, position is $pos.\n";
?>
