<?php
$uploadMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Note: File metadata is retrieved via the $_FILES superglobal instead of $_POST
    $file = $_FILES['avatar'] ?? null;

    if ($file && $file['error'] === UPLOAD_ERR_OK) {
        $tmpName = $file['tmp_name']; // Temporary filepath allocated on the server
        $fileName = $file['name'];    // Original client-side filename
        
        // Verify existence of destination directory, create if non-existent
        if (!is_dir('uploads')) {
            mkdir('uploads');
        }

        // Move the uploaded file from the temporary directory to the target destination
        $destination = 'uploads/' . time() . '_' . $fileName; // Prepend a timestamp to guarantee filename uniqueness
        
        if (move_uploaded_file($tmpName, $destination)) {
            $uploadMessage = "File uploaded successfully. Saved path: $destination";
        } else {
            $uploadMessage = "Failed to store the uploaded file.";
        }
    } else {
        $uploadMessage = "No file selected or an upload error occurred.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Demonstration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 p-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-bold mb-4">Upload Profile Avatar</h2>
        
        <?php if ($uploadMessage): ?>
            <p class="mb-4 text-sm font-medium <?php echo (strpos($uploadMessage, 'successfully') !== false) ? 'text-green-600' : 'text-red-500'; ?>">
                <strong>Status:</strong> <?php echo htmlspecialchars($uploadMessage); ?>
            </p>
        <?php endif; ?>
        
        <!-- MANDATORY: The enctype attribute must be set to 'multipart/form-data' for file uploads to function -->
        <form method="POST" action="" enctype="multipart/form-data" class="space-y-4">
            <div>
                <input type="file" name="avatar" class="block w-full text-sm text-gray-500
                    file:mr-4 file:py-2 file:px-4
                    file:rounded file:border-0
                    file:text-sm file:font-semibold
                    file:bg-blue-50 file:text-blue-700
                    file:hover:bg-blue-100 cursor-pointer">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded w-full font-semibold">
                Upload File
            </button>
        </form>
    </div>
</body>
</html>
