<?php
// STEP 1: Install the Filestack PHP SDK via Composer:
// Run this in your terminal:
// composer require filestack/filestack-php

// STEP 2: Include the Composer autoload file
require_once 'vendor/autoload.php';

use Filestack\FilestackClient;

// Replace with your actual Filestack API Key
$apiKey = 'YOUR_API_KEY_HERE'; 

// Initialize Filestack Client
$client = new FilestackClient($apiKey);

// Upload a local file (you can adjust the path as needed)
$localFilePath = __DIR__ . '/test-file.jpg'; // Ensure this file exists
$result = $client->upload([
    'filepath' => $localFilePath
]);

// Output the uploaded file URL
echo 'Uploaded File URL: ' . $result->url();
?>
