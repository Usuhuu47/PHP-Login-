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

      <form class="form-signin" name="form1" method="post" action="createuser.php">
        <h2 class="form-signin-heading">Бүртгэл үүсгэх</h2>
        <input name="myusername" id="myusername" type="name" class="form-control" placeholder="Name" autofocus>
        <input name="myemail" id="myemail" type="email" class="form-control" placeholder="Email ID" autofocus>
        <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Confirm Password">
         <input name="retypepwd" id="retypepwd" type="password" class="form-control" placeholder="Re-Type Password">
        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Үүсгэх</button>

        <div id="message"></div>
      </form>
  </div>

   
    <script src="//code.jquery.com/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="js/create.js"></script>
    <script>document.getElementById("submit").disabled = true;</script>
    
  </body>
</html>
