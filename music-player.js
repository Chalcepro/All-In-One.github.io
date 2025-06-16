function toggleMusic() {
  const btn = document.getElementById("music-player-button");
  const music = document.getElementById("bg-music");

  btn.classList.toggle("active");

  if (btn.classList.contains("active")) {
    music.play();
  } else {
    music.pause();
  }
}
