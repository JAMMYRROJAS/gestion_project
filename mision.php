<?php 
    $tituloWeb = "Mision";
    $tituloHeader = "Misión";
    $descripcionHeader = "Transformando el Aprendizaje de la Lectura en una Aventura de Descubrimiento para Niños";
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
    <style>
        .btn {
            background-color: #f23c54;
            border-color: #f23c54;
        }
        .rounded-circle {
            margin-bottom: 15px;
        }
        .desarrollador {
            font-weight: bold;
        }
    </style>
    <header class="hero">
        <div class="textos-hero">
            <a class="icono-header" href="index.php"><i class="fas fa-home" style="font-size: 50px;"></i></a>
            <h1 class="name"><?php echo $tituloHeader ?></h1>
            <p style="font-weight: bold;"><?php echo $descripcionHeader; ?></p>
        </div>
        <div class="svg-hero" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;">
                </path>
            </svg>
        </div>
    </header>

    <section id="contenidoMision" class="container text-center">
        <p>"Nuestra misión en [Nombre del Proyecto] es revolucionar la forma en que los niños aprenden a leer al proporcionar una plataforma interactiva y envolvente que fomenta el amor por la lectura desde una edad temprana. Nos dedicamos a empoderar a los niños y sus familias, alentando el hábito de la lectura y haciendo que el proceso de aprender a leer sea una experiencia emocionante y enriquecedora.

En [Nombre del Proyecto], creemos que la lectura es una habilidad fundamental que no solo enriquece la vida de un niño, sino que también sienta las bases para su éxito en el futuro. Nuestra plataforma está diseñada con un enfoque lúdico y educativo, donde los niños pueden sumergirse en historias emocionantes, resolver acertijos y participar en actividades interactivas que refuerzan sus habilidades de lectura de manera efectiva y entretenida.

Nos enorgullece ser un recurso confiable para padres, maestros y cuidadores, brindándoles herramientas efectivas y recursos educativos de alta calidad que complementan la educación formal de los niños. Nuestro compromiso con la excelencia se refleja en cada aspecto de nuestra plataforma, desde el diseño de contenido hasta la accesibilidad y la seguridad en línea.

En el corazón de [Nombre del Proyecto] se encuentra la creencia de que la lectura no solo es una habilidad, sino una puerta a un mundo de imaginación, conocimiento y crecimiento personal. Nuestro objetivo es inspirar a los niños a descubrir el placer de la lectura, a desarrollar su comprensión lectora y a cultivar la confianza en sí mismos como lectores ávidos.

A medida que avanzamos, nos comprometemos a continuar innovando y mejorando nuestra plataforma para satisfacer las necesidades cambiantes de los niños y sus familias. Creemos que cada niño tiene el potencial de convertirse en un lector apasionado, y estamos decididos a hacer que ese potencial se convierta en una realidad.

Únete a nosotros en esta emocionante aventura de aprendizaje y descubrimiento. Juntos, podemos inspirar una nueva generación de amantes de la lectura y transformar el mundo de la educación infantil".</p>
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