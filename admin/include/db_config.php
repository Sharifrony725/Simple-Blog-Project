<?php 
require_once'db_credential.php';
$db_connection = mysqli_connect($host,$user,$password,$db_name);
if (!$db_connection) {
  die("Connection failed: " . mysqli_connect_error());
}

?>