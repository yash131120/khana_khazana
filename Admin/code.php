<?php
include('authentication.php');
include('config/dbcon.php');

if(isset($_POST['food_update']))
{
  $food_id = $_POST['food_id'];
  $category_id = $_POST['category_id'];
  $name = $_POST['name'];
  $small_description = $_POST['small_description'];
  $long_description = $_POST['long_description'];
  $price = $_POST['price'];
  $offerprice = $_POST['offerprice'];
  $status = $_POST['status'] == true ? '1':'0';
  $image = $_FILES['image']['name'];
  $old_image = $_POST['old_image'];

  if($image != '')
  {
    $update_filename = $_FILES['image']['name'];

    $allowed_extension = array('png','jpg','jpeg');
    $file_extension = pathinfo($update_filename, PATHINFO_EXTENSION);
  
    $filename = time().'.'.$file_extension;
    if(!in_array($file_extension, $allowed_extension))
    {
      $_SESSION['status'] = "You are allowed with only jpg,png,jpeg Image";
      header('Location: food-add.php');
      exit(0);
    }
    $update_filename = $filename;
  }
    else
    {
      $update_filename = $old_image;
    }

    $query = "UPDATE food SET category_id='$category_id', name ='$name',small_description='$small_description',long_description='$long_description',price='$price',offerprice='$offerprice',image='$update_filename',status='$status' WHERE id='$food_id'";
 
    $query_run = mysqli_query($con, $query);
     if($query_run)
     {
       if($image != '')
       {
         move_uploaded_file($_FILES['image']['tmp_name'],'img/'.$filename);
         if(file_exists('img/'.$old_image)){ unlink('img/'.$old_image); }
       }
       $_SESSION['status'] = "Food Updated Successfully";
       header('Location: food.php');
      exit(0);
      
     }
    
}

if(isset($_POST['food_delete_btn']))
{
  $food_id = $_POST['food_delete_id'];
  $query = "DELETE FROM food WHERE id='$food_id' ";
 

  if(mysqli_query($con, $query))
  {
    $_SESSION['status'] = "Food Deleted successfully";
    header('Location: food.php');
  }
  else
  {
    $_SESSION['status'] = "Food  not Deleted successfully";
    header('Location: food.php');
  }
}


if(isset($_POST['food_save']))
{
  $category_id = $_POST['category_id'];
  $name = $_POST['name'];
  $small_description = $_POST['small_description'];
  $long_description = $_POST['long_description'];
  $price = $_POST['price'];
  $offerprice = $_POST['offerprice'];
  $status = $_POST['status'] == true ? '1':'0';
  $image = $_FILES['image']['name'];

  $allowed_extension = array('png','jpg','jpeg');
  $file_extension = pathinfo($image, PATHINFO_EXTENSION);

  $filename = time().'.'.$file_extension;
  if(!in_array($file_extension, $allowed_extension))
  {
    $_SESSION['status'] = "You are allowed with only jpg,png,jpeg Image";
    header('Location: food-add.php');
    exit(0);
  }
  else
  {
  $image = $_FILES['image']['name'];
  $query = "INSERT INTO food (category_id,name,small_description,long_description,price,offerprice,image,status) 
  VALUES ('$category_id','$name','$small_description','$long_description','$price','$offerprice','$filename','$status')";
  $query_run = mysqli_query($con, $query);
  if($query_run)
  {
    move_uploaded_file($_FILES['image']['tmp_name'],'img/'.$filename);
    $_SESSION['status'] = "Food Added Successfully";
    header('Location: food-add.php');
    exit(0);
  }
  }
}

if(isset($_POST['category_save']))
{
   $name = $_POST['name'];
   $description = $_POST['description'];
   $trending = $_POST['trending'] == true ? '1':'0';
   $status = $_POST['status'] == true ? '1':'0';
   $Img = $_FILES['Img']['name'];

   $allowed_extension = array('png','jpg','jpeg');
  $file_extension = pathinfo($Img, PATHINFO_EXTENSION);

  
  $filename = time().'.'.$file_extension;
  if(!in_array($file_extension, $allowed_extension))
  {
    $_SESSION['status'] = "You are allowed with only jpg,png,jpeg Image";
    // header('Location: food-add.php');
    exit(0);
  }
   else
   {
    $Img = $_FILES['Img']['name'];
    $category_query = "INSERT INTO categories (name,description,trending,status,Img) VALUES ('$name','$description','$trending','$status','$filename')";
   $category_query_run = mysqli_query($con, $category_query);

   if($category_query_run)
   {
     move_uploaded_file($_FILES['Img']['tmp_name'],'img/'.$filename);
    $_SESSION['status'] = "Category Inserted successfully";
    header('Location: category.php');
   }
   }
}

if(isset($_POST['cate_delete_btn']))
{
  $cate_id = $_POST['cate_delete_id'];
  $query = "DELETE FROM categories WHERE id='$cate_id'";
  

  if(mysqli_query($con, $query))
  {
    $_SESSION['status'] = "Category Deleted successfully";
    header('Location: category.php');
  }
}

if(isset($_POST['category_update']))
{
  $cate_id = $_POST['cate_id'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $trending = $_POST['trending'] == true ? '1':'0';
  $status = $_POST['status'] == true ? '1':'0';
  $Img = $_FILES['Img']['name'];
  $old_image = $_POST['old_image'];

  if($Img != '')
  {
    $update_filename = $_FILES['Img']['name'];

    $allowed_extension = array('png','jpg','jpeg');
    $file_extension = pathinfo($update_filename, PATHINFO_EXTENSION);
  
    $filename = time().'.'.$file_extension;
    if(!in_array($file_extension, $allowed_extension))
    {
      $_SESSION['status'] = "You are allowed with only jpg,png,jpeg Image";
      // header('Location: food-add.php');
      exit(0);
    }
    $update_filename = $filename;
  }
   else
    {
      $update_filename = $old_image;
    }

  $query = "UPDATE categories SET name='$name',description='$description',trending='$trending',Img='$update_filename',status='$status' WHERE id='$cate_id'";
  $query_run = mysqli_query($con, $query);

  if($query_run)
  {
    if($Img != '')
       {
         move_uploaded_file($_FILES['Img']['tmp_name'],'img/'.$filename);
         if(file_exists('img/'.$old_image)){ unlink('img/'.$old_image); }
       }
    $_SESSION['status'] = "Category Updated successfully";
    header('Location: category.php');
   }
}

if(isset($_POST['logout_btn']))
{
// session_destroy();
 unset($_SESSION['auth']);
 unset($_SESSION['auth_user']);

 $_SESSION['status'] = "Logged out successfully";
 header('Location: login.php');
 exit(0);
}

if(isset($_POST['check_Emailbtn']))
{
  $email = $_POST['email'];
  $checkemail = "SELECT email FROM admin WHERE email='$email'";
  $checkemail_run = mysqli_query($con, $checkemail);

  if(mysqli_num_rows($checkemail_run) > 0)
  {
    echo "Email id is already taken";
  }
  else
  {
    echo "It's Available";
  }
}

if(isset($_POST['addUser']))
{
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $conformpassword = $_POST['conformpassword'];

  if($password == $conformpassword)
  { 
    $checkemail = "SELECT email FROM admin WHERE email='$email'";
    $checkemail_run = mysqli_query($con, $checkemail);

    if(mysqli_num_rows($checkemail_run) > 0)
    {
      $_SESSION['status'] = "Email id is already taken";
      header("Location: registered.php");
      exit;
    }
    else
    {
      $user_query = "INSERT INTO admin(name, contact, email, password) VALUES ('$name','$contact','$email','$password')";
      $user_query_run = mysqli_query($con, $user_query);
  
      if($user_query_run)
      {
        $_SESSION['status'] = "User Added Successfully";
        header("Location: registered.php");
      }
      else
      {
        $_SESSION['status'] = "User  Registation Failed";
        header("Location: registered.php");
      }
    }
  }
  else
  {
    $_SESSION['status'] = "Password and Conform Password d oes not match";
    header("Location: registered.php");
  }
  
}

if(isset($_POST['updateUser']))
{
  $user_id = $_POST['user_id'];
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "UPDATE admin SET name='$name', contact='$contact', email='$email', password='$password' WHERE id='$user_id'";
  $query_run =mysqli_query($con, $query);

  if($query_run)
  {
    $_SESSION['status'] = "User Updated Successfully";
    header("Location: registered.php");
  }
  else
  {
    $_SESSION['status'] = "User  Updating Failed";
     header("Location: registered.php");
  }
}

if(isset($_POST['delete_btn']))
{

    $user_id = $_POST['delete_id'];
    $query = "DELETE FROM admin WHERE id='$user_id'";

    if(mysqli_query($con, $query)) 
    {
       $_SESSION['status'] = "User Deleted Successfully";
      header("Location: registered.php");
    }
    else
    {
      $_SESSION['status'] = "User Deleting Failed";
     // header("Location: registered.php");
    }
}
?>