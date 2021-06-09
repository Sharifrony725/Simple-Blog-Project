<?php require_once'../include/header.php'; 
require_once'../include/db_config.php';
$id = $_GET['id'];
$sql = "SELECT post.*,categories.title as categoryTitle
    FROM post
    JOIN categories ON post.category_id = categories.id
    WHERE post.id = '$id'";

$result = mysqli_query($db_connection,$sql);
$data = mysqli_fetch_assoc($result);
$sql = "SELECT * FROM categories";
$result = mysqli_query($db_connection,$sql);

?>
<a href="index.php" class="btn btn-success">Back</a>
<br><br>
<div class="modify">
<h2>Update Post</h2>

<form method="POST" action="update.php?id=<?php echo $id;?>" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="<?php echo $data['title'];?>">
 </div>

  <div class="form-group">
  
    <label for="category">Category</label>
    <select name="category_id" class="form-control" id="">
    <option value="">Select Category</option>
    <?php  while($row =mysqli_fetch_assoc($result)){ ?>

    <?php if($data['category_id'] == $row['id']){?>
    <option value="<?php echo $row['id']?>"selected><?php echo $row['title']?></option>
 <?php  }else{ ?>
 <option value="<?php $row['id']?>"><?php $row['title']?></option>
 <?php } ?>

 <?php  } ?>
    </select>
 </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea rows="5" type="text" class="form-control" id="description" name="description" placeholder="Enter Description"><?php echo $data['description']; ?></textarea>
 </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" id="image" name="image">
    <img src="../<?php echo $data['image']?>" width="150px" alt="">
 </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" id="date" name="date" placeholder="Enter Date" value="<?php echo $data['date'];?>">
 </div>

  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>
<?php require_once'../include/footer.php'; ?>