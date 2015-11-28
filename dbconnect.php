<?php
error_reporting(0);

define('DB_HOST', 'vasilis.pw');
define('DB_NAME', 'admin_watt');
define('DB_USERNAME', 'admin_watt');
define('DB_PASSWORD', 'uowm45');
try {
$odb = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
} 
catch(PDOException $e) 
{

 echo 'Cannot connect to database!';
}

?>
