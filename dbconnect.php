<?php
error_reporting(-1);

define('DB_HOST', 'vasilis.pw');
define('DB_NAME', '');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
try {
$odb = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
} 
catch(PDOException $e) 
{

 echo 'Cannot connect to database!';
}

?>
