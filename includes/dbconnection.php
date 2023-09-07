<?php 
// DB credentials.
define('DB_HOST','beduca.mysql.database.azure.com');
define('DB_USER','Andres');
define('DB_PASS','A11224477a');
define('DB_NAME','eduauth');
ssl-mode=require
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?><!--  Orginal Author Name: CompuBinario K. 
 for any PHP, Codeignitor, Laravel OR Python work contact me at CompuBinario.infospace@gmail.com  
 Visit website : www.CompuBinariok.com -->   