<?php
/*
Notre router
*/
// s'il existe la variable get section
if (isset($_GET['section'])) {
    // on compare la valeur de section et on crée la route
    switch ($_GET['section']) {
        case "travaux":
            $route = "travaux.html.php";
            break;
        case "contact":
            $route = "contact.html.php";
            break;
        case "livredor":
            // on charge le contrôleur de gestion du livre d'or
            require "livredorController.php";
            $route = "livredor.html.php";
            break;
        default:
            $route = "error404.html.php";
    }
} else {
    $route = "homepage.html.php";
}