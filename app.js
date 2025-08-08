
    document.addEventListener('DOMContentLoaded', () => {
      const burger = document.querySelector('.navbar-burger');
      const menu = document.querySelector('#navbarMenu');

      if (burger) {
        burger.addEventListener('click', () => {
          burger.classList.toggle('is-active');
          menu.classList.toggle('is-active');
        });
      }
    });
    

    document.addEventListener("DOMContentLoaded", function () {
      const tabs = document.querySelectorAll(".menu-item");
      const tabContents = document.querySelectorAll(".tab-content");
    
      tabs.forEach(tab => {
        tab.addEventListener("click", function (event) {
          event.preventDefault();
    
          // Remove the active class from all tabs and contents
          tabs.forEach(t => t.classList.remove("is-active"));
          tabContents.forEach(content => content.classList.remove("is-active"));
    
          // Add the active class to the clicked tab and corresponding content
          tab.classList.add("is-active");
          const targetTab = tab.getAttribute("data-tab");
          document.getElementById(targetTab).classList.add("is-active");
        });
      });
    });


  // Dropdown toggle functionality
  document.addEventListener('DOMContentLoaded', () => {
    const dropdown = document.getElementById('dropdown');
    const dropdownTrigger = dropdown.querySelector('.dropdown-trigger');

    dropdownTrigger.addEventListener('click', () => {
      dropdown.classList.toggle('is-active');
    });

    document.addEventListener('click', (event) => {
      if (!dropdown.contains(event.target)) {
        dropdown.classList.remove('is-active');
      }
    });
  });

  let slideIndex = 0;

  function showSlides() {
    const slides = document.querySelectorAll('.slides');

    slides.forEach((slide) => {
      slide.style.display = "none";
    });

    slideIndex++;
    if (slideIndex > slides.length) slideIndex = 1;

    slides[slideIndex - 1].style.display = "block";

    setTimeout(showSlides, 5000);
  }

  function changeSlide(n) {
    slideIndex += n;
    const slides = document.querySelectorAll('.slides');

    if (slideIndex > slides.length) slideIndex = 1;
    if (slideIndex < 1) slideIndex = slides.length;

    slides.forEach((slide) => {
      slide.style.display = "none";
    });

    slides[slideIndex - 1].style.display = "block";
  }

  showSlides();