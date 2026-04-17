<!-- inclusion des variables et fonctions -->
<?php
session_start();
require_once(__DIR__ . '/../config/mysql.php');
require_once(__DIR__ . '/../databaseconnect.php');
require_once(__DIR__ . '/../variables.php');
require_once(__DIR__ . '/../functions.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index.php tests - Site de recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <!-- L'en-tête -->
        <header>
            <!-- Le menu -->
            <!-- inclusion de l'entête du site -->
            <?php require_once(__DIR__ . '/../header.php'); ?>
        </header>

    <h4>Ligne à changer pour release en ligne dans /C/xampp/php/php.ini :</h4>
    <p>
        ligne <strong>489 : error_reporting=E_ALL -> E_ALL & ~E_DEPRECATED & ~E_STRICT</strong> (production value)<br />
        Cette ligne a été écrite entièrement en HTML.<br />
        <?php echo("Celle-ci a été écrite entièrement en PHP."); ?><br />
        Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.<br />
        <strong>php -S localhost:8080</strong> pour lancer le serveur de développement intégré de PHP.
        Pour conserver des fichiers téléversés, il faut vérifiez les droits d'écrire des fichiers dans le dossier
        <strong>uploads d'abord (chmod 733).</strong>
    </p>
    <ul>
        <?php for ($lines = 0; $lines <= 1; $lines++): ?>
        <li><?php 
                    // Déclaration du tableau des recettes
                    $recipes = [
                    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
                    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
                    ];
                    echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'; ?>
        </li>
        <?php endfor; ?>
    </ul>
    <?php require_once(__DIR__ . '/../includes/page3.html'); ?>
    <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql"
        target="_blank">Cours OpenClassRooms : Concevez votre site web avec PHP et MySQL</a>
    </div>

    <!-- inclusion du bas de page du site -->
    <?php require_once(__DIR__ . '/../footer.php'); ?>
</body>

</html>

