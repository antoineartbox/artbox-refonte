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
                <h3><?= $surveillance["complete_project"]["title"]["$locale"]  ?></h3>
                <p class="single-project-description"><?= $surveillance["complete_project"]["description"][$locale];  ?></p>
            </div>
        </header>
        <main>
            <!-- Related with videos -->
            <div class="video-background">
                <div class="video-foreground">
                    <iframe src="https://www.youtube.com/embed/9PBQfVsKXBk?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&playlist=9PBQfVsKXBk" volume="0" frameborder="0" allowfullscreen></iframe>
                </div>
           </div>

           <div id="vidtop-content">
               <div class="vid-info">
                   <div id="project-infos-container">
                       <div class="project-infos left">
                           <h4>Mandat</h4>
                           <p class="project-infos-description">Rendre l’offre des Nuits Blanches encore plus attrayante et offrir un contenu événementiel inédit, afin de générer des retombées médiatiques.</p>
                       </div>

                       <div class="project-infos right">
                           <h4>Concept</h4>
                           <p class="project-infos-description">Surveillance réunit art et sport en une même expérience : lorsque les participants skient sur la piste Candiac, leur mouvement est détecté à l’aide d’un système de caméras lié à des projecteurs situés au sommet des poteaux de lumière. Les projecteurs suivent ainsi les skieurs tout au long de leur descente et change de couleur lorsqu’ils sont détectés.</p>
                       </div>

                       <div class="project-infos left">
                           <h4 class="exception deploy">Déploiement</h4>
                           <p class="project-infos-description">Au total, cinq projecteurs robotisés animent la piste sur une étendue de 500 pieds. L’installation prend place sur la piste Candiac du Versant du Village de 19 h à 23 h durant les Nuits Blanches de la saison 2016-2017 : 26 décembre 2016, 7 et 21 janvier, 4, 18 et 25 février, 4 et 18 mars 2017.</p>
                       </div>
                       <div class="project-infos right">
                           <h4>Résultats</h4>
                           <p class="project-infos-description">32 retombées médiatiques incluant une entrevue à l’émission Salut Bonjour!, une mention dans le magazine 7 jours,un reportage en direct à Radio-Canada, etc., avec un gain de réputation d’une valeur de 68 236 $ et un écart favorable de 97%</p>
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
