const observer = new IntersectionObserver(entries => {
    // Loop over the entries
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        // Add the animation class
        entry.target.classList.add('animationnew');
      }
    });
  });
  
  observer.observe(document.querySelector('.desp_sec'));

  




  const prev = document.querySelector(".prev_aulas");
  const next = document.querySelector(".next_aulas");
  const carousel = document.querySelector(".carousel-container");
  const track = document.querySelector(".track");
  let width = carousel.offsetWidth;
  let index = 0;
  window.addEventListener("resize", function () {
    width = carousel.offsetWidth;
  });
  next.addEventListener("click", function (e) {
    e.preventDefault();
    index = index + 1;
    prev.classList.add("show");
    track.style.transform = "translateX(" + index * -width + "px)";
    if (track.offsetWidth - index * width < index * width) {
      next.classList.add("hide");
    }
  });
  prev.addEventListener("click", function () {
    index = index - 1;
    next.classList.remove("hide");
    if (index === 0) {
      prev.classList.remove("show");
    }
    track.style.transform = "translateX(" + index * -width + "px)";
  });
  