<?php require_once'../include/header.php'; 
require_once'../include/db_config.php';
$id = $_GET['id'];

$sql = "SELECT post.*,categories.title as categoryTitle
    FROM post
    JOIN categories ON post.category_id = categories.id
    WHERE post.id = '$id'";

$result = mysqli_query($db_connection,$sql);
$data = mysqli_fetch_assoc($result);
?>
<a href="index.php" class="btn btn-success">Back</a>
<br><br>
<div class="modify">
<h2>View Post Table</h2>
<table class="table">
<tr>
    <th>Title :</th>
    <td><?php echo $data['title']?></td>
</tr>
<tr>
    <th>Category :</th>
    <td><?php echo $data['categoryTitle']?></td>
</tr>
<tr>
    <th>Description :</th>
    <td><?php echo $data['description']?></td>
</tr>
<tr>
    <th>Image :</th>
    <td><img src="../<?php echo $data['image']?>" width="100px" alt="" srcset=""></td>
</tr>
<tr>
    <th>Date :</th>
    <td><?php echo $data['date']?></td>
</tr>
</table>

</div>
<?php require_once'../include/footer.php'; ?>