<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $targetDir = "./";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    if ($_FILES["file"]["size"] > 2000000) {
        echo "Sorry, your file is too large. It must be less than 2MB.";
        $uploadOk = 0;
    }


    $allowedTypes = array('png', 'jpg', 'jpeg', 'gif');
    if (!in_array($imageFileType, $allowedTypes)) {
        echo "Sorry, only PNG, JPG, and GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
    
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded successfully.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h2>Upload an Image</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>
