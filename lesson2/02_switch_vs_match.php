<?php
declare(strict_types=1);

echo "--- 2.2. SWITCH VS MATCH (PHP 8) ---\n";

$httpCode = 404;

// 1. Traditional: Switch (Verbose; forgetting the "break" statement leads to fall-through bugs)
switch ($httpCode) {
    case 200:
        $message = "Success";
        break;
    case 404:
        $message = "Not Found";
        break;
    case 500:
        $message = "Internal Server Error";
        break;
    default:
        $message = "Unknown Error";
}
echo "Switch: $message\n";

// 2. Modern: Match Expression (Concise, strict comparison, and returns a value)
$matchMessage = match ($httpCode) {
    200 => "Success (Match)",
    400, 404 => "Client Error (Bad Request or Not Found)", // Supports multiple matching values
    500 => "Internal Server Error (Match)",
    default => "Unknown Error",
};

echo "Match: $matchMessage\n";
?>
