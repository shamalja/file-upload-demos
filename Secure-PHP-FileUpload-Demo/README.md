# Secure PHP File Upload Script

This repository provides a fully functional and secure **PHP file upload script**, built using best practices to prevent common file upload vulnerabilities.

It is a companion resource to the article:  
**[Top 6 Mistakes to Avoid in Your PHP File Upload Script](https://yourwebsite.com/php-file-upload-script-mistakes)**  

---

## 🔐 Features

✅ Validates MIME type (not just file extension)

✅ Enforces server-side file size limits

✅ Checks for upload errors via `$_FILES['error']`

✅ Renames uploaded files to avoid collisions

✅ Stores uploads in a non-public directory

✅ Compatible with PHP’s built-in web server

✅ Easy to customize and extend

---

## 📂 Folder Structure

`secure-php-file-upload-demo/`

`├── secure-php-file-upload-script.php`

`├── secure_uploads/           # Upload destination (excluded in .gitignore)`

`├── .gitignore`

`└── README.md`


> ⚠️ Uploaded files are stored in `secure_uploads/`, which is excluded from version control.

---

## 🚀 How to Run Locally

### 1. Clone the repo

`git clone https://github.com/your-username/php-file-upload-demo.git`

`cd secure-php-file-upload-demo`

