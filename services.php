<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="assets/Bootstrap/bootstrap/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
</head>
<body>

    <section class="container-fluid">
        <?php 
            require_once("./components/nav.php");
        ?>
    </section>

    <section class="hero">
        <video class="container-sm px-0 d-flex bg-dark text-white justify-content-center align-items-center rounded-4" src="assets/vide/OFFERS.mp4" autoplay data-aos="fade-up">
        </video>
    </section>

    <?php 
        require_once("./components/services.php");
    ?>

    
</body>
<script src="assets/Bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script src="app.js"></script>

<script>

        function toggle() {
            const audio = document.getElementById("bg-music");
            const btn = document.getElementById("music-player-button");

            // Toggle class for UI
            const isPlaying = btn.classList.toggle("active");

            // Ternary operation for play or pause
            isPlaying ? audio.play() : audio.pause();
            // if(isPlaying == false){
            //     return audio.play();
            // }
            // else if(isPlaying == false){
            //     return audio.pause()
            // };

            // Optional: save state (if you have a backend)
            // saveAudioState(audio.currentTime, isPlaying);
        }

</script>
</html>