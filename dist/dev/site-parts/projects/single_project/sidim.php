<?php
require "../../../local-lang.php";
require "../../../dictionnaries.php";
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Artbox | <?= $general_infos["site_title"][$locale] ?></title>
        <!--  Render all header parts -->

        <!-- Style Sheet -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../assets/css/style.css">
    </head>
    <body class="single-project">

        <header>
            <div id="single-project-info">
                <h3><?= $sidim["complete_project"]["title"]["$locale"]  ?></h3>
                <p class="single-project-description"><?= $sidim["complete_project"]["description"][$locale];  ?></p>
            </div>
        </header>
        <main>
            <!-- Related with videos -->
            <div class="video-background">
                <div class="video-foreground">
                    <iframe src="https://www.youtube.com/embed/75G2mOL1bZ4?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=75G2mOL1bZ4" volume="0" frameborder="0" allowfullscreen></iframe>
                </div>
           </div>

           <div id="vidtop-content">
               <div class="vid-info">
                   <div id="project-infos-container">
                       <div class="project-infos left">
                           <h4>Mandat</h4>
                           <p class="project-infos-description">Attirer l’attention des passants au kiosque d’Électrimat du SIDIM</p>
                       </div>

                       <div class="project-infos right">
                           <h4>Déploiement</h4>
                           <p class="project-infos-description">Trois pistes musicales conçues sur mesure par l’artiste et jouées en direct du kiosque dans lesquelles chacune des notes jouées activent un des luminaires du kiosque. Une version automatique anime le kiosque entre les performances artistiques.</p>
                       </div>


                   </div>
               </div>
           </div>

           <!-- end of -->
        </main>
        <footer>


        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Require our JS from root -->
        <script type="text/javascript" src="../../../assets/js/main-ux-ui.js"></script>
        <script type="text/javascript" src="../../../assets/js/mobile-related.js"></script>
    </body>
</html>
