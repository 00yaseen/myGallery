<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MyGallery - Home</title>
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

          <?php if (!isset($_SESSION['user_id'])): ?>
            <div class="buttons">
                <a href="login.php" class="button is-primary">Login</a>
                <a href="signup.php" class="button is-link">Sign Up</a>
            </div>

            <?php else: ?>
              <div class="dropdown navbar-item" id="dropdown">
              <div class="dropdown-trigger">
      <button class="button is-outlined" aria-haspopup="true" aria-controls="dropdown-menu">
      <span class="icon is-small">
          <i class="fas fa-angle-down" aria-hidden="true"></i>
        </span>
          <i class="fas fa-user fa-lg"></i>
        </span>

      </button>
    </div>
    <div class="dropdown-menu" id="dropdown-menu" role="menu">
      <div class="dropdown-content">
        <a href="dashboard.php" class="dropdown-item">
          Profile
        </a>
        <hr class="dropdown-divider">
        <a href="logout.php" class="dropdown-item">
          Log-out </a>
      </div>
    </div>
        <?php endif; ?>
          
        </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <section class="hero is-medium is-primary">
      <div class="hero-body">
        <div class="container has-text-centered">
          <h1 class="title is-2 is-logo-font-shadow">
            Welcome to MyGallery
          </h1>
          <p class="subtitle is-logo-font-shadow">
            Explore and discover stunning artwork and photography from talented artists around the world.
          </p>
          <a href="gallery.php" class="button is-large is-white pulsating-outline">Browse Gallery</a>
        </div>
      </div>
    </section>
    <marquee behavior="scroll" scrolldelay="100" direction="left" hspace="10" class="is-black">Welcome to MyGallery! We are a platform dedicated to showcasing the beauty of life through stunning photography and art. 
      Our mission is to empower artists and photographers by giving them a space to share their creativity with the world.
</marquee>

    <section class="section">
      <div class="container">

    <div class="slideshow-container">
    <div class="slides active image is-5by3">
      <img class="image" src="IMAGE/7bdce75d64ba8f75d7b71b14b23e411e.jpg" alt="Product 1">
      <div class="slideshow-caption">Sunset in ocean</div>
    </div>
    <div class="slides image is-5by3">
      <img class="image" src="IMAGE/mountain-view-from-top-4k_1540131735.jpg" alt="Product 2">
      <div class="slideshow-caption">Sunrise over the Mountain</div>
    </div>
    <div class="slides image is-5by3">
      <img class="image" src="IMAGE/nature-conservation-4352793_1280.jpg" alt="Product 3">
      <div class="slideshow-caption">sunrise in the field</div>
    </div>
    <div class="slides image is-5by3">
      <img class="image" src="IMAGE/gray-mountain-4k-painting-ta7y5rsua7ptejuc.jpg" alt="Product 3">
      <div class="slideshow-caption">Mountain painting</div>
    </div>
    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
    <button class="next" onclick="changeSlide(1)">&#10095;</button>
  </div>
        </div>
    </section>

    <section class="section">
      <div class="container">
        <h2 class="title is-3 has-text-centered">Explore More</h2>
        <div class="columns is-multiline">
          <div class="column is-3">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="IMAGE/7bdce75d64ba8f75d7b71b14b23e411e.jpg" alt="Gallery Image 1">
                </figure>
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="IMAGE/mountain-view-from-top-4k_1540131735.jpg" alt="Gallery Image 2">
                </figure>
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="IMAGE/nature-conservation-4352793_1280.jpg" alt="Gallery Image 3">
                </figure>
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="card">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="IMAGE/gray-mountain-4k-painting-ta7y5rsua7ptejuc.jpg" alt="Gallery Image 4">
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="has-text-centered">
          <a href="gallery.php" class="button is-primary is-large is-outlined button-3d pulsating-outline">View Full Gallery</a>
        </div>
      </div>
    </section>

    <section class="section">
        <div class="container">
            <h2 class="title is-3 has-text-centered">Our Best Artist</h2>
            <div class="columns">
                <div class="column is-3">
                    <div class="card">
                        <div class="card-image">
                          <figure class="image is-4by3">
                            <img src="IMAGE/istockphoto-489243814-612x612.jpg" alt="Artist Image">
                          </figure>
                        </div>
                        <div class="card-content">
                          <div class="media">
                            <div class="media-left">
                              <figure class="image is-48x48">
                                <img src="IMAGE/istockphoto-489243814-612x612.jpg" class="image is-rounded" alt="Artist Avatar">
                              </figure>
                            </div>
                            <div class="media-content">
                              <p class="title is-4">Sharmila Jayanti</p>
                              <p class="subtitle is-6">@artistjayanti</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>

                <div class="column is-3">
                    <div class="card">
                        <div class="card-image">
                          <figure class="image is-4by3">
                            <img src="IMAGE/hq720.jpg" alt="Artist Image">
                          </figure>
                        </div>
                        <div class="card-content">
                          <div class="media">
                            <div class="media-left">
                              <figure class="image is-48x48">
                                <img src="IMAGE/hq720.jpg" class="image is-rounded" alt="Artist Avatar">
                              </figure>
                            </div>
                            <div class="media-content">
                              <p class="title is-4">Robert Yadav</p>
                              <p class="subtitle is-6">@yadavRobert</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>

                <div class="column is-3">
                    <div class="card">
                        <div class="card-image">
                          <figure class="image is-4by3">
                            <img src="IMAGE/pexels-valeriiamiller-3547625.jpg" alt="Artist Image">
                          </figure>
                        </div>
                        <div class="card-content">
                          <div class="media">
                            <div class="media-left">
                              <figure class="image is-48x48">
                                <img src="IMAGE/pexels-valeriiamiller-3547625.jpg" class="image is-rounded" alt="Artist Avatar">
                              </figure>
                            </div>
                            <div class="media-content">
                              <p class="title is-4">Priti Nayar</p>
                              <p class="subtitle is-6">@215nayar</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>

                <div class="column is-3">
                    <div class="card">
                        <div class="card-image">
                          <figure class="image is-4by3">
                            <img src="IMAGE/360_F_595542288_Du2a1zsnQo8gHkp1FWdPrXWdIbhC8w1A.jpg" alt="Artist Image">
                          </figure>
                        </div>
                        <div class="card-content">
                          <div class="media">
                            <div class="media-left">
                              <figure class="image is-48x48">
                                <img src="IMAGE/360_F_595542288_Du2a1zsnQo8gHkp1FWdPrXWdIbhC8w1A.jpg" class="image is-rounded" alt="Artist Avatar">
                              </figure>
                            </div>
                            <div class="media-content">
                              <p class="title is-4">Thomson Singh</p>
                              <p class="subtitle is-6">@artistthomsan</p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
      </section> 
  </main>

  <footer class="footer has-background-black ">
    
    <div class="columns is-centered">
        <div class="column is-3">
            <label for="" class="label is-yellow"> MyGallery</label>
            <p class="is-white">Our mission is to empower individuals to showcase their creativity by providing a intuitive, and visually stunning platform for sharing, discovering, and celebrating unique art and moments.</p>
        </div>
        <div class="column is-3">
            <label for="" class="label is-yellow"> Quick links</label>
            <ul>
                <li><a href="#" class="is-white">Home</a></li>
                <li><a href="#" class="is-white">Gallery</a></li>
                <li><a href="#" class="is-white">About us</a></li>
                <li><a href="#"class="is-white">Contact</a></li>
                <li><a href="PAGES/upload.html" class="is-white">upload images</a></li>
            </ul>
        </div>
        <div class="column is-3 ">
            <label for="" class="label is-yellow">Contact</label>
            <ul>
                <li><a href="tel:9519877941" class="is-white"><i class="fas fa-phone fa-lg "></i>&nbsp;+91 9519877941</a></li>
                <li><a href="mailto:" class="is-white"><i class="fas fa-envelope fa-lg"></i> &nbsp;yaseenazhar54@gmail.com</a></li>
                <li><a href="#" class="is-white"><i class="fas fa-map-marker-alt fa-lg"></i>&nbsp;5051 Daryaganj, New Delhi 110002</a></li>
            </ul><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d28012.59688759148!2d77.2407296!3d28.6425088!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1732341526462!5m2!1sen!2sin" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border-radius: 5px;"></iframe>
            
        </div>
        <div class="column is-3">
            <label for="" class="label is-yellow"> Support us</label>
            <ul class="social-media is-centered py-2">
                <li><a href="#"><i class="fab fa-instagram fa-lg px-2 is-size-4"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook fa-lg px-2 is-size-4"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter fa-lg px-2 is-size-4"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest fa-lg px-2 is-size-4"></i></a></li>
            </ul><hr>
            <div class="column">
                <form action="">
                    <div class="field">
                        <div class="control">
                            <input type="email" class="input" placeholder="Enter your Email....." required>
                        </div>
                    </div>
                    <div class="control">
                        <button class="button">subscribe Now</button>
                    </div>
                </form>
            </div>
        </div>
      </div><hr>
      <p class="is-reseverd is-centered">&copy; All Right Reserved 2024-25 by <a href="#">Mo Yaseen</a></p>
  </footer>
  <script src="JS/app.js"></script>
</body>
</html>

