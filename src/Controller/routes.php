<?php
/*
Ce fichier va contenir l'ensemble des routes d'une application.
Ce fichier de routes est propre à chaque application créé grace a ce framework. 
Il est donc à compléter par chaque utilisateur du framework, en
fonction de l'arborescence et des fonctionnalités de son projet.
**/

const ROUTES = [
    'home' => [
        'controller' => App\Controller\MainController::class,
        'method' => 'home'
    ],
    'add' => [
        'controller' => App\Controller\UserController::class,
        'method' => 'add'
    ],
];
