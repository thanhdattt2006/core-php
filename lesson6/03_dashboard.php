<?php
session_start();

// Access control check: Redirect to the login page if the session state is unauthenticated.
if (!isset($_SESSION['user'])) {
    header("Location: 02_login.php");
    exit();
}

$user = $_SESSION['user'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorized Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 p-8 flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4 border-b pb-2">Authorized Dashboard</h2>
        <p class="mb-2">Welcome, administrator <strong><?php echo htmlspecialchars($user); ?></strong>.</p>
        <p class="mb-6">Your current system privilege level is: <span class="font-bold uppercase text-blue-600"><?php echo htmlspecialchars($role); ?></span></p>
        
        <hr class="mb-6">
        <!-- Link navigation pointing to the logout routine -->
        <a href="04_logout.php" class="block w-full bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded font-semibold text-center transition-colors">
            Logout
        </a>
    </div>
</body>
</html>
