<?php
$srcPath = "./src/";
$menu = file($srcPath . "main_menu.txt", FILE_IGNORE_NEW_LINES);
?>

<!-- <ul style="position: relative;">
    <?php
    foreach ($menu as $i) {
        list($text, $link) = explode(",", $i);
    ?>
        <li><a href="<?= $link ?>" class="font-content"><?= $text ?></a></li>
    <?php
    }
    ?>

</ul> -->

<ul style="position: relative;">
    <li><a href="#hero-image" class="font-content">Home</a></li>
    <li><a href="#tiner" class="font-content">Shop</a></li>
    <li><a href="#babout" class="font-content">About us</a></li>
    <li><a href="#head-contact" class="font-content">Contact</a></li>
    <li><a href="#ztestimonial" class="font-content">Reviews</a></li>
</ul>