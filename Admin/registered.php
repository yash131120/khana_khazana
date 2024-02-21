<?php
include ('authentication.php');
include ('includes/Header.php');
include ('includes/top-bar.php');
include ('includes/side-bar.php');
include ('config/dbcon.php');
?>
<div class="content-wrapper">
<!--Users Modal -->
<div class="modal fade" id="AddUserModal" tabindex="-1" aria-labelledby="AddUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AddUserModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aris-hidden="true">&times;</span>
        </button>
      </div>
    <form action="code.php" method="POST" name="myForm3" onsubmit="return validateForm()">
      <div class="modal-body">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name"
           >
         </div>
         <div class="form-group">
            <label for="">Contact Number</label>
            <input type="number" name="contact"  class="form-control" placeholder="Contact Number"
           >
         </div>
         <div class="form-group">
            <label for="">Email Id</label>
            <span class="email_error text-danger ml-2"></span>
            <input type="email" name="email"  class="form-control email_id" placeholder="Email">
         </div>
         <div class="row">
           <div class="col-md-6">
             <div class="form-group">
               <label for="">Password</label>
               <input type="password" name="password" class="form-control" placeholder="Password"
              >
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group">
               <label for="">Conform Password</label>
               <input type="password" name="conformpassword" class="form-control" placeholder="Password"
               >
             </div>
           </div>
         </div>
     </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="addUser" class="btn btn-primary">Save</button>
       </div>
     </form>
    </div>
  </div>
</div>

<!-- Delete User -->

<!--Users Modal -->
<div class="modal fade" id="DeletModal" tabindex="-1" aria-labelledby="DeleteUserModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AddUserModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aris-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
       <div class="modal-body">
          <input type="hidden" name="delete_id" class="delete_user_id">
          <p>
            Are you sure.you want to delete this data ?
          </p>
       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="DeleteUserbtn" class="btn btn-primary">Yes, Delete.!</button>
       </div>
     </form>
    </div>
  </div>
</div>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Registered User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Registered User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <section class="content">
     <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php include('message.php'); ?>
              <?php
                if(isset($_SESSION['status']))
                {
                  echo "<h4>".$_SESSION['status']."</h4>";
                  unset($_SESSION['status']);
                }
              ?>
             <div class="card">
               <div class="card-header">
                  <h3 class="card-title">Registered User</h3>
                  <a href="#" data-toggle="modal" data-target="#AddUserModal" class="btn btn-primary btn-sm float-right">Add User</a>
                </div>
                <div class="card-body">
                 <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                     $query = "SELECT * FROM admin";
                     $query_run = mysqli_query($con, $query);

                     if(mysqli_num_rows($query_run) > 0)
                     {
                       foreach($query_run as $row)
                       {
                        ?>
                         <tr>
                           <td><?php  echo $row['id']; ?></td>
                           <td><?php  echo $row['name']; ?></td>
                           <td><?php  echo $row['email']; ?></td>
                           <td><?php  echo $row['contact']; ?></td>
                           <td>
                            <a href="registered-edit.php?user_id=<?php  echo $row['id']; ?>" class="btn btn-info btn-sm">Edit</a>
                           </td>
                           <td>
                           <form action="code.php" method="POST">
                            <input type="hidden" name="delete_id" value="<?php  echo $row['id']; ?>">
                            <button type="submit" name="delete_btn" class="btn btn-danger btn-sm">Delete</button>
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
                          <td>No Record Found</td>
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

<script>
  $(document).ready(function () {
    $('.email_id').keyup(function (e) {
      var email = $('.email_id').val();
      
      $.ajax({
        type: "POST",
        url: "code.php",
        data: {
          'check_Emailbtn':1,
          'email':email,
        },
        success: function (response) {
        //  console.log(response);
           $('.email_error').text(response);
        }
      });
    });
    
  });

</script>

<script>
  $(document).ready(function () {
    $('.deletebtn').click(function (e) {
      e.preventDefault();

      var user_id = $(this).val();
    //  console.log(user_id);
       $('delete_user_id').val(user_id);
       $('#DeletModal').modal('show');
    });
  });
</script>
<script>
      function validateForm() {
        let x = document.forms["myForm3"]["name"].value;
         if (x == "") {
          alert("User Name must be filled out");
           return false;
           }
           let x4 = document.forms["myForm3"]["contact"].value;
         if (x4 == "") {
          alert("Contact Number must be filled out");
           return false;
           }
           let x5 = document.forms["myForm3"]["password"].value;
         if (x5 == "") {
          alert("Password must be filled out");
           return false;
           }
           let x6 = document.forms["myForm3"]["conformpassword"].value;
         if (x6 == "") {
          alert("Conform Password must be filled out");
           return false;
           }
       } 
    </script>
<?php include ('includes/Footer.php'); ?>