<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/profile.php?id=100091131049190" role="button" target="_blank"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/KhanaKh92619828" role="button" target="_blank"><i class="fab fa-twitter"></i></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/khana_khazana08/" role="button" target="_blank"><i class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a> -->

      <!-- Section: Social media -->

      <section class="py-3">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->

          <div class="<?php if (basename($_SERVER['PHP_SELF']) == 'location.php') {
                        echo 'col-lg-6';
                      } else {
                        echo 'col-lg-3';
                      } ?> col-md-6 mb-4 mb-md-0">
            <div class="d-flex justify-content-start flex-column align-items-start">
              <span class="text-uppercase" style="font-size: 20px;">Customer Services</span>
            </div>
            <ul class="list-unstyled mb-0 d-flex justify-content-start flex-column align-items-start" style="font-size: 20px;">

              <li>
                <a href="location.php">Customer Location</a>
              </li>
              <li>
                <a href="review.php">Customer Review</a>
              </li>
              <li>
                <a href="conta.php">Contact Us</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="<?php if (basename($_SERVER['PHP_SELF']) == 'location.php') {
                        echo 'col-lg-6';
                      } else {
                        echo 'col-lg-3';
                      } ?> col-md-6 mb-4 mb-md-0">
            <div class="d-flex justify-content-start flex-column align-items-start">
              <span class="text-uppercase" style="font-size: 20px;">Get Help</span>
            </div>
            <ul class="list-unstyled mb-0 d-flex justify-content-start flex-column align-items-start" style="font-size: 20px;">
              <li>
                <a href="contact_us.php">Feedback</a>
              </li>
              <li>
                <a href="services.php">Popular Food</a>
              </li>
              <li>
                <a href="term_condition.php">Term And Condition</a>
              </li>
              <!-- <li>
              <a href="#!" >Shipping</a>
            </li>
            <li>
              <a href="#!" class="Payment.php">Payment Options</a>
            </li> -->
            </ul>
          </div>
          <!--Grid column-->


          <!--Grid column-->
          <!-- <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
         <div class="d-flex justify-content-start flex-column align-items-start">
          <span class="text-uppercase">Food Dish</span>
          </div>

          <ul class="list-unstyled mb-0 d-flex justify-content-start flex-column align-items-start">
            <li>
              <a href="#!" >Breakfast Dish</a>
            </li>
            <li>
              <a href="#!" >Fast Dish</a>
            </li>
            <li>
              <a href="#!" >Gujrati Dish</a>
            </li>
            <li>
              <a href="#!" >Cold Drink</a>
            </li>
          </ul>
        </div> -->
          <!--Grid column-->
          <?php if (basename($_SERVER['PHP_SELF']) !== 'location.php') { ?>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <div class="d-flex justify-content-start flex-column align-items-start">
                <span class="text-uppercase" style="font-size: 20px;">LOCATE US</span>
              </div>

              <div class="d-flex justify-content-start flex-column align-items-start">
                <div class="gmap_canvas">
                  <iframe width="650" height="150" id="gmap_canvas" src="https://maps.google.com/maps?q=Khana Khazan&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no">
                  </iframe>
                </div>
              </div>


              <ul class="list-unstyled mb-0 d-flex justify-content-start flex-column align-items-start">
                <!-- <li>
              <a href="#!" >FAQ</a>
            </li>
            <li>
              <a href="#!" >shipping</a>
            </li>
            <li>
              <a href="#!" >order status</a>
            </li> -->

              </ul>
            </div>
          <?php } ?>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    <h4 style="color:white; ">©2023 KhanaKhazana Resturant. All Rights Reserved.</h4>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->