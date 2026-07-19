<?php
// SET COOKIE: This function must be executed prior to sending any HTML output to the client.
// Syntax: setcookie(name, value, expire, path, domain, secure, httponly);

$message = '';

// Verify if the user has requested a theme state change
if (isset($_POST['theme'])) {
    $theme = $_POST['theme'];
    // Persist the cookie for 30 days (86400 seconds/day)
    setcookie('user_theme', $theme, time() + (86400 * 30), '/');
    
    // Note: A page redirection is executed so the $_COOKIE superglobal reflects the updated value immediately.
    header("Location: 01_cookie.php");
    exit();
}

// READ COOKIE:
$currentTheme = $_COOKIE['user_theme'] ?? 'light'; 
$themeClasses = ($currentTheme === 'dark') ? 'bg-gray-900 text-gray-100' : 'bg-gray-50 text-gray-800';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Demonstration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="<?php echo $themeClasses; ?> p-8 min-h-screen flex items-center justify-center transition-colors duration-200">
    <div class="max-w-md w-full bg-white dark:bg-gray-800 p-6 rounded-lg shadow-md text-gray-800 dark:text-gray-100 transition-colors duration-200">
        <h2 class="text-xl font-bold mb-4">Cookie Demonstration: Theme Preference</h2>
        <p class="mb-6 text-sm">
            The currently stored client-side theme is: 
            <span class="font-bold uppercase text-blue-600 dark:text-blue-400"><?php echo htmlspecialchars($currentTheme); ?></span>
        </p>
        
        <form method="POST" action="" class="flex gap-4">
            <button name="theme" value="light" class="flex-1 px-4 py-2 border rounded bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold transition-colors">
                Light Mode ☀️
            </button>
            <button name="theme" value="dark" class="flex-1 px-4 py-2 border border-gray-700 rounded bg-gray-800 hover:bg-gray-700 text-white font-semibold transition-colors">
                Dark Mode 🌙
            </button>
        </form>
    </div>
</body>
</html>
