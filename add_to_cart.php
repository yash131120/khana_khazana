<?php
include('userauthentication.php');
include('Header.php');
include('config/dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>



  <div class="context-wrapper">

    <section class="context mt-6">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center border rounded bg-light my-5 ">
            <?php include('message.php'); ?>
            <h4>
              My Cart
              <a href="category.php" class="btn btn-danger float-right">Back</a>
            </h4>
            <div class="col-lg-">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <form action="codeuser.php" method="POST">
                    <?php
                    $i = 0;
                    $query = "SELECT * FROM addtocart where user_id=" . $_SESSION['userid'];
                    $query_run = mysqli_query($con, $query);
                    if (mysqli_num_rows($query_run) > 0) {
                      foreach ($query_run as $cart_item) {
                        $i++;
                    ?>
                        <tr>
                          <td>
                            <?= $cart_item['id']; ?>
                          </td>
                          <input type="hidden" name="item_id<?= $i; ?>" value="<?= $cart_item['id']; ?>" />
                          <td>
                            <?= $cart_item['name']; ?>
                          </td>
                          <td id="price<?php echo $i; ?>"><?= $cart_item['price']; ?></td>
                          <td class="d-flex justify-content-center">
                            <div class="d-flex justify-content-center" style="width:130px">
                              <button type="button" class="input-group-text increment-btn" onclick="increment('<?php echo $i; ?>')">+</button>
                              <input type="text" class="form-control input-qty  text-center" id="quantity<?php echo $i; ?>" value="<?= $cart_item['quantity']; ?>" name="quantity<?= $i; ?>">
                              <button type="button" class="input-group-text decrement-btn" onclick="decrement('<?php echo $i; ?>')">-</button>
                            </div>
                          </td>
                          <td id="total<?php echo $i; ?>"><?= $cart_item['price'] * $cart_item['quantity']; ?></td>
                          <td>
                            <input type="hidden" name="add_delete_id" value="<?= $cart_item['id']; ?>">
                            <button type="submit" name="add_delete_btn" class="btn btn-danger">Delete</button>
                          </td>
                        </tr>
                    <?php
                      }
                    }
                    ?>

                </tbody>
              </table>
              <div class="d-flex justify-content-end mb-2">
                <?php if (mysqli_num_rows($query_run) > 0) { ?>
                  <button type="submit" name="proceed-to-payment" class="btn btn-info">Payment</button>
                <?php } ?>
              </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script>
    function increment(label) {
      var quantity = parseInt($("#quantity" + label).val());
      quantity = quantity + 1;
      $("#quantity" + label).val(quantity);
      var price = $("#price" + label).text();
      var total = price * quantity;
      $("#total" + label).text(total);
      console.log("clicked on plus button: " + quantity);
    }

    function decrement(label) {
      var quantity = parseInt($("#quantity" + label).val());
      quantity = quantity - 1;
      $("#quantity" + label).val(quantity);
      var price = $("#price" + label).text();
      var total = price * quantity;
      $("#total" + label).text(total);

    }
  </script>

</body>

</html>