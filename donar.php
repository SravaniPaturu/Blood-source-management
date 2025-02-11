<?php
session_start();
 include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
    body{
        background-image: linear-gradient(to left,red,white);
    }
.button {
  background-color: #fa2d2d; 
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer; 
  width: 300px;

}
.button {border-radius: 8px;}
.button1 {border-radius: 8px;}
.button2 {border-radius: 8px;}
.button3 {border-radius: 8px;}
.button4 {border-radius: 8px;}
.button5 {border-radius: 8px;}
.button6 {border-radius: 8px;}
.button7 {border-radius: 8px;}
.button8 {border-radius: 8px;}
.button8 {border-radius: 8px;}
.button9 {border-radius: 8px;
    background-color: #2dfa4f; 
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer; 
  width: 300px;
  }

h1{
    text-align: center;
}

</style>
</head>
<body>
    
<center>
  <a href="donarreg.php" color="green"><button class="button button">+ ADD A DONAR<button></a></center>
<h1>BLOOD GROUP</h1>
<center>
<a href="A+.php"><button class="button button1">A+</button></a><br>
<a href="A-.php"><button class="button button2">A-</button></a><br>
<a href="B+.php"><button class="button button3">B+</button></a><br>
<a href="B-.php"><button class="button button4">B-</button></a><br>
<a href="AB+.php"><button class="button button5">AB+</button></a><br>
<a href="AB-.php"><button class="button button6">AB-</button></a><br>
<a href="O+.php"><button class="button button7">O+</button></a><br>
<a href="O-.php"><button class="button button8">O-</button></a><br>
</center>



</body>
</html>
