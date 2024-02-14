# group2TI2exemple

Préparation de la partie GIT, Structure de site (MVC),  PHP - SQL

## GIT

Créez un `fork` du projet original.

Travaillez sur ce fork.

Faites des `commits` régulièrement, à chaque étape.

Importez la base de données `data/group2TI2exemple.sql` dans votre base de données `MariaDB`.

N'oubliez pas de copier `config.php.ini` sous le nom de `config.php`.

Le pull request se fera en fin de TI vers l'`upstream`, qui est donc le projet original.

## Structure MVC

![Modèle MVC PHP](https://github.com/WebDevCF2m2022/MVC-projets/raw/main/data/MVC.png)

- /public/
    - /public/index.php // front controller
    - /public/css/...
    - /public/js/...
    - /public/img/...
- /controller/ -> fichiers de contrôle
- /view/ -> fichiers de templates
- /model/ -> fichiers contenant des fonctions liés aux données