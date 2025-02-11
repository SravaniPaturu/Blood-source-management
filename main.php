<?php
     session_start();
 include("db.php");
 ?>
 <!DOCTYPE HTML>
<html>
    <head>
        <title>BLOOD SOURCE</title>
        <style>
            
            .one {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}       
.one{border-radius: 12px;}
.two {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}       
.two{border-radius: 12px;}   
body {
  background-image: url(blood.webp);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.one
{

}
        </style>
    </head>
    <body>
        
        

        <p style="font-size: 100px; font-style: italic; font-weight: 100; text-align: center; text-shadow: black 12px -24px 20px;">BLOOD SOURCE</p>
        <center>
            <a href="login.php"><button class="one">LOGIN</button></a><br>
            

        </center>
    </body>
</html>