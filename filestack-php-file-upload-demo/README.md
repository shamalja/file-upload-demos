# Filestack PHP File Upload Demo

This repository provides a simple and secure example of how to upload files using the [Filestack PHP SDK](https://github.com/filestack/filestack-php).

> ✅ This demo uses Composer for dependency management and showcases a basic local file upload.

---

## 🚀 Features

- Upload local files to Filestack
- Minimal setup with Composer
- Simple and clean example using PHP

---

## 🧰 Prerequisites

- PHP 7.4 or higher
- Composer installed ([Install Composer](https://getcomposer.org/download/))
- A Filestack API key (Get yours from [Filestack Developer Portal](https://dev.filestack.com/))

---

## 📦 Installation

Clone the repo:

`git clone https://github.com/shamalja/file-upload-demos.git`
`cd file-upload-demos/filestack-php-file-upload-demo`

Install the Filestack PHP SDK via Composer:

`composer require filestack/filestack-php`

## 🧪 How to Use

	1.	Place a test file (e.g., test-file.jpg) inside the project folder.
	2.	Open filestack-php-file-upload-example.php.
	3.	Replace 'YOUR_API_KEY_HERE' with your actual Filestack API key.
	4.	Run the script:

  `php filestack-php-file-upload-example.php`

  ✅ On success, it will output the URL of the uploaded file.

## 📝 Code Example\

```
require_once 'vendor/autoload.php';

use Filestack\FilestackClient;

$apiKey = 'YOUR_API_KEY_HERE';
$client = new FilestackClient($apiKey);

$localFilePath = __DIR__ . '/test-file.jpg';

$result = $client->upload([
    'filepath' => $localFilePath
]);

echo 'Uploaded File URL: ' . $result->url();
```

## 🔐 Pro Tip

You can configure file type filters, size restrictions, and storage options from your Filestack dashboard.

## 📁 Folder Structure

```
Secure-PHP-FileUpload-Demo/
├── vendor/                     # Composer dependencies
├── filestack-php-file-upload-example.php
├── composer.json
└── README.md
```

## 📄 License

This demo is open-source and available under the [MIT License](https://github.com/shamalja/file-upload-demos/blob/main/LICENSE).

## 🙋‍♂️ Author

Shamal Jayawardhana

[LinkedIn](https://www.linkedin.com/in/shamal-jayawardhana/)
