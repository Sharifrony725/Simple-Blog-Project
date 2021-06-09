<?php 
require_once'include/header.php'; 
require_once'admin/include/db_config.php';
$sql = "SELECT count(id) as total FROM post";
$result = mysqli_query($db_connection,$sql);
$data = mysqli_fetch_assoc($result);
$skip =0;
$take = 2;
$page = 1;
if(isset($_GET['page'])){
  $page = $_GET['page'];
//   echo $page;
//   exit;
  $skip = ($page - 1) * $take;
}
$totalPage = $data['total']/$take;

$sql = "SELECT * FROM  post ORDER BY id DESC LIMIT $skip , $take";
$result = mysqli_query($db_connection,$sql);

?>

    <div class="main-content">
        <div class="container">
            <div class="row clearfix">
            <div class="col-md-2"></div>
                <div class="col-md-8">
               <?php   while($row=mysqli_fetch_assoc($result)){?>

             
                    <div class="single-post">

                        <h2>
                        <a href="<?php echo $url; ?>/single.php?id=<?php echo $row['id'];?>">
                        <?php echo $row['title']; ?>
                        </a>
                        </h2>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="admin/<?php echo $row['image']; ?>" alt="">
                            </div>
                            <div class="col-md-9">
                               <?php echo substr($row['description'],0,200); ?>
                            </div>
                        </div>
                    </div>
                <?php    }?>
              <div style="margin-bottom: 15px;">
                Showing page <?php echo $page;?> of <?php echo $totalPage?>
              </div>   
                <div class="row clearfix">
                    <div class="col-md-3">
                    <?php if($page > 1){ ?>
                        <a href="<?php echo $url?>index.php?page=
                        <?php echo $page -1 ?>"> Previous </a>
                        <?php }?>
                    </div>
<div class="col-md-6 text-center">
<div class="pagination">
       <?php for($i=1; $i<=$totalPage; $i++){?>
<a href="<?php echo $url?>index.php?page=<?php echo $i;?>"> 
        <?php echo $i;?>
</a>
      <?php }?>
</div>
</div>
                    <div class="col-md-3">
                    <div class="text-right">
                      <?php if($totalPage > $page ){?>
                        <a href="<?php echo $url?>index.php?page=
                        <?php echo $page +1 ?>">Next</a>
                        <?php }?>
                       </div>
                    </div>
                </div>

                </div>

                
            </div>
        </div>
    </div>
    
<?php require_once'include/footer.php'; ?>

