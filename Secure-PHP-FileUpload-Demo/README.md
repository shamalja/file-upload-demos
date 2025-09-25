# Secure PHP File Upload Script

This repository provides a fully functional and secure **PHP file upload script**, built using best practices to prevent common file upload vulnerabilities.

It is a companion resource to the article:  
**[Top 6 Mistakes to Avoid in Your PHP File Upload Script](https://blog.filestack.com/php-file-upload-script-mistakes/)**  

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

`git clone https://github.com/shamalja/file-upload-demos.git`

`cd file-upload-demos/Secure-PHP-FileUpload-Demo`

### 2. Start PHP’s built-in server

`php -S localhost:8000`

### 3. Open in browser

Go to: http://localhost:8000/secure-php-file-upload-script.php

## Requirements

- PHP 7.0 or later
- No database required
- Works out-of-the-box on localhost

## Learn More

- [PHP official documentation](https://www.php.net/manual/en/features.file-upload.php)
- [Let’s Encrypt – Free SSL Certificates](https://letsencrypt.org/)
- Full Article → [Top 6 Mistakes to Avoid in Your PHP File Upload Script](https://blog.filestack.com/php-file-upload-script-mistakes/)

## Author

**Shamal Jayawardhana**

Software Consultant, Digital Marketing & SEO Strategist, Educator

[LinkedIn](www.linkedin.com/in/shamal-jayawardhana)


## License

This project is open-source and available under the [MIT License](https://github.com/shamalja/file-upload-demos/blob/main/LICENSE).
