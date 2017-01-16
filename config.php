
<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'Domisep');

$connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD);
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection,DB_DATABASE);
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}