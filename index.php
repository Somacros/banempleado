<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include('./components/navbar/collapseNavBar.php');
        include('./components/Carousel/carousel.php');
        include('./components/jumbotron/jumbotron.php');
        include('./components/card/card.php');
        include('./components/headContent/headContent.php');
        include('./components/scriptsBootstrap/scriptsBootstrap.php');
        include('./components/footer/footer.php');
    ?>
      <title>Document</title>
      <meta charset="utf-8">
    <?php
        insertarLinksBootstrap();
    ?>
</head>
<body>

    <div>
        <?php
            crearCollapsedNavBar();
        ?>
    </div>

    <div class="galeria">
    <?php

        createCarousel();

    ?>
    </div>

    <div>
        <?php

            crearJumbotron();

        ?>
    </div>
    <h1>TESTIMONIOS</h1>
    <div class="d-flex flex-wrap justify-content-center" id="cartas">
        <?php
            createBasicCard('./media/testimonios/Testimonio1.jpg',
                            '"BanEmpleado me ayudó cuando más lo necesitaba, mi hija enfermó y necesitaba dinero de inmediato para sus
                            medicinas y gracias al sistema eficiente de BanEmpleado mi hija hoy se encuentra en excelente estado"',
                            '-Don José,Obrero');

            createBasicCard('./media/testimonios/Testimonio2.jpg',
            '"Un día me levanté dispuesto a cumplir mi sueño de viajar, de emprender mi camino y recorrer todos esos lugares
            que alguna vez quise visitar. BanEmpleado me ayudó. Hoy en día no puedo dejar de viajar."',
            '-Luis Alberto,Bloggero');

            createBasicCard('./media/testimonios/Testimonio3.jpg',
            '"Gracias a BanEmpleado pude terminar mis estudios mientras trabajaba. Cuando me las vi apretadas con la colegiatura, siempre pude
            contar con el apoyo de esta plataforma. No encuentro palabras para agradecerles tanto apoyo"',
            '-Valeria Sainz,Enfermera');

            createBasicCard('./media/testimonios/Testimonio4.jpg',
            '"Siempre que mis empleados necesitan un préstamos les recomiendo la plataforma de BanEmpleado pues con más de 5 años usándola
             siempre e visto buenas oportunidades. Sin duda una gran oportunidad."',
            '-Sofía Rodríguez,Arquitecta');
        ?>
    </div>
    <div>
        <?php
            crearFooter();
        ?>
    </div>


    <div>
        <?php
            includeScripts();
        ?>
    </div>
</body>
</html>