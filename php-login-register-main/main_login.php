<?php
  session_start();

  if(isset($_SESSION['username'])){
    header("location:index.php");
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

      <form class="form-signin" name="form1" method="post" action="checklogin.php">
        <h2 class="form-signin-heading">Та нэвтэрнэ үү</h2>
        <input name="myemail" id="myemail" type="email" class="form-control" placeholder="Email ID" autofocus>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Нэвтрэх</button>

        <div id="message"></div>
      </form>
		        <a href="adduser.php" id="create" class="btn btn-lg btn-default">Бүртгэл үүсгэх</a>

    </div>


    <script src="//code.jquery.com/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="js/login.js"></script>
    
  </body>
</html>
