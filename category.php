<?php
include('userauthentication.php');
include('Header.php');
include('config/dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/category.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <style>
    .set {
      width: 100%;
      height: 200px;
    }
  </style>
</head>

<body style="background-color:LightGray;">
  <div class="container-fluid">
    <div class="row">
      <?php
      $query = "SELECT * FROM categories ";
      $query_run = mysqli_query($con, $query);

      if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $cateitem) {
      ?>
          <div class="col-md-4 py-3">
            <form action="codeuser.php" method="POST">
              <div class="card" style="width: 24rem">
                <a href="food_menu.php?id=<?= $cateitem['id'] ?>">
                  <img class="set" src="./Admin/img/<?= $cateitem['Img'] ?>" width="0px" height="50px" alt="card image" />
                </a>
                <div class="card-body" style="background-color:#9F8772;">
                  <p class="card-text text-white" style="font-size:18px;"><?= $cateitem['name']; ?></p>
                </div>
              </div>
            </form>
          </div>
      <?php
        }
      }
      ?>

    </div>
  </div>
  <?php include 'footer.php'; ?>
</body>

</html>