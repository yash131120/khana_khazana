<?php
session_start();
include('config/dbcon.php');


if (isset($_POST['payment_btn'])) {
  print_r($_POST);
  $payment_id = $_POST['payment_id'];
  $quantity = $_POST['quantity'];
  $total = $_POST['total'];
  $firstname = $_POST['firstname'];
  $email = $_POST['email'];
  $cardname = $_POST['cardname'];
  $cardnumber = $_POST['cardnumber'];
  $expmonth = $_POST['expmonth'];
  $expyear = $_POST['expyear'];
  $cvv = $_POST['cvv'];
  $user_id = $_SESSION['userid'];



  $query = "INSERT INTO payment(user_id,firstname,email,cardname,cardnumber,expmonth,expyear,cvv) VALUES ('$user_id','$firstname','$email','$cardname','$cardnumber','$expmonth','$expyear','$cvv') ";
  echo $query;
  if (mysqli_query($con, $query)) {

    $query = "UPDATE addtocart SET status = 1 WHERE user_id = '$user_id'";
    $result = mysqli_query($con, $query);
    $_SESSION['status'] = "Payment Successfully";
    header('Location: invoice.php');
  }


}

if (isset($_POST['proceed-to-payment'])) {
  $data = $_POST;
  for ($i = 1; $i < count($data); ++$i) {
    if (isset($data['item_id' . $i])) {
      $item_id = $data['item_id' . $i];
      $quantity = $data['quantity' . $i];
      $query = "UPDATE addtocart SET quantity='$quantity' WHERE id='$item_id'";
      mysqli_query($con, $query);
    }
  }
  $_SESSION['status'] = "Quantity Updated Successfully";
  header("Location: Payment.php");
}

if (isset($_POST['add_to_cart_btn'])) {

  $add_to_cart_id = $_POST['add_to_cart_id'];
  $quantity = $_POST['quantity'];
  $query = "SELECT * FROM food WHERE id='$add_to_cart_id'";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_assoc($result);
  $name = $row['name'];
  $price = $row['price'];
  $user_id = $_SESSION['userid'];


  $query = "SELECT * FROM addtocart WHERE user_id='$user_id' and name='$name' and status='0'";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) < 1) {
    $query = "INSERT INTO addtocart(user_id,name, quantity, price ) VALUES ('$user_id','$name','$quantity','$price') ";
    if (mysqli_query($con, $query)) {
      $_SESSION['status'] = "Added to cart Successfully";
      header('Location: add_to_cart.php');
    }
  } else {
    $row = mysqli_fetch_assoc($result);
    $query = "UPDATE  addtocart SET quantity = quantity + '$quantity' WHERE id = " . $row['id'];
    if (mysqli_query($con, $query)) {
      $_SESSION['status'] = "You've already selected this item. Please choose a different one.";
      header('Location: add_to_cart.php');
    }

  }

}

if (isset($_POST['add_delete_btn'])) {
  $add_to_cart_id = $_POST['add_delete_id'];
  $query = "DELETE FROM addtocart WHERE id='$add_to_cart_id'";

  if (mysqli_query($con, $query)) {
    $_SESSION['status'] = "Product Deleted successfully";
    header('Location: add_to_cart.php');
  }
}

if (isset($_POST['adduser'])) {
  $user = $_POST['user'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $comments = $con->real_escape_string($_POST['comments']);
  $Image = $_FILES['Image']['name'];

  $allowed_extension = array('png', 'jpg', 'jpeg');
  $file_extension = pathinfo($Image, PATHINFO_EXTENSION);

  $filename = time() . '.' . $file_extension;
  if (!in_array($file_extension, $allowed_extension)) {
    $_SESSION['status'] = "You are allowed with only jpg,png,jpeg Image";
    header('Location: contact_us.php');
    exit(0);
  } else {
    $Image = $_FILES['Image']['name'];
    $query = "INSERT INTO contactus(user, email, mobile, comments,Image) VALUES ('$user','$email','$mobile','$comments','$filename')";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
      move_uploaded_file($_FILES['Image']['tmp_name'], 'img/' . $filename);
      $_SESSION['status'] = "User Feedback Successfully";
      header("Location: contact_us.php");
    } else {
      echo $con->error;
    }
  }
}


if (isset($_POST['newuserlogin_btn'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];




  $query = "INSERT INTO userlogin(name, email, password) VALUES ('$name','$email','$password')";
  $query_run = mysqli_query($con, $query);

  if ($query_run) {
    $_SESSION['status'] = "Create New User Successfully";
    header("Location: userlogin.php");
  }
}

if (isset($_POST['userlogin_btn'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  echo $email;
  echo $password;
  $query = "select * from userlogin where  email= '$email' AND  password = '$password'";
  $query_run = mysqli_query($con, $query);

  if (mysqli_num_rows($query_run) > 0) {
    $row = mysqli_fetch_assoc($query_run);
    $_SESSION['auth'] = true;
    $_SESSION['email'] = $row['email'];
    $_SESSION['userid'] = $row['id'];
    echo "login successful";
    header('Location: index.php');
  } else {
    // $_SESSION['status'] = "Invalid Email or Password";
    echo "wrong credentials!! plese check and try again";
  }
}

?>