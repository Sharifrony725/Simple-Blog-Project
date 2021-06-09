<?php require_once'../include/header.php'; 
require_once'../include/db_config.php';
$sql = "SELECT * FROM categories";
$result = mysqli_query($db_connection,$sql);
?>
<a href="index.php" class="btn btn-success">Back</a>
<br><br>
<div class="modify">
<h2>Add New Post</h2>

<form method="POST" action="store.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
 </div>

  <div class="form-group">
    <label for="category">Category</label>
    <select name="category_id" class="form-control" id="">
    <option value="">Select Category</option>
    <?php  while($row =mysqli_fetch_assoc($result)){ ?>
    <option value="<?php echo $row['id']?>"><?php echo $row['title']?></option>
 <?php  } ?>
    </select>
 </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea rows="5" type="text" class="form-control" id="description" name="description" placeholder="Enter Description"></textarea>
 </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" id="image" name="image">
 </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" id="date" name="date" placeholder="Enter Date">
 </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php require_once'../include/footer.php'; ?>