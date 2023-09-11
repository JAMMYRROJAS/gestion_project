<?php 
    $tituloWeb = "Sílabas";
    $tituloHeader = "Aprendiendo a formar Sílabas";
    $descripcionHeader = "Ayudando a aprender jugando"
?>

<?php include_once 'layouts/header.php'; ?>

    <section id="contenido" class="cards contenedor">
        <h2 class="titulo">¡Comienza a Aprender!</h2>
        <div class="content-cards">
            <article class="card">
                <i class="fas fa-sort-alpha-down"></i>
                <h3>Abecedario</h3>
                <p>Explora el fascinante mundo del abecedario y aprende las letras que forman las palabras.</p>
                <a href="abecedario.php" class="cta">¡VAMOS!</a>
            </article>
            <article class="card">
                <i class="fas fa-chalkboard-teacher"></i>
                <h3>Sílabas</h3>
                <p>Descubre las sílabas y cómo se combinan para formar palabras.</p>
                <a href="silabas.php" class="cta">¡VAMOS!</a>
            </article>
            <article class="card">
                <i class="fas fa-book"></i>
                <h3>Oraciones</h3>
                <p>Sumérgete en el mundo de las oraciones y aprende a construir estructuras gramaticales.</p>
                <a href="oraciones.php" class="cta">¡VAMOS!</a>
            </article>
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