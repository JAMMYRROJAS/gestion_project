<?php 
    $tituloWeb = "Sílabas";
    $tituloHeader = "Aprendiendo a formar Sílabas"
?>

<?php include_once 'layouts/header.php'; ?>

    <div id="inicio" class="cards contenedor">
        <h2 class="titulo">¡Comienza a Aprender!</h2>
    </div>

    <div class="container">
        <?php include_once 'ejercicios/aprender_silaba.php'?>
    </div>


    <div id="contenido" class="cards contenedor">
        <h2 class="titulo">¡Practiquemos!</h2>
    </div>

    <div class="container">
        <?php include_once 'ejercicios/completa_silaba.php' ?>
    </div>

    <div class="svg-wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
        style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: #f5576c;"></path>
        </svg>
    </div>

<?php include_once 'layouts/footer.php';  ?>
</body>

</html>