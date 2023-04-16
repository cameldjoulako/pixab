<?php

namespace App\Controller;

use Pixab\Controller\AbstractController;

/** Controlleur applicatif: pour laccueil */
class MainController extends AbstractController
{
    /**Méthode chargée d'afficher la page d'accueil du site via la méthode renderView() */
    public function home()
    {
        //je retourner la page templates/main/home.php en lui transmettant dans une variable le titre de la page.
        return $this->renderView('main/home.php', ['title' => 'Accueil']);
    }

    /**Méthode simulant une redirection apres inscription. */
    public function register()
    {
        //ici traiter la soumission d'un formulaire 

        return $this->redirectToRoute('profil', ['state' => 'success']);
    }
}
