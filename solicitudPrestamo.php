<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include('./components/navbar/collapseNavBar.php');
        include('./components/headContent/headContent.php');
        include('./components/scriptsBootstrap/scriptsBootstrap.php');
        include('./components/form/form.php');
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

    <div class = "container mb-5" id = "formContainer">
        <?php
            createForm();
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