<?php
echo "--- 1.3. KEY OPERATORS ---\n";

$a = 5;       
$b = "5";     

echo "Loose comparison == (Value only): ";
var_dump($a == $b); // True (PHP automatically coerces types)

echo "Strict comparison === (Value and type): ";
var_dump($a === $b); // False (Highly recommended for type-safe comparisons)

// Null Coalescing Operator (??) - Very useful for handling default input values
$score = null;
$finalScore = $score ?? 0;
echo "Score: $finalScore\n";

// Spaceship Operator <=> (Returns -1, 0, or 1)
echo "Spaceship comparison (5 <=> 10): " . (5 <=> 10) . "\n"; 
?>
