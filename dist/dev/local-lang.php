<?php
// Open a Session
session_start();

// Set default session locale value to english
if(!isset($_SESSION["locale"])) {
    $locale = "en";

}

// Check if a translation is request through URL
if ($_GET["locale"]) {

    // Set Locale and $_SESSION["locale"] to _GET["lang"]
    $locale = $_GET["locale"];
    $_SESSION["locale"] = $_GET["locale"];

}

/*
    Every translation file is accessible through the local variable
        $somepage["some_content"][$locale] = "Some text";

    We access values like this so this way we can treat loale and session as two different entities

*/

$locale = $_SESSION["locale"];


// Then process to redirection
if ($_GET["req-trans"] == "y") {

     header('Location: index.php');
     exit();

}
