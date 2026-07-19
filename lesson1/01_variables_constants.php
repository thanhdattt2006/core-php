<?php
  declare(strict_types = 1);

  echo " === 1.1. PHP VARIABLES AND CONSTANTS === \n";
  $name = "Dave"; // string
  $age = 20;  // int
  $height = 1.79; // float
  $position = "Point Guard";

  const APP_ENV = "local";
  define('DB_HOST', 'localhost');
  echo "Player: $name, Age: $age, Height: $height, Position: $position \n";
  echo "Environment: " . APP_ENV
?>
