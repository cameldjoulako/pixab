<?php

/**
 * Classe pour implémenter les méthodes permettant de manipuler l'entité
 * */

namespace App\Manager;


use Pixab\Manager\AbstractManager;
use App\Entity\User;

class UserManager extends AbstractManager
{

    public function find(int $id)
    {
        return $this->readOne(User::class, ['id' => $id]);
    }

    /**
     * Récupération d'une ressource spécifique répondant à un ou plusieurs critères
     */
    public function findOneBy(array $filters)
    {
        return $this->readOne(User::class, $filters);
    }

    /**
     * Récupération de toutes les ressources
     */
    public function findAll()
    {
        return $this->readMany(User::class);
    }

    /**
     * récupération de toutes les ressources répondant à un ou plusieurs critères
     */
    public function findBy(array $filters, array $order = [], int $limit = null, int $offset = null)
    {
        return $this->readMany(User::class, $filters, $order, $limit, $offset);
    }

    public function getUserByUsername($username)
    {
        $filters = array('username' => $username);
        return $this->findOneBy($filters);
    }


    /**
     * Insertion d'une ressource pour une entité donnée
     */

    public function add(User $user)
    {
        return $this->create(
            User::class,
            [
                'email' => $user->getEmail(),
                'username' => $user->getUsername(),
                'password' => password_hash($user->getPassword(), PASSWORD_DEFAULT)
            ]
        );
    }

    /**
     * Modification d'une ressource pour une entité donnée
     */
    public function edit(User $user)
    {
        return $this->update(
            User::class,
            [
                'email' => $user->getEmail(),
                'username' => $user->getUsername(),
                'password' => $user->getPassword()
            ],
            $user->getId()
        );
    }

    /**
     * Suppression d'une ressource pour une entité donnée
     */
    public function remove(User $user)
    {
        return $this->delete(User::class, $user->getId());
    }
}
