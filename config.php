<?php
define('DB_NAME', 'Property');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

$connect = mysqli_connect(DB_NAME, DB_HOST, DB_USER, DB_PASSWORD);

if(mysqli_connect_errno()){
  echo "Failed to connect to database " .mysqli_connect_error(); 
}
else{
  echo "connection successful";
}
?>
