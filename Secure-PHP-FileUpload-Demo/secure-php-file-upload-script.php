<?php
// Configuration
$uploadDir = __DIR__ . '/secure_uploads/'; // Store outside public directory in production
$allowedMimeTypes = ['image/jpeg', 'image/png', 'application/pdf'];
$maxFileSize = 5 * 1024 * 1024; // 5MB

// Create upload directory if it doesn't exist
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['upload'])) {
    $file = $_FILES['upload'];

    // 1. Check for upload errors
    if ($file['error'] !== UPLOAD_ERR_OK) {
        die('Upload failed with error code: ' . $file['error']);
    }

    // 2. Validate file size
    if ($file['size'] > $maxFileSize) {
        die('Error: File exceeds the maximum allowed size of 5MB.');
    }

    // 3. Validate MIME type
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($finfo, $file['tmp_name']);
    finfo_close($finfo);

    if (!in_array($mimeType, $allowedMimeTypes)) {
        die('Error: Invalid file type. Only JPG, PNG, and PDF files are allowed.');
    }

    // 4. Rename file to avoid name collisions
    $originalName = $file['name'];
    $extension = pathinfo($originalName, PATHINFO_EXTENSION);
    $newFileName = uniqid('upload_', true) . '.' . $extension;
    $destination = $uploadDir . $newFileName;

    // 5. Move the uploaded file to the target directory
    if (!move_uploaded_file($file['tmp_name'], $destination)) {
        die('Error: Failed to move uploaded file.');
    }

    echo 'Success! File uploaded as: ' . htmlspecialchars($newFileName);
}
?>

<!-- Basic Upload Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Secure PHP File Upload</title>
</head>
<body>
    <h2>Upload a File (JPG, PNG, PDF only, max 5MB)</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="upload" required>
        <br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
