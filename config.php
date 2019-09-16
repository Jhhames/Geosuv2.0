
<?php 
// Database Credentials
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','6953robotoAb*');
define('DB_NAME', 'Geosuv');

//Attempting to connect to Database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Checking Connection
if($link === false){
    die("ERROR: Could not connect to the database".mysqli_connect_error());
}
?>