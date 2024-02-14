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
<<<<<<< HEAD
            case "livredor?":
=======
        case "livredor?":
>>>>>>> 3028d34f35145ca968505484191a01226a7e2e7a
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