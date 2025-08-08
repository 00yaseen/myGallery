<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // Check if the file is an image
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowed_types)) {
        echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
        exit();
    }


    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        $user_id = $_SESSION['user_id'];
        $sql = "INSERT INTO images (user_id, image_path, uploaded_at) VALUES ('$user_id', '$target_file', NOW())";
        if ($conn->query($sql) === TRUE) {
            header('Location: dashboard.php');
        } else {
            echo "Database Error: " . $conn->error;
        }
    } else {
        echo "Error: Failed to move the uploaded file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>upload-img</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
    <section class="section">
        <div class="container">
            <div class="box">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
                <div class="field">
                    <div class="control">
                    <input class="input is-info" type="file" name="image" accept="image/*" required>
                    </div>
                    </div>
                        <div class="field">
                    <div class="control">
                    <button class="button is-primary is-outlined" type="submit">Upload</button>
                    </div>
                    </div>
                    </form>
            
        </div>
</div>
    </section>
</body>
</html>