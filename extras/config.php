<?php 
define('DB_HOST', 'localhost');
define('DB_NAME', 'fcgs');
define('DB_USER', 'saim.trq');
define('DB_PASS', '123456');

function getConnexion()
{
    static $db = null;
    if ($db === null) {
        try {
            $connectionString = 'mysql:host=' .  DB_HOST . ';dbname=' . DB_NAME . '';
            $db = new PDO($connectionString, DB_USER, DB_PASS, array('charset' => 'utf8'));
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Erreur  : ' . $e->getMessage());
        }
    }
    return $db;
}
