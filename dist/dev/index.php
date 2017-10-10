
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

        </header>
        <main>
            <?php require "site-parts/front-page/front-page.php"; ?>
        </main>
        <footer>
            <div class="credit">
    			<div class="icon-bar">
    				<a href="tel:+1-438-399-9544"><i class="fa fa-phone"></i></a>
    				<a href="mailto:info@artbox.agency"><i class="fa fa-envelope"></i></a>
    				<a target="_blank" href="https://www.facebook.com/artbox.agency"><i class="fa fa-facebook"></i></a>
    				<a target="_blank" href="https://twitter.com/artbox_agency"><i class="fa fa-twitter"></i></a>
    				<a target="_blank" href="https://www.linkedin.com/company/artbox-agency"><i class="fa fa-linkedin"></i></a>
    				<a target="_blank" href="https://www.instagram.com/artbox.agency/"><i class="fa fa-instagram"></i></a>
    				<a target="_blank" href="https://www.youtube.com/channel/UCSi3xMYsSHLd2KS6wUWql_g"><i class="fa fa-youtube"></i></a>
    			</div>
			    <p><?= $footer["copyright"][$locale] ?></p>

            </div>

        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/canvas.js"></script>
        <!-- Require for Canvas -->

    </body>
</html>
