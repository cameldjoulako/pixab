<?php

namespace Pixab\Controller;

/** Le rôle de ce contrôleur particulier va être d'implémenter 2 méthodes génériques de notre framework
 *  pour retourner une page HTML et effectuer des redirections.*/
abstract class AbstractController
{
    /**le rôle sera de retourner une page HTML */
    protected function renderView(string $template, array $data = []): string
    {
        $templatePath = dirname(__DIR__, 2) . '/templates/' . $template;
        /* var_dump(dirname(__DIR__, 2));
        die(); */
        return require_once dirname(__DIR__, 2) . '/templates/layout.php';
    }

    /**le rôle sera d'effectuer des redirections. */
    protected function redirectToRoute(string $name, array $params = []): void
    {
        $uri = $_SERVER['SCRIPT_NAME'] . "?page=" . $name;

        if (!empty($params)) {
            $strParams = [];
            foreach ($params as $key => $val) {
                array_push($strParams, urlencode((string) $key) . '=' . urlencode((string) $val));
            }
            $uri .= '&' . implode('&', $strParams);
        }

        header("Location: " . $uri);
        die();
    }
}
