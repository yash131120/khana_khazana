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
    .set {
      width: 50%;
      height: 200px;
      border-radius: 50%
    }
  </style>
</head>

<body style="background-color:#D0C9C0;">


  <div class="py-5">
    <h2 class="text-center" style="color:blue;">Customer Review</h2>
  </div>
  <section class="my-2">
    <?php
    $query = "SELECT * FROM contactus";
    $query_run = mysqli_query($con, $query);
    if ($query_run) {
      foreach ($query_run as $data) {
    ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3 justify-content-center d-flex">
              <img src="img/<?= $data['Image']; ?>" class="set">
            </div>
            <div class="col-md-6">
              <h2 class="display-7" style="color:blue;">
                <?= $data['user']; ?>
              </h2>
              <p class="py-3" style="color:black; font-size: 18px;">
                <?= $data['comments']; ?>
              </p>

            </div>
          </div>
        </div>
    <?php

      }
    }

    ?>



  </section>





  <?php

  include('footer.php');

  ?>
</body>

</html>