<?php
// Open a Session
session_start();



// set locale with get parameter
$locale = $_GET["locale"];

// Check for empty local
if (!$locale) {
    // Set english by default
    $locale = "en";
}

// Permute session and locale
$_SESSION["lang"] = $locale;
$locale = $_SESSION["lang"];
