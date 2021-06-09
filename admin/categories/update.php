<?php  
require_once'../include/db_config.php';
 if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $id = $_GET['id'];
  
  
     $sql = "UPDATE categories SET title='$title' WHERE id = '$id'";
     $result = mysqli_query($db_connection,$sql);
     header('location:index.php');

 }else{

 }
?>
