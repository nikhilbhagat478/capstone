<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
  <a class="navbar-brand" href="#">Medstore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about-us.php">About Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact-us.php">Contact Us</a>
      </li>
    </ul>

    <span class="my-2 my-lg-0 nav-item">
      <?php
        if(isset($_SESSION['id']))
        {
          ?>
            <a href="userhome.php" class="btn btn-primary btn-sm">Profile</a>
            <a href="my-orders.php" class="btn btn-warning btn-sm">My Orders</a>
          <?php   
        }
        else
        {
          ?>
            <a href="login.php" class="btn btn-primary btn-sm">Login</a>
            <a href="signup.php" class="btn btn-success btn-sm">Signup</a>
          <?php
        }
      ?>
    </span>
  </div>
</nav>