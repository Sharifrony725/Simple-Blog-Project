<?php require_once'../include/header.php'; 
require_once'../include/db_config.php';
$sql = "SELECT * FROM categories";
$result = mysqli_query($db_connection,$sql);
?>
<a href="create.php" class="btn btn-success">+ Add Category</a>
<br><br>
<div class="modify">
<h1>Category List</h1>
<table class="table table-bordered table-striped">
<thead class="bg-dark text-white">
    <th>ID</th>
    <th>Title</th>
    <th>Action</th>
</thead>
<?php
while($row = mysqli_fetch_assoc($result)){?>
<tbody>
    <tr>
        <td> <?php echo $row['id']; ?> </td>
        <td> <?php echo $row['title']; ?> </td>
        <td> <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-info">Edit</a> <a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are yur sure?')" class="btn btn-danger">Delete</a> </td>
        
    </tr>
</tbody>


<?php   }  ?>
</table>
</div>
<?php require_once'../include/footer.php'; ?>
