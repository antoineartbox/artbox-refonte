<div id="menu-container">
    <div class="menu-hamburger">
        <div class="slice1"></div>
        <div class="slice2"></div>
        <div class="slice3"></div>
    </div>
    <div id="menu" class="kill-menu-display">
        <span class="close-button">x</span>
        <nav>
            <div class="translation-box">

                <?php

                    if ($locale == "fr") {
                        echo "<a class='langage-selection-link' href='local-lang.php?locale=en&req-trans=y'><span class='lang'>en</span></a>";
                    } else {
                        echo "<a class'langage-selection-link' href='local-lang.php?locale=fr&req-trans=y'><span class='lang'>fr</span></a>";
                    }

                ?>
            </div>
            <ul>
                <?php foreach($menu["items"][$locale] as $menu_title => $link) {?>
                    <li><a href="<?= $link ?>"><?= $menu_title ?><div class="line-overlay"></div></a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div>
