<?php
/*
Front Controller
*/

/*
* Chargement des dépendances
*/
// chargement de configuration
require_once "../config.php";

/*
Routeur vers nos 4 pages --> $route
*/
require_once "../controller/routerController.php";

/* Appel de la vue
*/
include_once "../view/$route";
