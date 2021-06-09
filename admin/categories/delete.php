<?php 
require_once'../include/db_config.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
     $sql = "DELETE FROM categories WHERE id = '$id'";
     $result = mysqli_query($db_connection,$sql);
     header('location:index.php');
    }else{

 }
?>