<?php
// Retrieves the current HTTP request method (e.g., GET or POST)
$method = $_SERVER['REQUEST_METHOD'];

// Retrieves data sent via the HTTP GET method (e.g., from the URL query string: ?search=shoes&page=2)
// Utilizes the null coalescing operator (??) to prevent Undefined Array Key exceptions
$keyword = $_GET['search'] ?? 'No keyword entered';

// Retrieves data submitted via the HTTP POST method (typically from a form payload)
$username = $_POST['username'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTP Request Methods</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 p-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4">Test HTTP Methods (Current: <?php echo htmlspecialchars($method); ?>)</h2>
        
        <!-- GET Method Demonstration: Submitting this form appends query parameters to the URL -->
        <div class="mb-6">
            <p class="mb-2">Search Keyword (GET): <span class="font-semibold"><?php echo htmlspecialchars($keyword); ?></span></p>
            <form method="GET" action="" class="flex gap-2">
                <input type="text" name="search" placeholder="Enter search keyword..." class="border p-2 rounded flex-1">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Search (GET)</button>
            </form>
        </div>

        <hr class="my-6">

        <!-- POST Method Demonstration: Form data is transmitted securely in the HTTP request body without altering the URL -->
        <div>
            <?php if ($method === 'POST'): ?>
                <p class="mb-2 text-green-600 font-medium">Successfully received POST data from user: <span class="font-bold"><?php echo htmlspecialchars($username); ?></span></p>
            <?php endif; ?>
            <form method="POST" action="" class="flex gap-2">
                <input type="text" name="username" placeholder="Enter username..." class="border p-2 rounded flex-1">
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">Login (POST)</button>
            </form>
        </div>
    </div>
</body>
</html>
