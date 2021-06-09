<?php require_once'../include/header.php'; 
require_once'../include/db_config.php';
 if(isset($_POST['submit'])){
     $title = $_POST['title'];
     $sql = "INSERT INTO categories (title) VALUES ('$title')";
     $result = mysqli_query($db_connection,$sql);
     header('location:index.php');

 }else{

 }
?>
<?php require_once'../include/footer.php'; ?>