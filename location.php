<?php

include('Header.php');

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Restaurant Location</title>
    <style>
       .mapouter{
        position:relative;
        text-align:right;
        height:97%;
        width:97%;
        margin-Top: -250px;
        }
        .col-50{
          margin-Top: 30px;
        }
    </style>
    <style>
       .gmap_canvas {
        overflow:hidden;
        height:100%;
        width:100%;
        }
   </style>
  </head>
  <body style="background-color:LightGray;">
   <div class="row">
     <div class="col-50">
       <div class="container-fluid">
         <h2 class="text-center">Khana Khazana Location</h2>
       </div>

       <br>
       <br>
       
       <!-- <div>
         <a class="hide-in-lg" href="tel:+4734494">
           <i class="icon-phone-enabled hide-in-lg ho-cm-icon ho-contact-icon"></i>
         </a>
         <a class="ho-contact-number hide-in-lg" style="display: inline;" href="tel:+4734494">
         <span class="ho-mail-to-txt cm-view-link-txt ho-cm-link-txt">+4734494 </span></a>
       </div> -->
       <div>
         <h4>
          .            .                .     .   Restaurant Policy .  . . 
         </h4>
         <ul style="font-size: 24px;">
            <!-- <li>Check-in time: 2:00 PM</li>
            <li>Check-out time: 12:30 Noon</li>
            <li>Early check-in and late check-out on request</li> -->
            <li>Pets are not allowed.</li>
            <li>No Drinking</li>
            <li>All Place in Restaurant are strict Prohibated non-smoking zones. </li>
            <li>Guests are welcome to our Restaurant For Office Work, including Personal Work.</li>
         </ul>
       </div> 
     </div>
    </div>
     
    <div class="row">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Khana Khazan&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" >
            </iframe>
         
        </div>
    </div>
    </div>
    <?php

    include('footer.php');

    ?>
  
  </body>
</html>
