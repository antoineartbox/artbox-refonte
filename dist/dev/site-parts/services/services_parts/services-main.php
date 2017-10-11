
<div id="services-container">
    <div class="services-header-infos">
        <h2><?= $services["title"][$locale] ?></h2>
    </div>
    <div class="services-infos-container">
        <div class="services-infos services-infos-sections1">
            <p><?= $services["text_section1"][$locale] ?></p>
        </div>
        <div class="services-infos services-infos-sections2">
            <p><?= $services["text_section2"][$locale] ?></p>
        </div>

        <div class="infos-box-container">
            <?php $counter = 2; ?>
            <?php foreach($services["services_box"][$locale] as $box => $word ) {?>
                <div class="word-container">
                    <h3><?= $word ?></h3>
                </div>
                <?php if ($counter == 2) {
                    echo "<span class='sign'>+</span>";
                } else if($counter == 3) {
                    echo "<span class='sign'>=</span>";
                }
                $counter++; ?>
            <?php } ?>

        </div>

        <div class=" services-infos services-infos-sections3">
            <p><?= $services["text_section3"][$locale] ?></p>
        </div>
        <div class=" services-infos services-infos-sections3">
            <p><?= $services["text_section4"][$locale] ?></p>
        </div>
    </div>

</div>
