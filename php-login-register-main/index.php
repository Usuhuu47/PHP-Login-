<?php
  session_start();

  if(!isset($_SESSION['username'])){
    header("location:main_login.php");
  }
  else{
  echo "Welcome  ".$_SESSION['username'];
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Нэвтрэх</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <div class="form-signin">
        <div class="alert alert-success">Та <strong>амжилттай нэвтэрсэн</strong>.</div>
        <a href="logout.php" class="btn btn-default btn-lg btn-block">Гарах</a>
      </div>
    </div> 
  </body>
</html>
