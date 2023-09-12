<?php 
    $tituloWeb = "Contactos";
    $tituloHeader = "¡Contáctanos!";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $tituloWeb; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header class="hero">
        <div class="textos-hero">
            <a class="icono-header" href="index.php"><i class="fas fa-home" style="font-size: 50px;"></i></a>
            <h1 class="name"><?php echo $tituloHeader ?></h1>
        </div>
        <div class="svg-hero" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;">
                </path>
            </svg>
        </div>
    </header>

    <section id="contenidoEquipo" class="container text-center">
        <div class="row">
            <div class="col-lg-4">
                <img src="assets/imagenes/facebook-color-svgrepo-com.svg" alt="facebookImg" width="200" height="150">
                <h2 style="font-weight: bold;">Facebook</h2>
            </div>
            <div class="col-lg-4">
                <img src="assets/imagenes/instagram-2-1-logo-svgrepo-com.svg" alt="instagramImg" width="200" height="150">
                <h2 style="font-weight: bold;">Instagram</h2>
            </div>
            <div class="col-lg-4">
                <img src="assets/imagenes/twitter-color-svgrepo-com.svg" alt="TwitterImg" width="200" height="150">
                <h2 style="font-weight: bold;">Twitter</h2>
            </div>
        </div>
    </section>

    <div class="svg-wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
        style="height: 100%; width: 100%;">
        <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: #f5576c;"></path>
        </svg>
    </div>

    <footer>
        <div style="text-align: center; padding-bottom: 30px; background: #f5576c;">
            <p>© Desarrollado por GPTI-FISI</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/c15b744a04.js" crossorigin="anonymous"></script>
</body>
</html>