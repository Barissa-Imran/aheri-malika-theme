// Navigation bar
var toggleMenu = false;
var menuButton = document.getElementById('menuButton');
var overlay = document.getElementById('overlay');
var closeButton = document.getElementById('closeButton');
var menuLink = document.getElementById('menuLink');

// open mobile
menuButton.addEventListener('click', function () {
  toggleMenu = true;
  overlay.classList.toggle('collapse');
});

// close mobile menu functionality
closeButton.addEventListener('click', function () {
  toggleMenu = false;
  overlay.classList.toggle('collapse');
});

// close mobile menu on link click
menuLink.addEventListener('click', function () {
  toggleMenu = false;
  overlay.classList.toggle('collapse');
});

// Video playback
function toggleVideo() {
  var video = document.getElementById('aheriVid');
  var button = document.getElementById('playBtn');
  var player = document.getElementById('player');
  var vidOverlay = document.getElementById('vidOverlay');

  if (video.paused) {
    video.play();
    button.innerHTML = '<i class="bi bi-pause-fill"></i>'; // Change to pause icon
    player.classList.add('overlay-circle');
    vidOverlay.classList.add('overlay');
  } else {
    video.pause();
    button.innerHTML = '<i class="bi bi-play-fill"></i>'; // Change to play icon
    player.classList.remove('overlay-circle');
    vidOverlay.classList.remove('overlay');
  }
}

// dropdown functionality on navbar
var dropdownbtn = document.querySelector('.menu-item-has-children');
var aboutLink = document.querySelector('.menu-item-has-children > a');
var dropLink = document.querySelector('.menu-item-has-children > ul');
var togglebg = document.querySelector('.menu-item-has-children > .sub-menu');

let droptoggle =
  '<button id="navDrop" type="button" class="btn text-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>';

dropdownbtn.insertAdjacentHTML('beforeend', droptoggle);
// togglebg.classList.add('bg-dark');

togglebg.classList.add('bg-dark');
dropdownbtn.classList.add('btn-group');
aboutLink.classList += '';
dropLink.classList.add('dropdown-menu');

// Get all the <link> elements on the page
var linkElements = document.getElementsByTagName('link');

// Iterate over the <link> elements and extract the CSS file names
for (var i = 0; i < linkElements.length; i++) {
  var href = linkElements[i].getAttribute('href');
  if (href.endsWith('.css?ver=0.2')) {
    var fileName = href.substring(href.lastIndexOf('/') + 1);

    droptoggle = document.getElementById('navDrop');

    if (fileName === 'about.css?ver=0.2') {
      droptoggle.classList.replace('text-light', 'text-dark');
      togglebg.classList.toggle('bg-dark');
    }
  }
}
