<?php

namespace App\Controller;

use App\Entity\User;
use App\Manager\UserManager;
use Pixab\Controller\AbstractController;

/** Controlleur applicatif: création par l'utilisateur du framework */
class AuthController extends AbstractController
{


    //insertion d'un utilisateur
    public function add()
    {
        if (!empty($_POST)) {
            $user = new User();
            $userManager = new UserManager();

            $user->setEmail($_POST['email']);
            $user->setUsername($_POST['username']);
            $user->setPassword($_POST['password']);

            $userManager->add($user);

            return $this->redirectToRoute('user_index');
        }

        return $this->renderView('user/add.php');
    }



    public function login()
    {
        if (!empty($_POST)) {
            $userManager = new UserManager();
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Valider le nom d'utilisateur
            if (empty($username)) {
                // Nom d'utilisateur vide, afficher une erreur ou rediriger avec un message d'erreur
                // Exemple : return $this->redirectToRoute('login', ['error' => 'Nom d\'utilisateur requis']);
            }

            // Valider le mot de passe
            if (empty($password)) {
                // Mot de passe vide, afficher une erreur ou rediriger avec un message d'erreur
                // Exemple : return $this->redirectToRoute('login', ['error' => 'Mot de passe requis']);
            }

            // Vérifier si l'utilisateur existe dans la base de données
            $user = $userManager->getUserByUsername($username);
            if ($user && password_verify($password, $user->getPassword())) {
                // Mot de passe correct, connecter l'utilisateur et rediriger vers la page d'accueil ou une autre page
                // Exemple : $this->setLoggedIn(true); return $this->redirectToRoute('home');
            } else {
                // Nom d'utilisateur ou mot de passe incorrect, afficher une erreur ou rediriger avec un message d'erreur
                // Exemple : return $this->redirectToRoute('login', ['error' => 'Nom d\'utilisateur ou mot de passe incorrect']);
            }
        }

        return $this->renderView('user/login.php');
    }
}
