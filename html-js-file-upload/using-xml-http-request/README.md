# 📁 Multi-File Upload with Preview and Progress (Using XMLHttpRequest)

This project demonstrates how to build a modern, responsive multi-file uploader using **HTML**, **CSS**, and **JavaScript** with the legacy `XMLHttpRequest` API. Users can preview selected images or PDFs, view a live upload progress bar, and receive real-time feedback after upload.

> ✅ Supports multiple file types (images & PDFs)  
> 🚫 Rejects files > 5MB or unsupported formats  
> 📊 Shows upload progress using a dynamic progress bar

---

## 🔧 Features

- Real-time preview of selected images
- Inline validation for file type & size
- Upload progress bar (using `xhr.upload.onprogress`)
- User feedback after upload success or error

---

## 💻 Technologies Used

- HTML5 & CSS3 (Responsive UI)
- JavaScript (Vanilla)
- `XMLHttpRequest` API
- [http-server](https://www.npmjs.com/package/http-server) (for local testing)

---

## 🚀 Getting Started

### 1. Clone this repository

`git clone https://github.com/shamalja/file-upload-demos.git`

`cd file-upload-demos/html-js-file-upload/using-xml-http-request`

### 2. Start local server

Make sure you have Node.js installed. Then start the server in the project directory (file-upload-demos/html-js-file-upload/using-xml-http-request/frontend):

`npm http-server`

By default, it will run at http://127.0.0.1:8080.

### 3. Open in your browser

Copy and paste the server address (e.g., http://127.0.0.1:8080) into your browser to run the app locally.

### 4: Create a simple file upload server in backend (Node.js Example)

- Step 1: Navigate up from frontend to using-xml-http-request

`cd ..`

- Step 2: Enter the backend folder

`cd backend`

-  Install the required dependencies

`npm init -y`

`npm install express multer cors`

- Run the server

`node server.js`

### Final Testing Steps

-Go to your browser tab where Live Server opened the HTML page.

- Choose multiple images or PDFs.

- Click Upload

- You’ll see:
  - Progress bar updates
  - Preview thumbnails
	- Success or error message

Uploaded files will appear in the uploads/ folder.

## 📄 License

This project is licensed under the [MIT License](https://github.com/shamalja/file-upload-demos/blob/main/LICENSE).


