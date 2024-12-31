document.addEventListener("DOMContentLoaded", function () {
  // Define the callback for the Intersection Observer
  const startCounting = (entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counters = entry.target.querySelectorAll(".count");
        const duration = 1500; // Duration for the counting animation

        counters.forEach(counter => {
          const target = +counter.getAttribute("data-target");
          const step = target / (duration / 16); // Update every ~16ms for smooth animation

          let count = 0;

          const updateCounter = () => {
            count += step;

            if (count >= target) {
              counter.innerText = target;
            } else {
              counter.innerText = Math.ceil(count);
              requestAnimationFrame(updateCounter);
            }
          };

          updateCounter();
        });

        // Stop observing after the counters have started
        observer.unobserve(entry.target);
      }
    });
  };

  // Create an Intersection Observer instance
  const observer = new IntersectionObserver(startCounting, {
    threshold: 0.5 // Trigger when 50% of the element is visible
  });

  // Observe the "About" section
  const aboutSection = document.querySelector("#About");
  observer.observe(aboutSection);
});

// Auto-rotate carousel every 3 seconds
setInterval(() => {
  const carousels = document.querySelectorAll('.carousel');
  carousels.forEach(carousel => {
    let nextButton = carousel.querySelector('.carousel-control-next');
    nextButton.click();
  });
}, 3000);  // 3 seconds interval for the carousel to auto-rotate
