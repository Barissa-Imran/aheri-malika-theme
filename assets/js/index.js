// Navigation bar
var toggleMenu = false;
var menuButton = document.getElementById('menuButton');
var overlay = document.getElementById('overlay');
var closeButton = document.getElementById('closeButton');

menuButton.addEventListener('click', function () {
  toggleMenu = true;
  overlay.classList.toggle('collapse');
});

closeButton.addEventListener('click', function () {
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
