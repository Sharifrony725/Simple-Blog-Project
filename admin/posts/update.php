<?php  
require_once'../include/db_config.php';
$id = $_GET['id'];
$sql = "SELECT post.*,categories.title as categoryTitle
    FROM post
    JOIN categories ON post.category_id = categories.id
    WHERE post.id = '$id'"; 
$result = mysqli_query($db_connection,$sql);
$data = mysqli_fetch_assoc($result);
$image = '';
$title = $_POST['title'];
    $description = $_POST['description'];
    $date = $_POST['date'];
    $category_id = $_POST['category_id'];
    $sql = "UPDATE post SET
     title='$title',
     description ='$description',
     date='$date',
     category_id='$category_id'";

    if(!empty($_FILES['image']['name'])){
        //upload image
        $rand = rand(11111,99999);
        $image = 'uploads/'. $rand. $_FILES['image']['name'];
        $upload = '../uploads/'.$rand .$_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],$upload);
        $sql .= ", image = '$image'";
        if(!empty($data['image']) && file_exists('../'.$data['image'])){
            unlink('../'.$data['image']);
        }
    }
    
      
      $sql .="WHERE id = '$id'";

    $result = mysqli_query($db_connection,$sql);
    if($result){
        header('location:index.php');
    }

?>