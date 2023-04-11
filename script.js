document.addEventListener("DOMContentLoaded", function() {
  const carouselImages = document.querySelectorAll(".hero-carousel img");
  const shopButtons = document.querySelectorAll(".hero-carousel .shop");

  let currentImageIndex = 0;

  function showNextImage() {
    console.log("Switching to next image...");
    carouselImages[currentImageIndex].style.opacity = 0;
    shopButtons[currentImageIndex].classList.remove("active");
    currentImageIndex = (currentImageIndex + 1) % carouselImages.length;
    carouselImages[currentImageIndex].style.opacity = 1;
    shopButtons[currentImageIndex].classList.add("active");
  }

  let intervalId = setInterval(showNextImage, 5000); // adjust timing as needed

  // Stop the carousel when the user hovers over it
  const carouselContainer = document.querySelector(".hero-carousel");
  carouselContainer.addEventListener("mouseenter", () => {
    clearInterval(intervalId);
  });

  // Restart the carousel when the user stops hovering over it
  carouselContainer.addEventListener("mouseleave", () => {
    intervalId = setInterval(showNextImage, 5000);
  });
});
