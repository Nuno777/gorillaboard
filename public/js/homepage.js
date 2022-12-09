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
  
  observer.observe(document.querySelector('.triangletitle'));

  const observer1 = new IntersectionObserver(entries => {
    // Loop over the entries
    entries.forEach(entry => {
      // If the element is visible
      if (entry.isIntersecting) {
        // Add the animation class
        entry.target.classList.add('animationnew2');
      }
    });
  });
  
  observer1.observe(document.querySelector('.title_sections_home'));
  