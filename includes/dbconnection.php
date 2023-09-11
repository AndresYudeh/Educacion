<?php

define('DB_HOST', 'beduca.mysql.database.azure.com');
define('DB_USER', 'Andres');
define('DB_PASS', 'A11224477a');
define('DB_NAME', 'eduauth3');

error_reporting(E_ALL);
ini_set('display_errors', '1');
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','eduauth2');

// Ruta al certificado SSL .pem
$sslCertPath = "pem/DigiCertGlobalRootCA.crt.pem";

try {
    $dbh = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::MYSQL_ATTR_SSL_CA => $sslCertPath)
    );
} catch (PDOException $e) {
    error_log("Error de base de datos: " . $e->getMessage());
}
?>
  