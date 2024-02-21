<?php
include('authentication.php');
include('includes/Header.php');
include('includes/top-bar.php');
include('includes/side-bar.php');
include('config/dbcon.php');
?>
<!-- Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Food Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="code.php" method="POST" name="myForm4" onsubmit="return validateForm()"
        enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="">Category Name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>Upload Image</label>
            <input type="file" name="Img" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="category_save" class="btn btn-primary">Save </button>
        </div>
      </form>

    </div>
  </div>
</div>
<script>
  function validateForm() {
    let x = document.forms["myForm4"]["name"].value;
    if (x == "") {
      alert("Category Name must be filled out");
      return false;
    }
    let x4 = document.forms["myForm4"]["description"].value;
    if (x4 == "") {
      alert("Description must be filled out");
      return false;
    }
  } 
</script>
<div class="context-wrapper">

  <section class="context mt-6">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?php include('message.php'); ?>
          <div class="card text-center">
            <div class="card-header">
              <h4 class="text-center">
                Food category
                <a href="#" data-toggle="modal" data-target="#categoryModal" class="btn btn-primary float-right">Add</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT * FROM categories";
                  $query_run = mysqli_query($con, $query);

                  if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $cateitem) {
                      ?>
                      <tr>
                        <td>
                          <?= $cateitem['id']; ?>
                        </td>
                        <td>
                          <?= $cateitem['name']; ?>
                        </td>
                        <td>
                          <a href="category-edit.php?id=<?= $cateitem['id']; ?>" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                          <form action="code.php" method="POST">
                            <input type="hidden" name="cate_delete_id" value="<?= $cateitem['id']; ?>">
                            <button type="submit" name="cate_delete_btn" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                      </tr>
                      <?php
                    }
                  } else {
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



<?php include('includes/script.php'); ?>
<?php include('includes/Footer.php'); ?>