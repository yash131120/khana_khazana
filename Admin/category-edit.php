<?php
include ('authentication.php');
include ('includes/Header.php');
include ('includes/top-bar.php');
include ('includes/side-bar.php');
include('config/dbcon.php');
?>

<div class="context-wrapper">

<section class="context mt-6">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card text-center">
                <div class="card-header">
                    <h4 class="text-center">
                        Food category - Edit
                       
                    </h4>
                </div>
               <div class="card-body">
                   <form action="code.php" method="POST">
                      <?php
                         if(isset($_GET['id']))
                         {
                            $cate_id = $_GET['id'];
                            $query = "SELECT * FROM categories WHERE id='$cate_id'";
                            $query_run = mysqli_query($con, $query);

                            foreach($query_run as $item) :
                            ?>
                            <input type="hidden" name="cate_id" value="<?=$item['id']; ?>">
                            <div class="modal-body">
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <input type="text" name="name" value="<?= $item ['name']; ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description"  class="form-control" required rows="3"><?= $item ['description']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="Img" class="form-control" >
                                <input type="hidden" name="old_image" value="<?=$item['Img']?>">

                            </div>
                          
                            <img src="img/<?=$item['Img']?>" width="50px" height="50px"  alt="">
                            </div>
                            <div class="modal-footer">
                            <a href="category.php" class="btn btn-danger float-right">Back</a>
                            <button type="submit" name="category_update" class="btn btn-primary">Update </button>
                            </div>
                            <?php
                            endforeach;
                            }
                            else
                            {
                                echo "No Id Found";
                            }
                      ?>
                   </form>
              </div>
            </div>
        </div>
    </div>
  </div>
</section>
</div>



<?php include ('includes/script.php'); ?>
<?php include ('includes/Footer.php'); ?>