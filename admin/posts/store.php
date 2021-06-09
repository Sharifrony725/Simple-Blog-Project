<?php 
require_once'../include/db_config.php';
if(isset($_POST['submit']))
{
$title = $_POST['title'];
$description = $_POST['description'];
$rand = rand(11111,99999);
$image = 'uploads/'. $rand. $_FILES['image']['name'];
$upload = '../uploads/'.$rand .$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],$upload);
$date = $_POST['date'];
$category_id = $_POST['category_id'];
$sql = "INSERT INTO post (title,category_id,description,image,date) VALUES ('$title','$category_id','$description','$image','$date')";
$result = mysqli_query($db_connection,$sql);
if($result){
    header('location:index.php');
}
}
?>