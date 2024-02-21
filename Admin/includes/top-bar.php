   <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../khana_khazana/index.php" class="nav-link">Vist Website</a>
      </li>
     
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     <li class="nav-item">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false">
          
        <?php if(isset($_SESSION['auth'])==true){echo $_SESSION['email'];}?>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         <a class="dropdown-item" href="#">Another action</a>
         <form action="code.php" method="POST">
          <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
         </form>
         <a class="dropdown-item" href="../../khana_khazana/userlogin.php">User Side</a>
         </div>
      </div>
      
      </li>
    </ul>
  </nav>
  <!-- /.navbar --