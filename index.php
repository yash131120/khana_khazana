<?php
include('userauthentication.php');
include('Header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Courier New', Courier, monospace;
      font-weight: lighter;
      text-align: center;
    }

    .content {

      padding: 0;
      background-color: antiquewhite;
      border-radius: 10px;
      height: 500px;
      width: 100%;
      overflow: hidden;
      border: 1px saddlebrown solid;
      box-shadow: 20px hsl(0, 0%, 3%);
      z-index: -1;
    }

    .show {
      padding: 10%;
      margin: auto;
      /* justify-content: center;
  align-items: center; */
      font-style: italic;
      /* width: fit-content; */
    }

    .slide_content {
      float: left;
      height: 500px;
      width: 400%;
    }

    .slides {
      width: 2400px;
      -webkit-animation-name: slide;
      -webkit-animation-duration: 10s;
      -webkit-animation-iteration-count: infinite;
      /* -webkit-animation-direction: alternate; */
      -webkit-animation-play-state: running;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .slide_content:nth-child(1) {
      background-image: url('img/re2.jpg');
      z-index: 1;
    }

    .slide_content:nth-child(2) {
      background-image: url('img/re1.jpg');
      background-repeat: no-repeat !important;
      background-size: cover;

    }

    .slide_content:nth-child(3) {
      background-image: url('img/jem.jpg');
    }

    .slide_content:nth-child(4) {
      background-image: url('img/re2.jpg');
    }

    @keyframes slide {
      20% {
        margin-left: 0px;
      }

      40% {
        margin-left: calc(-600px * 1);
      }

      60% {
        /* margin-left: calc(-600px * 2); */
      }

      80% {
        /* margin-left: calc(-600px * 3); */
      }
    }

    /*  */

    .set {
      width: 100%;
      height: 200px;
    }

    .col-51 {
      margin-Left: 135px;
      color: yellowgreen;
    }

    .col-50 {
      color: Violet;
    }

    .col-511 {
      margin-Left: 200px;
      color: yellowgreen;
    }

    .col-52 {
      margin-Left: 155px;
      color: yellowgreen;
    }

    .col-53 {
      margin-Left: 165px;
      color: yellowgreen;
    }

    h4 {
      margin-left: 20px;
      color: red;
    }
  </style>
</head>

<body>

  <div class="content">
    <div class="slides">
      <div class="slide_content 1">
        <h1 class="show"></h1>
      </div>
      <div class="slide_content 2">
        <h1 class="show"></h1>
      </div>
      <div class="slide_content 2">
        <h1 class="show"></h1>
      </div>
      <div class="slide_content 4">
        <h1 class="show"></h1>
      </div>
    </div>
  </div>
  <!-- <div class="swiper-container" >  
   
    <div class="swiper-wrapper">  
        
        <div class="swiper-slide"><img src="img/slid3.jpg" alt=""></div>  
        
    </div>  
     
    <div class="swiper-pagination"></div>  
</div>   -->

  <section class="my-2">

    <div class="py-3">
      <h2 class="text-center">Festivals Best Offer</h2>
    </div>

    <div class="country-description">
      <h4>Holi and Dhuleti Festivals Offer</h4>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 py-2">
          <div class="card text-white" style="background-color:#9F8772;">
            <a href="food_menu.php?id=13"> <img src="img/id-1.jpg" class="set">
              <div class="card-body">
                <div class="row">
                  <div class="col-50" style="">
                    <span class="fs-5 fw-semibold text-white">Idli</span>
                  </div>
                  <div class="col-511">
                    <span class="fs-5 fw-semibold text-white">40% off</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 py-2">
          <div class="card  text-white" style="background-color:#9F8772;">
            <a href="food_menu.php?id=8">
              <img src="img/co-1.jpg" class="set">
              <div class="card-body">
                <div class="row">
                  <div class="col-50">
                    <span class="fs-5 fw-semibold text-white">Coca cola</span>
                  </div>
                  <div class="col-52">
                    <span class="fs-5 fw-semibold text-white">20% Off</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 py-2">
          <div class="card  text-white" style="background-color:#9F8772;">
            <a href="food_menu.php?id=11">
              <img src="img/le-1.jpg" class="set">
              <div class="card-body">
                <div class="row">
                  <div class="col-50">
                    <span class="fs-5 fw-semibold text-white">Lassi Punjabi</span>
                  </div>
                  <div class="col-51">
                    <span class="fs-5 fw-semibold text-white">30% off</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 py-2">
          <div class="card  text-white" style="background-color:#9F8772;">
            <a href="food_menu.php?id=13">
              <img src="img/mui-1.jpg" class="set">
              <div class="card-body">
                <div class="row">
                  <div class="col-50">
                    <span class="fs-5 fw-semibold text-white">Maisur Dosa</span>
                  </div>
                  <div class="col-51">
                    <span class="fs-5 fw-semibold text-white">30% off</span>
                  </div>
                </div>
              </div>
          </div>
        </div>

        </a>
      </div>
    </div>


    <div class="country-description">
      <h4>Diwali Festivals Offer</h4>
    </div>

    <div class="container-fluid">
      <div class="row">

        <div class="col-md-3 py-2">
          <div class="card  text-white" style="background-color:#9F8772;">
            <a href="food_menu.php?id=12">
              <img src="img/pet.jpg" class="set">
              <div class="card-body">
                <div class="row">
                  <div class="col-50">
                    <span class="fs-5 fw-semibold text-white">Patra</span>
                  </div>
                  <div class="col-53">
                    <span class="fs-5 fw-semibold text-white">30% off</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 py-2">
          <div class="card  text-white" style="background-color:#9F8772;">
            <a href="food_menu.php?id=9">
              <img src="img/sen-1.jpg" class="set">
              <div class="card-body">
                <div class="row">
                  <div class="col-50">
                    <span class="fs-5 fw-semibold text-white">Sandwich</span>
                  </div>
                  <div class="col-52">
                    <span class="fs-5 fw-semibold text-white">50% off</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 py-2">
          <div class="card  text-white" style="background-color:#9F8772;">
            <a href="food_menu.php?id=9">
              <img src="img/pizza.jpg" class="set">
              <div class="card-body">
                <div class="row">
                  <div class="col-50">
                    <span class="fs-5 fw-semibold text-white">Pizza</span>
                  </div>
                  <div class="col-511">
                    <span class="fs-5 fw-semibold text-white">50% off</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <div class="col-md-3 py-2">
          <div class="card  text-white" style="background-color:#9F8772;">
            <a href="food_menu.php?id=9">
              <img src="img/sam-1.jpg" class="set">
              <div class="card-body">
                <div class="row">
                  <div class="col-50">
                    <span class="fs-5 fw-semibold text-white">Samosa</span>
                  </div>
                  <div class="col-53">
                    <span class="fs-5 fw-semibold text-white">30% off</span>
                  </div>
                </div>
              </div>
          </div>
        </div>

        </a>
      </div>
    </div>

  </section>

<!-- footer page -->
  <?php include 'footer.php'; ?>



</body>

</html>