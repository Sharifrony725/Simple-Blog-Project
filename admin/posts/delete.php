<?php 
require_once'../include/db_config.php';
    //if(isset($_GET['id'])){
     $id = $_GET['id'];
     $sql = "SELECT * FROM post WHERE id = '$id'";
     $result = mysqli_query($db_connection,$sql);
     $data = mysqli_fetch_assoc($result);
    //  print_r($data);
    //  exit;
     $img_location ='../'.$data['image'];
     if(file_exists($img_location)){
         unlink($img_location);
     }
     $sql = "DELETE FROM post WHERE id = '$id'";
     $result = mysqli_query($db_connection,$sql);
     if($result){
     header('location:index.php');
    }
//     else{

//  }
?>