<?php

/*
le code du routeur analysera le paramètre $_GET['page'] et déléguera le traitement à la bonne méthode de la bonne
classe grâce à notre fichier de configuration.
 */

//chargement des routes
require dirname(__DIR__) . '/config/routes.php';

$availableRouteNames = array_keys(ROUTES);

/*
    vérifie si un paramètre $_GET['page'] est bien présent dans l'URL 
    et si ce dernier est bien défini dans la liste des routes de l'utilisateur. 
    Si c'est le cas, on récupère les informations détaillées de la route en question (clés controller et method) 
    pour instancier le contrôleur concerné et appeler sur l'objet créé la méthode en question.
*/
/* if (isset($_GET['page']) && in_array($_GET['page'], $availableRouteNames)) {
    $route = ROUTES[$_GET['page']];
    $controller = new $route['controller'];
    $controller->{$route['method']}();
} */


//gestion de requette post
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    /* var_dump("POST ENTER");
    die(); */
    // Si la requête est une requête POST et que l'action est définie
    // Si la requête est une requête POST et que l'action est définie
    $action = $_POST['action'];
    var_dump($action);
    die();
    // Utiliser la valeur de l'action pour appeler la méthode appropriée
    if (isset(ROUTES[$action])) {
        $route = ROUTES[$action];
        $controller = new $route['controller'];
        $controller->{$route['method']}();
    } else {
        // Si l'action n'est pas reconnue, afficher une erreur 404
        http_response_code(404);
        echo 'Erreur 404 - Page non trouvée';
    }
}


// Vérifier si le paramètre 'page' est défini dans l'URL
if (isset($_GET['page'])) {
    // Si le paramètre 'page' est défini, continuer avec la logique de routage existante
    if (in_array($_GET['page'], $availableRouteNames)) {
        $route = ROUTES[$_GET['page']];
        $controller = new $route['controller'];
        $controller->{$route['method']}();
    } else {
        // Si la route n'existe pas, afficher une erreur 404
        http_response_code(404);
        echo 'Erreur 404 - Page non trouvée';
    }
} else if ($_SERVER['REQUEST_URI'] === '/') {
    // Si l'URL est vide, rediriger vers la page d'accueil
    $route = ROUTES['home'];
    $controller = new $route['controller'];
    $controller->{$route['method']}();
}