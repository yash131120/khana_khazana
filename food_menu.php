<?php
include('userauthentication.php');
include('Header.php');
include('config/dbcon.php');
if (isset($_GET['id'])) {
  $category_id = $_GET['id'];
} else {
  header("location: category.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <style>
    .set {
      width: 100%;
      height: 200px;
    }

    .fa-star,
    .fa-star-half {
      color: yellowgreen;
      padding: 3% 0;
    }
  </style>
</head>

<body>
  <section class="my-2 ">
    <div class="py-5">
      <h2 class="text-center">Our Food-Menu</h2>
    </div>
    <div class="container-fluid">
      <div class="row">
        <?php
        $query = "SELECT * FROM food  Where   category_id ='$category_id'";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0) {
          foreach ($query_run as $food_item) {
        ?>
            <div class="col-md-4  py-3">
              <form action="codeuser.php" method="POST">
                <div class="card bg-secondary text-white">
                  <img class="set" src="./Admin/img/<?= $food_item['image'] ?>" width="60px" height="60px" alt="card image">
                  <div class="card-body">
                    <h4 class="card-title" id="item"><?= $food_item['name']; ?></h4>
                    <h6>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="far fa-star" aria-hidden="true"></i>
                    </h6>
                    <div class="price">
                      <i> &#x20B9;</i>
                      <span class="price"><?= $food_item['price']; ?></span>
                    </div>
                    <div>
                      <input type="text" placeholder="Quantity" name="quantity" value="1">
                    </div>
                    <div class="py-2">
                      <input type="hidden" name="add_to_cart_id" value="<?= $food_item['id']; ?>">
                      <button type="submit" name="add_to_cart_btn" class="btn btn-warning my-3">Add to Cart<i class="fas fa-shopping-cart"></i></button>
                    </div>
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
  </section>
  <?php

  include('footer.php');

  ?>

</body>

</html>