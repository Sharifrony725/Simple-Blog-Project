<?php require_once'../include/header.php'; 
require_once'../include/db_config.php';
?>
<a href="index.php" class="btn btn-success">Back</a>
<br><br>
<div class="modify">
<h2>Add new category</h2>

<form method="POST" action="store.php">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
 </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<?php require_once'../include/footer.php'; ?>
