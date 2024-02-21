<?php
session_start();
include ('includes/Header.php');
// if(isset($_SESSION['auth']))
//  {
//    $_SESSION['status'] = "You are already logged in";
//    header('Location: index.php');
//    exit(0);
//  }
 ?>
<body>
<div class="section">
    <div class="container">
        <div class="row justify-content-center">
           <div class="col-md-5 my-5">
              <div class="card my-5">
                <div class="card-header bg-light">
                   <h5>Login Form</h5>
                </div>
                <div class="card-body">
                    <form action="logincode.php" method="POST" name="myForm" onsubmit="return validateForm()"  >
                      <div class="form-group">
                         <label for="">Email ID</label>
                         <input type="text" name="email" class="form-control" placeholder="Email ID">
                      </div>
                       <div class="form-group">
                         <label for="">Password</label>
                         <input type="password" name="password" class="form-control" placeholder="Passwrod">
                      </div>
                      <div class="form-group">
                        <button type="submit" name="login_btn" class="btn btn-warning btn-block">Submit</button>
                      </div>
                    </form>
                </div>
              </div>
           </div>
        </div>
    </div>
</div>
<script>
      function validateForm() {
        let x = document.forms["myForm"]["password"].value;
         if (x == "") {
          alert("Password must be filled out");
           return false;
           }
          
       } 
    </script>
</body>
<?php include ('includes/script.php'); ?>
