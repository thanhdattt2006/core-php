<?php
// 1. Initialize the session using session_start() to enable access to the $_SESSION superglobal.
session_start();

// If the session indicates the user is already authenticated, redirect them to the dashboard.
if (isset($_SESSION['user'])) {
    header("Location: 03_dashboard.php");
    exit();
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    // Note: In production systems, credentials should be verified against a secure database. Hardcoded here for simplicity.
    if ($username === 'dat' && $password === '123') {
        
        // 2. Store authentication state and roles in the session
        $_SESSION['user'] = 'Dat';
        $_SESSION['role'] = 'admin';
        
        // 3. Redirect the client to the dashboard
        header("Location: 03_dashboard.php");
        exit();
    } else {
        $error = 'Invalid username or password.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Authentication</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 p-8 flex items-center justify-center min-h-screen">
    <div class="max-w-md w-full bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4">System Authentication</h2>
        
        <?php if ($error): ?>
            <p class="text-red-500 mb-4 font-medium"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        
        <form method="POST" action="" class="space-y-4">
            <div>
                <label class="block font-medium mb-1">Username:</label>
                <input type="text" name="username" placeholder="Enter: dat" class="border p-2 rounded w-full">
            </div>
            <div>
                <label class="block font-medium mb-1">Password:</label>
                <input type="password" name="password" placeholder="Enter: 123" class="border p-2 rounded w-full">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded w-full font-semibold">
                Login
            </button>
        </form>
    </div>
</body>
</html>
