<?php 
    $tituloWeb = "Oraciones";
    $tituloHeader = "Aprendiendo a formar oraciones"
?>


<?php include_once 'layouts/header.php'; ?>

    <div id="contenido" class="container">
        <div class="container">
            <h2 class="titulo font-weight-bold">Oraciones de ejemplo</h2>
            <div class="row word">

            </div>
        </div>

        <div class="dropdown-divider border-top border-3 mb-4"></div>

        <br>

        <h2 class="titulo font-weight-bold mt-4">¡Ponlo a prueba!</h2>
        
        <audio id="audio" src="audios/palabra_oracion.mp3" style="display: none;"></audio>
        <div class="audio">
            <i class="fas fa-play" id="playButton"></i>
        </div>
    </div>

    <div class="container">
        <?php include_once 'ejercicios/completa_oracion.php' ?>
    </div>



    <div class="svg-wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
        style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: #f5576c;"></path>
        </svg>
    </div>

<?php include_once 'layouts/footer.php';  ?>

    <script>
        // Obtén una referencia al elemento de audio
        var audio = document.getElementById("audio");

        // Obtén una referencia al botón de reproducción
        var playButton = document.getElementById("playButton");

        // Agrega un manejador de eventos al botón de reproducción
        playButton.addEventListener("click", function() {
            if (audio.paused) {
                // Si el audio está pausado, comienza a reproducir y cambia el ícono a pausa
                audio.play();
                playButton.classList.remove("fa-play");
                playButton.classList.add("fa-pause");
                audio.classList.add("playing");
            } else {
                // Si el audio se está reproduciendo, pausa y cambia el ícono a reproducir
                audio.pause();
                playButton.classList.remove("fa-pause");
                playButton.classList.add("fa-play");
                audio.classList.add("playing");
            }
        });

        // Agrega un manejador de eventos al audio para cambiar el ícono a "play" cuando termine la reproducción
        audio.addEventListener("ended", function() {
            playButton.classList.remove("fa-pause");
            playButton.classList.add("fa-play");
        });
    </script>

    <script>
        // Función para reproducir el audio específico en bucle con volumen al 50%
        function reproducirAudioEspecifico() {
            var audioEspecifico = new Audio("audios/fondo.mp3");
            audioEspecifico.volume = 0.3; // Establece el volumen al 50%
            audioEspecifico.loop = true; // Reproduce en bucle
            audioEspecifico.play();
        }

        // Ejecuta la función cuando se carga la página
        window.addEventListener("load", reproducirAudioEspecifico);
    </script>


</body>

</html>