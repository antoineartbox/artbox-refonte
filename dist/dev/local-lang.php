<?php
// Set langage
$locale = $_GET["locale"];

// Check for empty local
if (!$locale) {
    $locale = "en";
}
