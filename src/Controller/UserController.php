<?php

namespace App\Controller;

use App\Entity\User;
use App\Manager\UserManager;
use App\Manager\Auth;
use Pixab\Controller\AbstractController;

/** Controlleur applicatif: création par l'utilisateur du framework */
class UserController extends AbstractController
{
    public function index()
    {
        $userManager = new UserManager();
        return $this->renderView('user/index.php', [
            'users' => $userManager->findAll()
        ]);
    }

    public function profile()
    {
        $user = [];
        return $this->renderView('user/index.php', [
            'users' => $user
        ]);
    }

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

            // Récupérer l'utilisateur nouvellement créé depuis la base de données
            $newUser = $userManager->getUserByUsername($user->getUsername());

            // Stocker les informations de l'utilisateur dans la session
            session_start();
            $_SESSION['user_id'] = $newUser->getId();
            $_SESSION['username'] = $newUser->getUsername();
            $_SESSION['email'] = $newUser->getEmail();

            // Exemple de définition des variables de session pour un message de succès après une inscription réussie
            $_SESSION['message'] = 'Inscription réussie ! Bienvenue sur notre site.';
            $_SESSION['type'] = 'success';


            // Rediriger vers la page d'accueil ou une autre page appropriée
            return $this->redirectToRoute('home');
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
                var_dump('Nom d\'utilisateur vide');
                die();
            }

            // Valider le mot de passe
            if (empty($password)) {
                // Mot de passe vide, afficher une erreur ou rediriger avec un message d'erreur
                var_dump('mot de passe vide');
                die();
            }

            // Vérifier si l'utilisateur existe dans la base de données
            $user = $userManager->getUserByUsername($username);
            if ($user && password_verify($password, $user->getPassword())) {
                // Mot de passe correct, connecter l'utilisateur et rediriger vers la page d'accueil ou une autre page
                // Exemple : $this->setLoggedIn(true); return $this->redirectToRoute('home');
                session_start();

                $_SESSION['user_id'] = $user->getId();
                $_SESSION['username'] = $user->getUsername();
                $_SESSION['email'] = $user->getEmail();

                // Exemple de définition des variables de session pour un message de succès après une inscription réussie
                $_SESSION['message'] = 'Connexion réussie ! Bienvenue sur notre site.';
                $_SESSION['type'] = 'success';


                //Auth ok: Rediriger vers la page d'accueil ou une autre page appropriée
                /* var_dump($_SESSION['username']);
                die(); */
                return $this->redirectToRoute('home');
            } else {
                // Nom d'utilisateur ou mot de passe incorrect, afficher une erreur ou rediriger avec un message d'erreur
                // Exemple : return $this->redirectToRoute('login', ['error' => 'Nom d\'utilisateur ou mot de passe incorrect']);
                var_dump('Nom d\'utilisateur ou mot de passe incorrect. retourner et réessayer');
                die();
            }
        }

        return $this->renderView('main/home.php');
    }

    // Méthode pour déconnecter l'utilisateur
    public function logout()
    {
        // Détruire la session
        session_start();
        session_destroy();

        $_SESSION['message'] = "Deconnexion ok";

        /* var_dump($_SESSION['username']);
        die(); */

        return $this->redirectToRoute('home');
    }
}
