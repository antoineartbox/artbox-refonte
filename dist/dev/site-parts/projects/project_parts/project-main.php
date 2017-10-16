<div id="projects-container">
    <div class="projects-header-infos">
        <h2><?= $projects["main_page"]["title"][$locale] ?></h2>
    </div>
    <div id="all-projects-thumbnail-container">
        <!-- Render all project thumbnails refers to dictionnaries.php on root for array structure -->
        <?php foreach($projects["single_projects"] as $key => $project) { ?>
            <a class="thumbnail-link-wrapper" href="<?=  $project["thumbnail"]["more-infos-link"][$locale]; ?>">
                <div class="single-project-thumbnail-container">
                <img class="thumbnail-image" src="<?= $project['thumbnail']['thumbnail-image-url'][$locale] ?>" alt="">
                <div class="project-infos">
                    <h4 class="project-title"><?= $project["thumbnail"]["title"][$locale]; ?></h4>
                </div>
            </a>
            </div>
        <?php } ?>
    </div>

</div>
