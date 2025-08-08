<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM images WHERE user_id = '$user_id' ORDER BY uploaded_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MyGallery - Gallery</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="icon" href="/IMAGE/231-2312515_photo-camera-icon-gallery-icon.png" type="image/x-icon">
</head>

<body>
  <header>
    <nav class="navbar is-info">
      <div class="navbar-brand">
        <a href="index.php" class="navbar-item">
          <p class="title is-font is-logo-font-shadow" style="color: aliceblue;">MyGallery</p>
        </a>
        <div class="navbar-burger burger" data-target="navbarMenu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>

      <div id="navbarMenu" class="navbar-menu">
        <div class="navbar-end is-font has-text-weight-bold">
          <a href="index.php" class="navbar-item hover-underline">Home</a>
          <a href="gallery.php" class="navbar-item hover-underline">Gallery</a>
          <a href="about.php" class="navbar-item hover-underline">About</a>
          <a href="contact.php" class="navbar-item hover-underline">Contact</a>
          
        </div>
      </div>
    </nav>
  </header>
  <section class="section">
    <div class="container">
    <h1 class="title has-text-centered">Latest Photos </h1>
    <div class="masonry-gallery py-2">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="masonry-item zoom">
                        <img src="<?php echo $row['image_path']; ?>" alt="Uploaded Image">
                </div>
            <?php endwhile; ?>
        </div>  
      </div>
    </div>
  </section>

  </body>
  </html>