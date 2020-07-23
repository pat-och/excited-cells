Excited-cells
-------------

Un nombre de cellules sensibles sont ordonnées dans un cercle et chacune communique avec ses deux voisines. Dans la séquence de cellules, la première et la dernière sont voisins.

Une cellule peut avoir deux états : « excitée » ou « silencieuse ». Si une cellule est excitée, elle émet un signal reçu par les deux cellules voisines dans un délai très court. Chaque cellule est excitée seulement lorsqu’un signal est reçu depuis une des deux cellules voisines ; si la cellule reçoit un signal soudainement des deux côtés, ceux-ci seront annulés et la cellule ne s’excitera plus. Une cellule se désactive lorsqu’elle n’a plus de voisines actives.

Étant donné une configuration initiale de cellules excitées et silencieuses, déterminez la configuration après K étapes.

Input : - K entier, K > 0.

- tableau de nombres avec la configuration initiale (valeurs {0,1})

Output : tableau de nombres avec la configuration finale concaténée avec des virgules. 

Le code donné prend en entrée un fichier contenant les paramètres et renvoie les résultats comme dans le fichier de sortie.
Le résultat de sortie doit être affiché avec un caractère de retour à la ligne à la fin (cf le code donné).

Exemple :
Si K = 2 et la configuration initiale est 1,0,1,1 alors :
- la configuration après 1 étape sera : 1,0,1,0
- la configuration après 2 étapes sera : 0,0,0,0.

how to
------
1. Développement du module qui permet de gérer un seul envoi de signaux simultanés
2. Module qui permet de gérer plusieurs envois de signaux simultanés consécutifs

Stack
-----
Symfony 5

php 7.4

phpunit 9

Install
-------
git clone xxxxxxxxxxxxxxxxxxxxxxxxx
then run composer install

Test
-------------
Unit test acceptance oriented in /tests directory

run php bin/phpunit tests

