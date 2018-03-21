<?php
#session => Création d'une session
// session_start();

# database => Défini les DB
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DBNAME', 'NOM_A_DEFINIR');

# autoloader => Relis les fichiers
require __DIR__.'/controllers/back_controller.php';
require __DIR__.'/controllers/front_controller.php';
require __DIR__ . '/models/perso_result_model.php';

# request => Requête serveur
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];