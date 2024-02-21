 
<?php 
include ('userauthentication.php');
include ('Header.php');
include('config/dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/category.css">
  <style>
    .set{
      width:100% ;
    height:200px ;
    border: 100px ;
    padding: 20px;
}
</style>
</head>
<body>



<section class="my-2">
  <div class="py-2">
  <br>
  <br>
  <br>

    <h2 class="text-center" style="font-size: 50px;">Khana Khazana Restaurant Services</h2>
  </div>
  <br>
  
  <br>
  <br>
  <div class="container">
      <div class="row second">
        <div class="col-md-4">
          <div class="card" style="width: 18rem">
            <a href="#">
            <img src="img/g2.jpg" class="set"alt="image">
            </a>
            <div class="card-body">
              <p class="card-text">Gujarati Dishes</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem">
            <a href="#">
            <img src="img/punjabi.jpg"class="set"alt="image" >
            </a>
            <div class="card-body">
              <p class="card-text">Punjabi Dishes</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem">
            <a href="#">
            <img src="img/img-7.jpg"class="set"alt="image" >
            </a>
            <div class="card-body">
              <p class="card-text">South Indain Dishes</p>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>
     </div>
   </div>
</section>   

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php

    include('footer.php');

    ?>

</body>
</html>