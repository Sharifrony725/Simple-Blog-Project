<?php 
require_once'include/header.php'; 
require_once'admin/include/db_config.php';
if(!$_GET['id']){
header('location:index.php');
}
$id = $_GET['id'];
$sql = "SELECT post.*,categories.title as categoryTitle
    FROM post
    JOIN categories ON post.category_id = categories.id
    WHERE post.id = '$id'";

$result = mysqli_query($db_connection,$sql);
$data = mysqli_fetch_assoc($result);
?>

    <div class="main-content">
        <div class="container">
            <div class="row clearfix">
            <div class="col-md-2"></div>
                <div class="col-md-8">

             
                    <div class="single-post">
                        <h1><?php echo $data['title']?></h1>
                        <div class="row">
                            <div class="col-md-12">
                                <img src="admin/<?php echo $data['image']; ?>" alt="">
                            </div>
                            <div class="col-md-12">
                               <?php echo $data['description']; ?>
                            </div>
                        </div>
                    </div>

             
               
             

                </div>

                
            </div>
        </div>
    </div>
    
<?php require_once'include/footer.php'; ?>

