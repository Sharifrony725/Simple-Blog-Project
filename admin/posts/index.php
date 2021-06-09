<?php require_once'../include/header.php'; 
require_once'../include/db_config.php';
$sql = "SELECT * FROM post ORDER BY id DESC";
$result = mysqli_query($db_connection,$sql);

?>
<a href="create.php" class="btn btn-success">+ Add Post</a>
<br><br>
<div class="modify">
<h1>Post List</h1>
<table class="table table-bordered table-striped">
<thead class="bg-dark text-white">
    <th>ID</th>
    <th>Title</th>
    <th>Description</th>
    <th>Image</th>
    <th>Date</th>
    <th>Action</th>
</thead>
<?php
while($row = mysqli_fetch_assoc($result)){?>
<tbody>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['title'];?></td>
        <td><?php echo $row['description'];?></td>
        <td><img src="../<?php echo $row['image'];?>" width="50px" alt=""></td>
        <td><?php echo $row['date'];?></td>
        <td><a href="view.php?id=<?php echo $row['id'];?>" class="btn btn-info btn-sm">View</a><br><br> <a class="btn btn-info btn-sm" href="edit.php?id=<?php echo $row['id'];?>">Edit</a><br><br> <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are yur sure?')">Delete</a>
        </td>
    </tr>
</tbody>
<?php   }  ?>
</table>
</div>
<?php require_once'../include/footer.php'; ?>
