<?php
// Enforce strict typing at the file level
declare(strict_types=1);

echo "--- 1. TYPE HINTING (FUNCTION TYPE DECLARATIONS) ---\n";

// Define parameter types (e.g., int, float) and return types (e.g., float|int)
// A prepended question mark (e.g., ?string) denotes a nullable type.
// PHP 8.0+ introduces Union Types (e.g., float|int).

function calculateTourPrice(int $guests, float $pricePerPerson, ?string $discountCode = null): float|int {
    $total = $guests * $pricePerPerson;
    
    if ($discountCode === 'DAVE_VIP') {
        return $total * 0.8; // Apply a 20% discount
    }
    
    return $total;
}

// Functions without return statements must specify a 'void' return type
function printReceipt(float $amount): void {
    echo "The total tour cost is: " . number_format($amount) . " VND\n";
}

$finalPrice = calculateTourPrice(5, 500000, 'DAVE_VIP');
printReceipt($finalPrice);

// Uncommenting the line below triggers a TypeError due to string-to-int parameter mismatch
// calculateTourPrice("Five", 500000); 
?>
