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
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <div class="sidebar">
    <aside>
            <h1 class="title is-4 has-text-centered mt-2">DASHBOARD</h1><hr>
            <div class="menu">
                <ul class="menu-list">
                    <li class="menu-item is-active" data-tab="tab1"><a href="#"><i class="fas fa-home fa-lg"></i>&nbsp;HOME</a></li>
                    
                    <li class=" dropdown is-hoverable">
                        <a class="dropdown-trigger" href="#">
                            <i class="fas fa-image fa-lg"></i>&nbsp;My Image
                          <span class="icon is-small">
                            <i class="fas fa-angle-down"></i>
                          </span>
                        </a>
                        <div class="dropdown-menu">
                          <div class="dropdown-content has-background-transparent">
                            <a href="#" class="dropdown-item menu-item" data-tab="tab2">View All Images</a>
                            <a href="upload.php" class="dropdown-item menu-item" data-tab="tab3">Upload New Image</a>
                            <a href="#" class="dropdown-item menu-item" data-tab="tab4">Albums</a>
                          </div>
                        </div>
                      </li>

                    <li class="menu-item" data-tab="tab5"><a href="index.php"><i class="fas fa-stream fa-lg"></i>&nbsp;Feed</a></li>
                    <li class="menu-item" data-tab="tab6"><a href="#"><i class="fas fa-link fa-lg"></i>&nbsp;Shared</a></li>
                    <li class="menu-item" data-tab="tab7"><a href="#"><i class="fas fa-user fa-lg"></i>&nbsp;My Profile</a></li>
                    <li class="menu-item" data-tab="tab8"><a href="#"><i class="fas fa-cog fa-lg"></i>&nbsp;Setting</a></li>
                    <li class="menu-item" data-tab="tab9"><a href="#"><i class="fas fa-circle-question fa-lg"></i>&nbsp;Help Center</a></li>
                    <li class="menu-item" data-tab="tab10"><a href="logout.php"><i class="fas fa-sign-out fa-lg"></i>&nbsp;Logout</a></li>        
                </ul>
            </div>
            </aside>
        </div>
   
        
        <div class="main-content">
        <div class="tab-content is-active" id="tab1">
                <header class="header">
                    <p class="title py-4 px-2 has-text-black has-text-shadow has-background-danger has-text-centered py-2">Your Uploaded Images</p>
                  </header>

        <div class="masonry-gallery py-4">
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="masonry-item">
                        <img src="<?php echo $row['image_path']; ?>" alt="Uploaded Image">
                </div>
            <?php endwhile; ?>
        </div>
    
    
            <div class="tab-content" id="tab2">
                <header class="header">
                    <p class="title is-4 py-4 px-2 has-text-black has-text-shadow has-background-danger py-2 has-text-centered">All Images</p>
                  </header>
                  </div>
                  <!--end tab2-->

    
                  <div class="tab-content" id="tab3">
                    <header class="header">
                        <h2 class="subtitle">Upload Image</h2>
                      </header>
                    
        </div>
                      <!--tab3-->
    
                      <div class="tab-content" id="tab4">
                    <header class="header">
                        <p class="title is-4 py-4 px-2 has-text-black has-text-shadow has-background-danger py-2 has-text-centered">All Images</p>
                      </header>
        </div>
    </div>
    </div>
          
</body>
</html>