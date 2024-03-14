<?php
include('./header.php')
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!--bootstrap cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
<!-- custom css file link -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
  #popular-stream {
    color: white;
    text-align: center !important;
  }
</style>
<div class= "container mt-5">
   <h1 class= "text-center" id="popular-stream" >Popular Streams</h1>
   <!-- Start Most Popular Course 1st Card Deck -->
   <div class="card-deck mt-4">
  <!-- Engineering Colleges -->
  <a href="./courses/see1.php" class="btn" style="text-align: left; padding:0px; margin:0px;">
    <div class="card">
      <img src="./image/engi.jpg" class="card-img-top" alt="Engineering" />
      <div class="card-body">
        <h5 class="card-title">Engineering Colleges</h5>
      </div>
      <div class="card-footer">
        <a class="btn btn-primary text-white font-weight-bolder float-right" href="./courses/see1.php">See</a>
      </div>
    </div>
  </a>

  <!-- Medical Colleges -->
  <a href="./courses/see2.php" class="btn" style="text-align: left; padding:0px; margin:0px;">
    <div class="card">
      <img src="./image/medical.jpg" class="card-img-top" alt="Medical" />
      <div class="card-body">
        <h5 class="card-title">Medical Colleges</h5>
      </div>
      <div class="card-footer">
        <a class="btn btn-primary text-white font-weight-bolder float-right" href="./courses/see2.php">See</a>
      </div>
    </div>
  </a>

  <!-- Management Colleges -->
  <a href="./courses/see3.php" class="btn" style="text-align: left; padding:0px; margin:0px;">
    <div class="card">
      <img src="./image/management.jpg" class="card-img-top" alt="Management" />
      <div class="card-body">
        <h5 class="card-title">Management Colleges</h5>
      </div>
      <div class="card-footer">
        <a class="btn btn-primary text-white font-weight-bolder float-right" href="./courses/see3.php">See</a>
      </div>
    </div>
  </a>
</div>

<div class="card-deck mt-4">
  <!-- Law Colleges -->
  <a href="./courses/see4.php" class="btn" style="text-align: left; padding:0px; margin:0px;">
    <div class="card">
      <img src="./image/law.jpg" class="card-img-top" alt="Law" />
      <div class="card-body">
        <h5 class="card-title">Law Colleges</h5>
      </div>
      <div class="card-footer">
        <a class="btn btn-primary text-white font-weight-bolder float-right" href="./courses/see4.php">See</a>
      </div>
    </div>
  </a>

  <!-- Hotel Management Colleges -->
  <a href="./courses/see5.php" class="btn" style="text-align: left; padding:0px; margin:0px;">
  <div class="card">
    <img src="./image/hotel.jpg" class="card-img-top" alt="Hotel Management" />
    <div class="card-body">
      <h5 class="card-title">Hotel Management Colleges</h5>
    </div>
    <div class="card-footer">
      <a class="btn btn-primary text-white font-weight-bolder float-right" href="./courses/see5.php">See</a>
    </div>
  </div>
</a>

  <!-- Agriculture Colleges -->
  <a href="./courses/see6.php" class="btn" style="text-align: left; padding:0px; margin:0px;">
    <div class="card">
      <img src="./image/agriculture.jpg" class="card-img-top" alt="Agriculture" />
      <div class="card-body">
        <h5 class="card-title">Agriculture Colleges</h5>
      </div>
      <div class="card-footer">
        <a class="btn btn-primary text-white font-weight-bolder float-right" href="./courses/see6.php">See</a>
      </div>
    </div>
  </a>
</div>
<style> 
 .button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #49c8d6;
    color: #000;
    text-decoration: none;
    border: 1px solid #ffffff;
    border-radius: 4px;
    font-size: 16px;
  }
  </style>
