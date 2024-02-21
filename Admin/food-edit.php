<?php
include ('authentication.php');
include ('includes/Header.php');
include ('includes/top-bar.php');
include ('includes/side-bar.php');
include('config/dbcon.php');
?>

<div class="context-wrapper">

<?php

if(isset($_GET['food_id']))
{
  $food_id = $_GET['food_id'];
  $query = "SELECT * FROM food WHERE id='$food_id'";
  $query_run = mysqli_query($con, $query);
  if(mysqli_num_rows($query_run) > 0)
  {
    $foodItem = mysqli_fetch_array($query_run);
   
    ?>
<section class="context mt-6">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card text-center">
                <div class="card-header">
                    <h4 class="text-center">
                        Food Detials - Edit
                        <a href="food.php" class="btn btn-danger float-right">Back</a>
                    </h4>
                </div>
                 <div class="card-body">
                   <form action="code.php" method="POST" enctype="multipart/form-data">
                     <input type="hidden" name="food_id" value="<?= $foodItem['id']?>" >
                     <div class="row">
                        <div class="col-md-12">
                            <label>Select Category</label>
                            <?php
                                $query = "SELECT * FROM categories";
                                $query_run = mysqli_query($con, $query);
                                if(mysqli_num_rows($query_run) > 0)
                                {
                                   
                                  ?>
                                   <select name="category_id" class="form-control">
                                     <option value="">Select Category</option>
                                     <?php foreach($query_run as $item)
                                      { ?>
                                        <option value="<?= $item['id'] ?>" <?= $foodItem['category_id'] == $item['id'] ? 'selected' :'' ?>>
                                        <?= $item['name'] ?>
                                    
                                    </option>
                                     <?php } ?>
                                   </select>
                                  <?php
                                }
                            ?>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Food Name</label>
                                <input type="text" name="name" class="form-control" value="<?=$foodItem['name'] ?>" required placeholder="Enter Food Name">
                            </div>
                        </div><div class="col-md-6">
                            <div class="form-group">
                                <label>Small Description</label>
                                <textarea name="small_description" class="form-control" required rows="3" placeholder="Enter Small Description" >
                                <?=$foodItem['small_description'] ?>
                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Long Description</label>

                                <textarea name="long_description" class="form-control" required rows="3" placeholder="Enter Long Description" > <?=$foodItem['long_description'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control" value="<?=$foodItem['price'] ?>" required placeholder="Enter Price">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Offer Price</label>
                                <input type="text" name="offerprice" class="form-control" value="<?=$foodItem['offerprice'] ?>" required placeholder="Enter Offer Price">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="image" class="form-control" >
                                <input type="hidden" name="old_image" value="<?=$foodItem['image']?>">

                            </div>
                          
                            <img src="img/<?=$foodItem['image']?>" width="50px" height="50px"  alt="">
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Click to Save</label> <br>
                                <input type="submit" name="food_update" class="btn btn-primary " value="Update">
                               
                            </div>
                        </div>
                     </div>
                   </form> 
                 </div>
            </div>
        </div>
    </div>
  </div>
</section>
</div>
<?php
  }
  else
  {
    echo "NO Such Food Found";
  }
}
?>


<?php include ('includes/script.php'); ?>
<?php include ('includes/Footer.php'); ?>