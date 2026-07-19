<?php
$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Retrieve and Sanitize Data - Trim leading/trailing whitespace
    $customerName = trim($_POST['customer_name'] ?? '');
    $tourType = $_POST['tour_type'] ?? '';

    // 2. Validate Data
    if (empty($customerName)) {
        $error = 'Customer name is required.';
    } elseif (strlen($customerName) < 3) {
        $error = 'Customer name is too short. It must be at least 3 characters.';
    } elseif (!in_array($tourType, ['city', 'food'])) {
        $error = 'Invalid tour type selected.';
    } else {
        // Perform application logic if validation passes (e.g., database storage)
        // Ensure safety by sanitizing output values
        $customerName = htmlspecialchars($customerName);
        $success = "Successfully booked the $tourType tour for client $customerName!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motorbike Tour Booking Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 p-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4">Motorbike Tour Booking Form</h2>
        
        <?php if ($error): ?>
            <p class="text-red-500 mb-4 font-medium">Error: <?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        
        <?php if ($success): ?>
            <p class="text-green-600 mb-4 font-medium"><?php echo htmlspecialchars($success); ?></p>
        <?php endif; ?>

        <form method="POST" action="" class="space-y-4">
            <div>
                <label class="block font-medium mb-1">Customer Name:</label>
                <input type="text" name="customer_name" class="border p-2 rounded w-full">
            </div>

            <div>
                <label class="block font-medium mb-1">Select Tour:</label>
                <select name="tour_type" class="border p-2 rounded w-full bg-white">
                    <option value="city">City Tour HCMC</option>
                    <option value="food">Street Food Tour</option>
                    <option value="scam">Mock Tour (Select to test validation failure)</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded w-full font-semibold">
                Submit Booking
            </button>
        </form>
    </div>
</body>
</html>
