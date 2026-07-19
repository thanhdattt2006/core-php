<?php
declare(strict_types=1);

echo "--- 2.1. IF/ELSE & TERNARY OPERATOR ---\n";

$age = 20;

// Approach 1: Verbose if-else syntax
if ($age >= 18) {
    $status = "Eligible to work";
} else {
    $status = "Stay home and study";
}

// Approach 2: Ternary Operator (Concise and clean)
$statusTernary = ($age >= 18) ? "Eligible for tours" : "Stay home and study";
echo "Status: $statusTernary\n";

// Elvis Operator (?:) - Shorthand ternary evaluating to the variable itself if truthy, otherwise returning the default
$inputName = "Dave";
$displayName = $inputName ?: "Anonymous"; // Unlike ?? (which only checks for null), ?: also treats empty/falsy values ("", 0, false) as default
echo "Display Name: $displayName\n";

// Best Practice: Early Return Pattern
// Instead of nesting multiple if-else blocks, validate preconditions and exit immediately.
function checkPermission(string $role): void {
    if ($role !== 'admin') {
        echo "[Error] Access denied! You do not have permission to access this resource.\n";
        return; // Exit execution early, preventing further logic run
    }
    
    echo "Welcome Admin, the system is ready.\n";
}

checkPermission('admin');
?>
