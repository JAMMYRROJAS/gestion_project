<?php 
    $tituloWeb = "Inicio";
    $tituloHeader = "Bienvenido a XXXXXX"
?>

<?php include_once 'layouts/header.php'; ?>

    <section id="contenido" class="container">
        <h2 class="titulo">¡Comienza a Aprender!</h2>
        
        <div class="card-deck">
            <div class="card border-danger col-md-4 my-2" style="width:400px">
                <img class="card-img-top mt-3" src="img/abecedario.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bold">Abecedario</h4>
                    <h5 class="card-text text-center">Explora el fascinante mundo del abecedario y aprende las letras que forman las palabras.</h5>
                    <a href="abecedario.php" class="btn btn-outline-danger btn-block mt-4">¡VAMOS!</a>
                </div>
            </div>

            <div class="card border-danger col-md-4 my-2" style="width:400px">
                <img class="card-img-top" src="img/silabas.png" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bold">Silabas</h4>
                    <h5 class="card-text text-center">Descubre las sílabas y cómo se combinan para formar palabras. ¡Te servirá mucho!</h5>
                    <a href="silabas.php" class="btn btn-outline-danger btn-block mt-4">¡VAMOS!</a>
                </div>
            </div>

            <div class="card border-danger col-md-4 my-2" style="width:400px">
                <img class="card-img-top" src="img/oraciones.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title text-center font-weight-bold">Oraciones</h4>
                    <h5 class="card-text text-center">Sumérgete en el mundo de las oraciones y aprende a construir estructuras gramaticales.</h5>
                    <a href="oraciones.php" class="btn btn-outline-danger btn-block mt-4">¡VAMOS!</a>
                </div>
            </div>
        </div>
    </section>

    <div class="svg-wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
        style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: #f5576c;"></path>
        </svg>
    </div>

<?php include_once 'layouts/footer.php';  ?>
</body>

</html>