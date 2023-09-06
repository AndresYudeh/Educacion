<?php 
// DB credentials.
define('DB_HOST','containers-us-west-75.railway.app');
define('DB_USER','root');
define('DB_PASS','qa9LFcXhrwKT8nPOKPiu');
define('DB_NAME','railway');
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