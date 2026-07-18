<?php
declare(strict_types=1);

echo "--- 2. VARIABLE SCOPE AND REFERENCES (&) ---\n";

$baseStamina = 100; // Global variable

function testScope() {
    // echo $baseStamina; // ERROR: Global variables are not implicitly visible within functions in PHP.
    
    // Approach 1 (Not recommended due to potential side effects): Using the 'global' keyword
    global $baseStamina;
    echo "Stamina retrieved via 'global' keyword: $baseStamina\n";
}
testScope();

/* ----------------------------------------------------- */

// Approach 2 (Recommended): Pass by Reference
// Prepending '&' to a parameter applies modifications directly to the original variable in the caller's scope.
// This is highly useful for stateful modifications (e.g., updating physical training metrics).

$myPushups = 20;

// Note the ampersand (&) prefix
function trainChest(int &$currentReps, int $addedReps): void {
    $currentReps += $addedReps; // Modifies the original variable directly
}

echo "\nInitial push-up count: $myPushups\n";

trainChest($myPushups, 15); // Add 15 repetitions
trainChest($myPushups, 5);  // Add 5 additional repetitions

echo "Push-up count post-training: $myPushups (The original value was modified in-place without a return statement)\n";
?>
