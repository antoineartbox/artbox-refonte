<div id="menu-container">
    <div class="menu-hamburger">
        <div class="slice1"></div>
        <div class="slice2"></div>
        <div class="slice3"></div>
    </div>
    <div id="menu" class="kill-menu-display">
        <span class="close-button">x</span>
        <nav>
            <ul>
                <?php foreach($menu["items"][$locale] as $menu_title => $link) {?>
                    <li><a href="<?= $link ?>"><?= $menu_title ?><div class="line-overlay"></div></a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</div>
