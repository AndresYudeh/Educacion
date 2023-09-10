<?php

define('DB_HOST', 'beduca.mysql.database.azure.com');
define('DB_USER', 'Andres');
define('DB_PASS', 'A11224477a');
define('DB_NAME', 'eduauth');

// Ruta al certificado SSL .pem
$sslCertPath = "pem/DigiCertGlobalRootCA.crt.pem";

try {
    $dbh = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::MYSQL_ATTR_SSL_CA => $sslCertPath, // Especifica la ubicación del certificado SSL
            // PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false, // Opcional: Desactiva la verificación del certificado del servidor (seguridad reducida)
        )
    );
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
  