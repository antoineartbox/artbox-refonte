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
                <h3><?= $colors["complete_project"]["title"]["$locale"]  ?></h3>
                <p class="single-project-description"><?= $colors["complete_project"]["description"][$locale];  ?></p>
            </div>
        </header>
        <main>
            <!-- Related with videos -->
            <div class="video-background">
                <div class="video-foreground">
                    <iframe src="https://www.youtube.com/embed/v0wAGVogAPE?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=v0wAGVogAPE" volume="0" frameborder="0" allowfullscreen></iframe>
                </div>
           </div>

           <div id="vidtop-content">
               <div class="vid-info">
                   <div id="project-infos-container">
                       <div class="project-infos left">
                           <h4>L'œuvre</h4>
                           <p class="project-infos-description">L'œuvre interactive prend la forme d'une projection géante mesurant 50 pieds par 30 pieds, où chaque pixel apparaît puis disparaît après 10 secondes de façon aléatoire, ou encore de façon contrôlée par les utilisateurs du site Web www.couleurs.io.   </p>
                       </div>

                       <div class="project-infos right">
                           <h4>Couleurs de la ville</h4>
                           <p class="project-infos-description">Par son nom et par l'éventail des couleurs que peuvent prendre les pixels, Couleurs représente non seulement le coté multiethnique de Longueuil, mais aussi la pluralité de sa population dans son ensemble.</p>
                       </div>
                       <div class="project-infos left">
                           <h4>Interactive</h4>
                           <p class"project-infos-description">L'interactivité de l'oeuvre démontre l'importance que la Ville porte à la transparence et à la concertation citoyenne, à l'engagement des citoyens et a leur participation active.</p>
                       </div>
                       <div class="project-infos right">
                           <h4>Moderne</h4>
                           <p class="project-infos-description">Par son nom et par l'éventail des couleurs que peuvent prendre les pixels, Couleurs représente non seulement le coté multiethnique de Longueuil, mais aussi la pluralité de sa population dans son ensemble.</p>
                       </div>

                       <div class="project-infos left">
                           <h4>Déploiment</h4>
                           <p class="project-infos-description">Projection interative du 11 au 16 juillet 2017 de 20h30 à 23h00 dans le câdre du Sommet des Arts et de la Musique de Longueuil.</p>
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

    </body>
</html>
