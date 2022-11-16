# définition MVC

*  Le modele MVC veut dire (Model view controller)

*  Model => S'occupe des échanges avec la bdd (Req SQL)
*  View => C'est ce qui sera affiché à l'user
*  Controller => S'occupe des échanges antre le model et la view

Le fichier index.php sera le seul fichier à la racine de mon site
Dans le dossier public je mets tout ce qui est public (CSS, JS, Image...)
Dans le dossier vendor je mets tout ce qui vient de librairie externes (Bootstrap, JQuery, etc...)

### A faire
1 - Créer une BDD tp_poo avec les tables :
    Table  membre(
            id => PK AI 5
            nom => VARCHAR 100
            prenom => VARCHAR 150
            tel => VARCHAR 10
            email => VARCHAR 150
    )

    Table  avis(
            id => PK AI 5
            message => text
            date_avis => DATETIME (CURRENT_TIME_STAMP)
            note => 1
    )


# STEP
## Faire ma connexion à la bdd

### Dans le Model

-   Créer un fichier Manager.php dans le Model
        A l'intérieur créer une classe Manager qui aura une méthode protected. Cette méthode fera la connexion à la bdd et retourner une propriété $bdd. Utiliser le try catch

-   Créer un fichier UserManager.php dans le model
        Ce fichier aura une classe UserManager qui hérite de la classe Manager.
        Une méthode public getUser() qui récupère tous les user de la bdd et retourne le résultat dans un attribut

### Dans le controller
-   Créer un fichier controller.php
        A l'intérieur créer une fonction home() qui instancie un UserManager et qui récupère tous les user de l'objet instancier dans une variable . puis fait appel au fichier userView.php

### Dans la view

-   Créer un fichier UserView.php qui va afficher la liste des utilisateurs


### Dans le fichier index.php

-   Faire appel à la fonction home()