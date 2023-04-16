<?php

/**Ce gestionnaire global implémentera des méthodes de référence qui seront ensuite partagées via une relation d'héritage.
 * Il s'agit de l'unique classe qui interagira directement avec la Base De données.
 *  */

namespace Pixab\Manager;


require dirname(__DIR__, 2) . '/config/database.php';

/**
 * Cette classe est déclarée comme abstract: nous ne pourrons pas l'instancier.
 * Son rôle sera de partager des propriétés / méthodes aux classes qui en hériteront.
 */
abstract class AbstractManager
{
    /** méthode de connexio a la base de données */
    private function connect(): \PDO
    {
        $db = new \PDO(
            "mysql:host=" . DB_INFOS['host'] . ";port=" . DB_INFOS['port'] . ";dbname=" . DB_INFOS['dbname'],
            DB_INFOS['username'],
            DB_INFOS['password']
        );

        //'afficher les potentielles erreurs de requêtes SQL
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        //prévenir d'éventuels problèmes d'encodage de certains caractères spéciaux.
        $db->exec("SET NAMES utf8");
        return $db;
    }

    /** 
     * Méthode pour executer exécuter nos requêtes SQL. 
     */
    private function executeQuery(string $query, array $params = []): \PDOStatement
    {
        $db = $this->connect();
        $stmt = $db->prepare($query);
        foreach ($params as $key => $param) $stmt->bindValue($key, $param);
        $stmt->execute();
        return $stmt;
    }

    /**
     * Méthode pour convertir le namespace d'une entité en nom de table en BD
     */
    private function classToTable(string $class): string
    {
        $tmp = explode('\\', $class);
        return strtolower(end($tmp));
    }

    /**
     * Lecture d'une ressource dans la BD
     */
    protected function readOne(string $class, array $filters): mixed
    {
        $query = 'SELECT * FROM ' . $this->classToTable($class) . ' WHERE ';
        foreach (array_keys($filters) as $filter) {
            $query .= $filter . " = :" . $filter;
            if ($filter != array_key_last($filters)) $query .= 'AND ';
        }
        $stmt = $this->executeQuery($query, $filters);

        //mapper les données récupérées au sein de l'entité spécifiée par le paramètre $clas
        $stmt->setFetchMode(\PDO::FETCH_CLASS, $class);

        return $stmt->fetch();
    }

    /**
     * Recuperation de dédiée à la récupération de plusieurs ressources.
     */
    protected function readMany(string $class, array $filters = [], array $order = [], int $limit = null, int $offset = null): mixed
    {
        $query = 'SELECT * FROM ' . $this->classToTable($class);
        if (!empty($filters)) {
            $query .= ' WHERE ';
            foreach (array_keys($filters) as $filter) {
                $query .= $filter . " = :" . $filter;
                if ($filter != array_key_last($filters)) $query .= 'AND ';
            }
        }
        if (!empty($order)) {
            $query .= ' ORDER BY ';
            foreach ($order as $key => $val) {
                $query .= $key . ' ' . $val;
                if ($key != array_key_last($order)) $query .= ', ';
            }
        }
        if (isset($limit)) {
            $query .= ' LIMIT ' . $limit;
            if (isset($offset)) {
                $query .= ' OFFSET ' . $offset;
            }
        }
        var_dump($query);
        $stmt = $this->executeQuery($query, $filters);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }

    /**
     * l'enregistrement d'une ressource au sein d'une table.
     * */
    protected function create(string $class, array $fields): \PDOStatement
    {
        $query = "INSERT INTO " . $this->classToTable($class) . " (";
        foreach (array_keys($fields) as $field) {
            $query .= $field;
            if ($field != array_key_last($fields)) $query .= ', ';
        }
        $query .= ') VALUES (';
        foreach (array_keys($fields) as $field) {
            $query .= ':' . $field;
            if ($field != array_key_last($fields)) $query .= ', ';
        }
        $query .= ')';
        return $this->executeQuery($query, $fields);
    }

    /**
     * Modification d'une ressource dans la BD
     */
    protected function update(string $class, array $fields, int $id): \PDOStatement
    {
        $query = "UPDATE " . $this->classToTable($class) . " SET ";
        foreach (array_keys($fields) as $field) {
            $query .= $field . " = :" . $field;
            if ($field != array_key_last($fields)) $query .= ', ';
        }
        $query .= ' WHERE id = :id';
        $fields['id'] = $id;
        return $this->executeQuery($query, $fields);
    }

    /** 
     * suppression d'une ressource au sein d'une table.
     */
    protected function delete(string $class, int $id): \PDOStatement
    {
        $query = "DELETE FROM " . $this->classToTable($class) . " WHERE id = :id";
        return $this->executeQuery($query, ['id' => $id]);
    }
}
