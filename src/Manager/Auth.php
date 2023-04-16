<?php

namespace App\Manager;

use App\Entity\User;

// Classe d'authentification
class Auth
{
    private $userManager;

    public function __construct(UserManager $userManager)
    {
        $this->userManager = $userManager;
    }

    // Méthode pour vérifier les informations d'authentification
    public function login($username, $password)
    {
        // Vérifier si l'utilisateur existe dans la base de données
        $user = $this->userManager->getUserByUsername($username);
        if ($user && password_verify($password, $user->getPassword())) {
            // Authentification réussie
            // Créer une session pour l'utilisateur
            //session_start();
            $_SESSION['user_id'] = $user->getId();
            return true;
        }
        return false;
    }

    // Méthode pour vérifier si l'utilisateur est connecté
    public function isLoggedIn()
    {
        return isset($_SESSION['user_id']);
    }

    // Méthode pour déconnecter l'utilisateur
    public function logout()
    {
        // Détruire la session
        session_start();
        session_destroy();
    }
}
