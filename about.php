<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyGallery-about</title>
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
        <a href="main.php" class="navbar-item">
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
  <section class="hero is-primary is-medium">
    <div class="hero-body">
      <div class="container has-text-centered">
        <h1 class="title">
          About MyGallery
        </h1>
        <h2 class="subtitle">
          Capturing moments, creating memories.
        </h2>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="columns is-vcentered">
        <div class="column is-half">
          <h2 class="title is-2 mt-4 has-text-centered">Our Story</h2><hr>
          <p class="subtitle is-4 has-text-justify">
            Welcome to MyGallery! We are a platform dedicated to showcasing the beauty of life through stunning photography and art. 
            Our mission is to empower artists and photographers by giving them a space to share their creativity with the world.
          </p>
          <p class="subtitle is-4">
            From breathtaking landscapes to heartfelt portraits, MyGallery is your home for everything artistic.
          </p>
        </div>
        <div class="column is-half">
          <figure class="image is-4by3">
            <img src="IMAGE/all team member painting.jpg" alt="Our Story">
          </figure>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
        <h2 class="title is-3 has-text-centered is-yellow has-background-black py-2">Meet Our Talented Team</h2>
        <div class="columns">
            <div class="column is-3">
                <div class="card">
                    <div class="card-image hover-image">
                      <figure class="image is-4by3">
                        <img src="IMAGE/hq720.jpg" alt="Artist Image">
                      </figure>
                    </div>
                    <div class="card-content">
                      <div class="media">
                        <div class="media-content">
                          <p class="title is-4">Vivek sarad</p>
                          <p class="subtitle is-6">CEO & FOUNDER</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="column is-3">
                <div class="card">
                    <div class="card-image hover-image">
                      <figure class="image is-4by3">
                        <img src="IMAGE/lead designer.webp" alt="Artist Image">
                      </figure>
                    </div>
                    <div class="card-content">
                      <div class="media">
                        <div class="media-content">
                          <p class="title is-4">Robert sin</p>
                          <p class="subtitle is-6">Lead Designer</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="column is-3">
                <div class="card">
                    <div class="card-image hover-image">
                      <figure class="image is-4by3">
                        <img src="IMAGE/photographer.avif" alt="Artist Image">
                      </figure>
                    </div>
                    <div class="card-content">
                      <div class="media">
                        
                        <div class="media-content">
                          <p class="title is-4">Priti sikar</p>
                          <p class="subtitle is-6">Photographer</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

            <div class="column is-3">
                <div class="card">
                    <div class="card-image hover-image">
                      <figure class="image is-4by3">
                        <img src="IMAGE/marketing head.jpeg" alt="Artist Image">
                      </figure>
                    </div>
                    <div class="card-content">
                      <div class="media">
                        <div class="media-content">
                          <p class="title is-4">Marlina thukral</p>
                          <p class="subtitle is-6">Marketing Head</p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </section> 

  <footer class="footer has-background-black">
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
</body>
</html>