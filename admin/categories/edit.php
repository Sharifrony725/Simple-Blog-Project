<?php require_once'../include/header.php'; 
require_once'../include/db_config.php';
$id = $_GET['id'];
$sql = "SELECT * FROM categories WHERE id = '$id'";
$result = mysqli_query($db_connection,$sql);
$row = mysqli_fetch_assoc($result);
?>
 <a href="index.php" class="btn btn-success">Back</a>
<br><br>
<div class="modify">
<h2>Edit category</h2>

<form method="POST" action="update.php?id=<?php echo $row['id']?>">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" value="<?php echo $row['title'];?>" name="title" placeholder="Enter Title">
 </div>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>
<?php require_once'../include/footer.php'; ?>