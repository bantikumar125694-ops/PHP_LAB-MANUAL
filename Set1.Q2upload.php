```php
<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if file is selected
    if (isset($_FILES["image"])) {

        $file = $_FILES["image"];

        // Get file information
        $fileName = $file["name"];
        $fileSize = $file["size"];
        $fileTmpName = $file["tmp_name"];

        // Get file extension
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Allowed image types
        $allowedTypes = array("jpg", "jpeg", "png", "gif");

        // Check file type
        if (!in_array($fileType, $allowedTypes)) {

            $message = "Only JPG, JPEG, PNG and GIF images are allowed.";

        }
        // Check file size (2 MB)
        elseif ($fileSize >= 2 * 1024 * 1024) {

            $message = "File size must be less than 2 MB.";

        }
        else {

            // Upload folder
            $uploadFolder = "uploads/";

            // Create file path
            $filePath = $uploadFolder . basename($fileName);

            // Move uploaded file
            if (move_uploaded_file($fileTmpName, $filePath)) {

                $message = "File uploaded successfully!<br>";
                $message .= "File Path: " . $filePath;

            }
            else {

                $message = "Error uploading file.";

            }
        }
    }
}
?>


