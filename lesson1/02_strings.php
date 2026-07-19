<?php
echo "--- 1.2. STRINGS: SINGLE VS DOUBLE QUOTES ---\n";

$course = "ADSE at Aptech";

// Single Quotes: Output content literally without parsing variables or escape sequences. More lightweight.
$str1 = 'You are studying $course\n'; 

// Double Quotes: Parse variables and escape sequences (e.g., \n for a new line on CLI).
$str2 = "You are studying $course\n"; 

echo "Using single quotes: " . $str1 . "\n"; 
echo "Using double quotes: " . $str2;       
?>
