
<?php

// Init langage settings
require "local-lang.php";

// Require all dictionnaries
require "dictionnaries.php";


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Artbox | <?= $general_infos["site_title"][$locale] ?></title>
        <!--  Render all header parts -->
        <?php require "site-parts/head/head.php"; ?>

        <!-- Style Sheet -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <canvas></canvas>
        <header>

            <?php require "site-parts/header/header.php"; ?>
        </header>
        <main>
            <?php require "site-parts/front-page/front-page.php";?>
        </main>
        <footer>
            <?php require "site-parts/footer/footer.php" ?>

        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Require our Js -->
        <script type="text/javascript" src="assets/js/canvas.js"></script>
        <script type="text/javascript" src="assets/js/main-ux-ui.js"></script>

    </body>
</html>
