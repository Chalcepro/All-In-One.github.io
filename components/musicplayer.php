    <link rel="stylesheet" href="../stylings.php">
    <div id="music-player-button">
        <audio id="bg-music" src="assets/audio/loop.MP3" loop></audio>
    </div>
    <script>
            function toggle() {
            const audio = document.getElementById("bg-music");
            const btn = document.getElementById("music-player-button");

            // Toggle class for UI
            const isPlaying = btn.classList.toggle("active");

            // Ternary operation for play or pause
            isPlaying ? audio.play() : audio.pause();
        }
    </script>