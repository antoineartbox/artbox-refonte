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
                <h3><?= $bridge["complete_project"]["title"]["$locale"]  ?></h3>
                <p class="single-project-description"><?= $bridge["complete_project"]["description"][$locale];  ?></p>
            </div>
        </header>
        <main>
            <!-- Related with videos -->
            <div class="video-background">
                <div class="video-foreground">
                    <iframe src="https://www.youtube.com/embed/6W-3prvdDMI?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=6W-3prvdDMI" volume="0" frameborder="0" allowfullscreen></iframe>
                </div>
           </div>

           <div id="vidtop-content">
               <div class="vid-info">
                   <div id="project-infos-container">
                       <div class="project-infos left">
                           <h4>Mandat</h4>
                           <p class="project-infos-description">Faire découvrir de manière innovatrice et artistique un emblème montréalais aux clients du Renaissance Montréal Centre-Ville dans le cadre de leur Global Day of Discovery </p>
                       </div>

                       <div class="project-infos right">
                           <h4>Concept</h4>
                           <p class="project-infos-description">Deux DJs jouant en simultané depuis deux lieux différents : Chiino dans le lounge de l’hôtel et Rafa Pineda sur une terrasse montréalaise avec vue sur l’illumination du pont Jacques-Cartier.</p>
                       </div>
                       <div class="project-infos left">
                           <h4 class="exception deploy">Déploiement</h4>
                           <p class"project-infos-description">Un événement dans le lounge de l’hôtel Renaissance Montréal Centre-Ville de 20h à 23h le 17 mai 2017</p>
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
