<?php
  if(isset($_REQUEST['type'])){
    $type = $_REQUEST['type'];
  }
?>

<nav class="navbar navbar-expand-lg fixed-top trans-navigation">
  <div class="container">
    <a class="navbar-brand" href="/">
      <h3><span class="bold">W</span>orld <span class="bold">T</span>rade <span class="bold">H</span>ub</h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
        <i class="fa fa-bars"></i>
      </span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="mainNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link smoth-scroll" href="/" id="navbarWelcome">
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link smoth-scroll" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link smoth-scroll grad-1 ebutton" href="http://app.worldtradehub.in/login">Login</a>
        </li>
        <?php
        if(!isset($_REQUEST['type'])){
        ?>
        <li class="dropdown nav-item">
          <div class="nav-link grad-1 ebutton">
            Register 
          </div>
          <div class="dropdown-content p-2">
            <a class="smoth-scroll" href="http://app.worldtradehub.in/register/exhibitor">Exhibitor</a>
            <a class="smoth-scroll" href="http://app.worldtradehub.in/register/visitor">Visitor</a>
          </div>
        </li>
        <?php
        }
        if(isset($_REQUEST['type']) && $type === 'v'){
        ?>
        <li class="nav-item">
          <a class="nav-link smoth-scroll grad-1 ebutton" href="http://app.worldtradehub.in/register/visitor">Register</a>
        </li>
        <?php
        }
        if(isset($_REQUEST['type']) && $type === 'e'){
        ?>
        <li class="nav-item">
          <a class="nav-link smoth-scroll grad-1 ebutton" href="http://app.worldtradehub.in/register/exhibitor">Register</a>
        </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>

<section id="countdown" class="wow fadeInUp">
  <div class="container">
    <div class="row grad-2 shadow justify-content-center">
      <div class="col-sm-2 col-2 counts text-center">
        <h3>2500+</h3>
        <h6>Exhibitors</h6>
      </div>
      <div class="col-sm-2 col-2 counts text-center">
        <h3>50,000+</h3>
        <h6>Visitors</h6>
      </div>
      <div class="col-sm-2 col-2 counts text-center">
        <h3>10,000+</h3>
        <h6>Products</h6>
      </div>
      <div class="col-sm-4 col-3 counts text-center">
        <h3 class="count date-count">1532</h3>
        <h6>Starts On</h6>
      </div>
    </div>
  </div>
</section>