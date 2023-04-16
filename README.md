# Pixab

Un Framework PHP 100% orienté Objet

##Demarrer le serveur en ligne de commande:
php -S localhost:8000 -t public

##layout.php
Le layout va contenir le squelette commun à l'ensemble des pages web. Il contient les balises de premier niveau (html, head et body).

##Les entités
Chaque entité créée se verra accompagnée d'un gestionnaire, nommé EntityManager. Ces gestionnaires d'entité seront en charge d'implémenter les méthodes permettant de manipuler l'entité à laquelle ils sont rattachés.
