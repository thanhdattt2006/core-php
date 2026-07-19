<?php
session_start();

// Clear all variables registered in the current session
session_unset();

// Destroy all data registered to the session (deletes the session file on the server)
session_destroy();

// Redirect the client back to the authentication screen
header("Location: 02_login.php");
exit();
