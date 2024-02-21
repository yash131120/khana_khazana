<?php
include "userauthentication.php";

include "config/dbcon.php";


?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/Payment.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body style="background-color:#D0C9C0;">
  <div class="row">
    <div class="col-75">
      <div class="container">

        <div class="row">

          <div class="col-6">
            <form action="codeuser.php" name="myForm" onsubmit="return validateForm()" method="POST">
              <input type="hidden" name="user_id" value="<?= $order_details["user_id"] ?> " />
              <section class="order">
                <h1 class="order__title no-margin">Ordering Details</h1>
                <svg id="svg-summary" width="24" height="24" viewBox="0 0 24 24">
                </svg>
                <section class="order__sub-sections order__subtotal clearfix ">
                  <h2 class="order__subtitles no-margin">Subtotal</h2>
                  <table id="values" class="order__subtotal__table">
                    <tbody>
                      <?php
                      $i = 0;
                      $query = "SELECT * FROM addtocart where user_id =" . $_SESSION["userid"];
                      $query_run = mysqli_query($con, $query);

                      if (mysqli_num_rows($query_run) > 0) {


                        foreach ($query_run as $order_details) {
                          $i++;
                          $itemName[$i] = $order_details["name"];
                          $price[$i] = $order_details["price"];
                          $quantity[$i] = $order_details["quantity"];
                          $total[$i] = $order_details["price"] * $order_details["quantity"];

                        }

                      }
                      $len = count($itemName);
                      $tempBal = 0;
                      $tempgst = 0;
                      $tempfin = 0;

                      ?>
                      <tr>
                        <td class="first-row"
                          style="background-color:#ffff;border: 4px solid Black; height:60px;  color: black;">
                          <b>Food
                            Name:</b>
                          <?php $temp = $len;

                          while ($temp > 0) {
                            echo $itemName[$temp] . " &nbsp; ";
                            --$temp;
                          } ?>
                        </td>
                      </tr>
                      <tr>
                        <td style="background-color:#ffff;border: 4px solid Black ;height:60px;"><b> Food Price:</b>
                          <?php $temp = $len;
                          while ($temp > 0) {
                            echo $price[$temp] . " &nbsp; ";
                            --$temp;
                          } ?>
                        </td>
                      </tr>
                      <tr>
                        <td style="background-color:#ffff;border: 4px solid Black ;height:60px;"><b> Food
                            Quantity:</b>


                          <?php $temp = $len;

                          while ($temp > 0) {
                            echo $quantity[$temp] . " &nbsp; ";
                            --$temp;
                          } ?>
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td style="background-color:#ffff;border: 4px solid Black ;height:60px;"><b> Total Price:</b>
                          <?php $temp = $len;
                          while ($temp > 0) {
                            echo $total[$temp] . " &nbsp; ";
                            --$temp;
                          } ?>
                        </td>
                      </tr>
                      <tr>

                        <td style="background-color:#ffff;border: 4px solid Black ;height:60px; margin-top: 25px;">
                          <b>
                            Total Amount:</b>
                          <?php $temp = $len;
                          while ($temp > 0) {
                            $tempBal += $total[$temp];
                            --$temp;
                          }
                          echo $_SESSION['TotalAmount'] = $tempBal; ?>
                        </td>
                      </tr>
                      <tr>
                        <td style="background-color:#ffff;border: 4px solid Black; height:50px;" ;><b> Gst Amount: </b;>
                            <?php $tempgst = $tempBal * 0.05;
                            echo $_SESSION['Gst Amount'] = $tempgst ?>
                        </td>
                      </tr>
                      <tr>
                        <td style="background-color:#ffff;border: 4px solid Black; height:50px;"><b> Final Amount: </b>
                          <?php $tempfin = $tempgst + $tempBal;
                          echo $_SESSION['Final Amount'] = $tempfin ?>
                        </td>
                      </tr>

                    </tfoot>
                  </table>
                </section>
                <br>
                <br>

                <div class="row">
                  <div class="col-50">

                    <label for="expmonth">Exp Month</label>
                    <select name="expmonth" id="expmonth">
                      <option value="Jan">Jan</option>
                      <option value="Feb">Feb</option>
                      <option value="Mar">Mar</option>
                      <option value="April">Arpil</option>
                      <option value="May">May</option>
                      <option value="Jun">Jun</option>
                      <option value="Jul">Jul</option>
                      <option value="Aug">Aug</option>
                      <option value="Sep">Sep</option>
                      <option value="Oct">Oct</option>
                      <option value="Nov">Nov</option>
                      <option value="Dec">Dec</option>
                    </select>
                  </div>
                  <div class="col-50">
                    <label for="expyear">Exp Year</label>
                    <select name="expyear" id="expyear">
                      <option value="2023">2023</option>
                      <option value="2024">2024</option>
                      <option value="2025">2025</option>
                      <option value="2026">2026</option>
                      <option value="2027">2027</option>
                      <option value="2028">2028</option>
                    </select>
                  </div>

                </div>


          </div>

          <div class="col-50 ">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color: navy"></i>
              <i class="fa fa-cc-amex" style="color: blue"></i>
              <i class="fa fa-cc-mastercard" style="color: red"></i>
              <i class="fa fa-cc-discover" style="color: orange"></i>
            </div>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="firstname" name="firstname" placeholder="Enter Your FullName" required />

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required />
            <label for="cname">Name Card</label>
            <input type="text" id="cardname" name="cardname" placeholder="Card Name" required />
            <label for="ccnum">Card number</label>
            <input type="number" id="cardnumber" name="cardnumber" placeholder="Card Number" required />

            <label for="cvv">CVV</label>
            <input type="number" id="cvv" name="cvv" placeholder="CVV" required />
          </div>
        </div>

        <input type="hidden" name="payment_id" ?>
        <button type="submit" name="payment_btn" class="btn">Generate Invoice</button>
        </form>
      </div>
    </div>
  </div>
  <script>
    function validateForm() {
      let x = document.forms["myForm"]["firstname"].value;
      if (x == "") {
        alert("First Name must be filled out");
        return false;
      }
      let checkCardnumber = document.forms["myForm"]["cardnumber"].value;

      if (checkCardnumber.length !=16) {
        alert("Please enter Valid Card Number");
        return false;
      }

      let checkcvv = document.forms["myForm"]["cvv"].value;

      if (checkcvv.length != 3) {
        alert("Please enter Valid Card CVV");
        return false;
      }
      //    let x2 = document.forms["myForm"]["cvv"].value;
      //  if (x2 == "") {
      //   alert("Cvv must be filled out");
      //    return false;
      //    }
      // let x4 = document.forms["myForm"]["cardname"].value;
      // if (x4 == "") {
      //   alert("Card name must be filled out");
      //   return false;
      // }
      // var num = document.getElementByID("cardnumber"); //num and ccnum are the credit card numbers
      // var safenum = document.getElementByID("cvv"); //cvv and safenum are the safety numbers

      // if (!(Number.isInteger(num)) || (num > 9999999999999999) || (num < 1000000000000000)) {
      //   window.alert("Invalid credit card number.")
      // } //detect whether the credit card number is an integer, larger than 9999999999999999, smaller than 1000000000000000 or not
      // else if (!(Number.isInteger(safenum)) || (safenum > 1000) || (safenum < 100)) {
      //   window.alert("Invalid credit card safety number.")
      // } //detect whether the safety number is an integer, larger than 999, smaller than 100 or not

    }


  </script>
  <!-- <script>
    var creditCardInput = $('#cardnumber');

    creditCardInput.on('input', function() {
      console.log("hi");
  get the value of the input
  var value = $(this).val();

  // use a regular expression to check that the input is a valid credit card number
  var regex = /^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/;
  if (regex.test(value)) {
    // if the input is valid, remove any error messages and update the style of the input
    creditCardInput.removeClass('error');
    creditCardInput.addClass('valid');
    console.log("valid");
  } else {
    // if the input is invalid, add an error message and update the style of the input
    creditCardInput.addClass('error');
    creditCardInput.removeClass('valid');
    console.log("invalid");
  }
  });
</script> -->

</body>

</html>