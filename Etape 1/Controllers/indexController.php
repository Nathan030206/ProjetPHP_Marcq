<?php

$uri = $_SERVER["REQUEST_URI"];
if ($uri === "/index.php" || $uri === "/") {
    $title = "Page d'accueil";
    $template = "Views/pageAccueil.php";
    require_once("Views/base.php");
}

?>
