<?php

include('Header.php');
// if(isset($_SESSION['auth']))
//  {
//    $_SESSION['status'] = "You are already logged in";
//    header('Location: index.php');
//    exit(0);
//  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
   <div class="section">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-5 my-5">


               <div class="card my-5">
                  <div class="card-header bg-light">
                     <h5>New User Register Form</h5>
                  </div>
                  <div class="card-body">
                     <form action="codeuser.php" method="POST" name="myForm2" onsubmit="return validateForm()">
                        <div class="form-group">
                           <label for="">User Name</label>
                           <input type="text" name="name" class="form-control" placeholder="User Name">
                        </div>
                        <div class="form-group">
                           <label for="">Email ID</label>
                           <input type="email" name="email" class="form-control" placeholder="Email ID">
                        </div>
                        <div class="form-group">
                           <label for="">Password</label>
                           <input type="password" name="password" class="form-control" placeholder="Passwrod">
                        </div>
                        <div class="form-group">
                           <button type="submit" name="newuserlogin_btn" class="btn btn-info btn-block">Create</button>
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
         let x = document.forms["myForm2"]["name"].value;
         if (x == "") {
            alert("User Name must be filled out");
            return false;
         }
         let x4 = document.forms["myForm2"]["password"].value;
         if (x4 == "") {
            alert("Passwrod must be filled out");
            return false;
         }

      }
   </script>
</body>

</html>