Excited-cells
-------------

Un nombre de cellules sensibles sont ordonnées dans un cercle et chacune communique avec ses deux voisines. Dans la séquence de cellules, la première et la dernière sont voisins.

Une cellule peut avoir deux états : « excitée » ou « silencieuse ».


Si une cellule est excitée, elle émet un signal reçu par les deux cellules voisines dans un délai très court.


Chaque cellule est excitée seulement lorsqu’un signal est reçu depuis une des deux cellules voisines IO ou OI

si la cellule reçoit un signal soudainement des deux côtés, ceux-ci seront annulés et la cellule ne s’excitera plus. II

Une cellule se désactive lorsqu’elle n’a plus de voisines actives. 00


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

How to
------
* TDD Unit test acceptance oriented in `/tests directory` (Given/When/Then ou encore les 3 A: Arrange/Act/Assert)

* Hexagonal architecture. SOLID & Clean Code principle.

1. Développement du module qui permet de gérer un seul envoi de signaux simultanés = use case EmitCellsSignal
2. Module qui permet de gérer plusieurs envois de signaux simultanés consécutifs = use case SendMultipleSignalPackets
3. Mise en place de l'infrastructure = FileParameterRepository

Reste à faire
-------------
* tests d'intégration
* tests end to end
* refactorer vers des entités Cell et Parameter (Transformation Priority Premise)
* refactorer le retour du Use case SendMultipleSignalPackets qui ne devrait pas se préoccuper de la présentation (CQS)
* refactorer les tests afin que les méthode de test ne fassent que quelques lignes ( 3, 4 max si possible)


Stack
-----
Symfony 5.x

php 7.4

phpunit 9.x

Install
-------
`git clone "https://github.com/pat-och/excited-cells.git" tdd-demo`

`composer install`

Test
----
`php bin/phpunit tests`

Note: Lancer cette commande la première fois installe phpunit avant de lancer les tests.

Home Page
---------
l'affichage sur la homepage des données brutes et du résultat du traitement permet de montrer comment son controleur (qui est un adapter primaire en architecture hexagonale, tout comme les tests) devient un orchestrateur de la logique métier et de l'infrastucture associé.






