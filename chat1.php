<?php
     session_start();
    if(!(isset($_SESSION['NAME'])))
    {   
               echo"<script>
                    location.href='index.php';
                </script>";
   
    }   
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Chat Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="index_css.css"/>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 70%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
</head>
<body>

<h2>Chat Messages</h2>
<a href="logout.php" style="margin-left:1000px;">logout</a>
<div class="container">
  <img src="bill.jpg" alt="Avatar" style="width:100%;">
  <p>Hello. How are you today?</p>
  <span class="time-right">
  <?php
      date_default_timezone_set("Asia/Kolkata");
      echo date('h:i',time());
      ?></span>
</div>

<div class="container darker">
  <img src="elon.jpg" alt="Avatar" class="right" style="width:100%;">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left"><?php
      date_default_timezone_set("Asia/Kolkata");
      echo date('h:i',time());
      ?></span>
</div>

<div class="container">
  <img src="bill.jpg" alt="Avatar" style="width:100%;">
  <p>Sweet! So, what do you wanna do today?</p>
  <span class="time-right">
     <?php
      date_default_timezone_set("Asia/Kolkata");
      echo date('h:i',time());
      ?></span>
</div>

<div class="container darker">
  <img src="elon.jpg" alt="Avatar" class="right" style="width:100%;">
  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
  <span class="time-left"><?php
      date_default_timezone_set("Asia/Kolkata");
      echo date('h:i',time());
      ?></span>
</div>

<div class="container">
  <img src="bill.jpg" alt="Avatar" style="width:100%;">
  <p>hii</p>
  <span class="time-right"><?php
      date_default_timezone_set("Asia/Kolkata");
      echo date('h:i',time());
      ?></span>
</div>
<div class="container">
<form  action="" method="post" >
   <input type="text" name="message" class="form-control" placeholder="Type a message"/>
</form>
    </div>
</body>
</html>
