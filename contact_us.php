<?php
include('userauthentication.php');
include('Header.php');
include('config/dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        .form-group label {
            color: #ff7800;
        }
    </style>

</head>

<body style="background-color:#D0C9C0;">



    <section class="my-5">
        <div class="py-2">
            <h2 class="text-center">Feedback</h2>
        </div>
        <div class="w-50 m-auto">
            <?php include('message.php'); ?>
            <form action="codeuser.php" method="post" name="myForm1" enctype="multipart/form-data">
                <div class="form-group">
                    <label>User Name</label>
                    <input type="text" name="user" class="form-control" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label>Email ID</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Contact Number</label>
                    <input type="number" name="mobile" class="form-control" placeholder="Contact Number">
                </div>
                <div class="form-group">
                    <label>feedback</label>
                    <textarea name="comments" class="form-control" required rows="3" placeholder="feedback"></textarea>
                </div>
                <div class="form-group">
                    <label>Upload food Image</label>
                    <input type="file" name="Image" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="adduser" class="btn btn-info">Save</button>
                </div>

            </form>
        </div>
    </section>
    <script>
        function validateForm() {
            let x = document.forms["myForm1"]["user"].value;
            if (x == "") {
                alert("User Name must be filled out");
                return false;
            }
            let x4 = document.forms["myForm1"]["mobile"].value;
            if (x4 == "") {
                alert("Contact Number must be filled out");
                return false;
            }
            let x5 = document.forms["myForm1"]["comments"].value;
            if (x5 == "") {
                alert("Comments must be filled out");
                return false;
            }
        }
    </script>
    <?php

    include('footer.php');

    ?>
</body>

</html>