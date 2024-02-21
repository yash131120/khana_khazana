<?php
include ('authentication.php');
include ('includes/Header.php');
include ('includes/top-bar.php');
include ('includes/side-bar.php');
include('config/dbcon.php');
?>

<div class="context-wrapper">

<section class="context">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php include('message.php'); ?>
            <div class="card text-center">
                <div class="card-header">
                    <h4 class="text-center">
                        Food Detials
                        <a href="food-add.php" class="btn btn-primary float-right">Add</a>
                    </h4>
                </div>
                 <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                         $query = "SELECT * FROM food";
                         $query_run = mysqli_query($con, $query);

                         if(mysqli_num_rows($query_run) > 0)
                         {
                           foreach($query_run as $food_item)
                           {
                             ?>
                               <tr>
                                 <td><?= $food_item['id']; ?></td>
                                 <td><?= $food_item['name']; ?></td>
                                 <td><?= $food_item['price']; ?></td>
                                 <td>
                                 <a href="food-edit.php?food_id=<?= $food_item['id']?>" class="btn btn-success">Edit</a>
                                 </td>
                                 <td>
                                 <form action="code.php" method="POST">
                                     <input type="hidden" name="food_delete_id" value="<?= $food_item['id']; ?>">
                                     <button type="submit" name="food_delete_btn" class="btn btn-danger">Delete</button>
                                  </form>
                                 </td>
                               </tr>
                             <?php
                           }
                         }
                         else
                         {
                           ?>
                            <tr>
                                <td colspan="6">No Record Found</td>
                            </tr>
                           <?php
                         }
                        ?>
                       
                      </tbody>
                    </table>
                 </div>
            </div>
        </div>
    </div>
  </div>
</section>
</div>



<?php include ('includes/script.php'); ?>
<?php include ('includes/Footer.php'); ?>