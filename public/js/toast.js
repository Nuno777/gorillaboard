var toast = document.querySelector('.toast');

// show the toast
toast.classList.add('toast-show');

// hide the toast after 5 seconds
setTimeout(function() {
  toast.classList.remove('toast-show');
}, 70000);
