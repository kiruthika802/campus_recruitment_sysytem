<?php

session_start();
require_once("db.php");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="admin.css">
    <title>Login</title>

    <link rel="icon" href="img/favicon.png" type="image/x-icon"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body class="entire_page">

  <font face="calibri">
   

  
  <div class="container Container_element" align="center">
    <div class="row">
    <div style=" height: 80px;">
    <p style="font-size: 34px; color:black; text-align: center; line-height: 73px;">Login</p>
  </div>

  <br>
  <br>

      <div style="background-color:lightblue; border: 1px solid black; width: 50%; height: 120px; border-radius: 5px;">
        <h1 style="color: black; line-height: 75px;"><a href="login.php" style="color: black;"> Candidate Login </a></h1>
      </div>
      <br>
      <br>
      <div style="background-color:lightblue; border: 1px solid black; width: 50%; height: 120px; border-radius: 5px;">
        <h1 style="color: black; line-height: 75px;"><a href="company-login.php" style="color: black;"> Company Login </a></h1>
      </div>
      <br>
      <br>
      <div style="background-color:lightblue; border: 1px solid black; width: 50%; height: 120px; border-radius: 5px;">
        <h1 style="color: black; line-height: 75px;"><a href="admin/index.php" style="color: black;"> Admin Login </a></h1>
      </div>
      <br><br>
      <div align="center">
            <a href="index.php"  style="text-align:center; color:rgb(40, 40, 102); font-size:30px; border-style:solid; border-radius:25px; border-width:2px; border-color:rgb(40, 40, 102); background-color:transparent; padding:10px;"> Back</a>
            </div>
            
            
      <br><br>
    <div align="center" style=" margin-top: 10px; height: 55px;">
      <a href="https://www.facebook.com/TataConsultancyServices" target="_blank"><img src="img/facebook.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;" /></a>
      <a href="https://www.twitter.com/tcs" target="_blank"><img src="img/twitter.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;" /></a>
      <a href="https://www.youtube.com/channel/UCaHyiyvJp4hhPNhIU7r9uqg" target="_blank"><img src="img/youtube.png" style="width: 30px; height: 30px; margin-left: 5px; margin-right: 5px;" /></a>
    </div>
    <br><br>
    </div>
  </div>

  <br>
  <br>

  

  </font>

  </body>
</html>