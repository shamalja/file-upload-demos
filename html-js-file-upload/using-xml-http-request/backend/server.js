const express = require('express');
const multer = require('multer');
const cors = require('cors');
const app = express();
const port = 5500;

app.use(cors()); // To allow requests from Live Server

// Configure multer for file handling
const storage = multer.diskStorage({
  destination: function (req, file, cb) {
    cb(null, 'uploads/'); // Folder where files will be saved
  },
  filename: function (req, file, cb) {
    cb(null, file.originalname); // Keep original file name
  }
});
const upload = multer({ storage: storage });

app.post('/upload', upload.array('files'), (req, res) => {
  console.log('Files uploaded:', req.files);
  res.status(200).json({ message: 'Files uploaded successfully!' });
});

// Create uploads folder if it doesn't exist
const fs = require('fs');
if (!fs.existsSync('uploads')) {
  fs.mkdirSync('uploads');
}

app.listen(port, () => {
  console.log(`🚀 Server listening on http://localhost:${port}`);
});
