<?php
session_start();
 include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Blood Source</title>
    <link rel="icon" href="blood_drop1.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <!DOCTYPE html>
<html>
<head>
    <title>Blood Source</title>
    <link rel="icon" href="blood_drop1.png" type="image/png">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image:linear-gradient(to right,white,rgb(255, 111, 111));
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        #header {
            background-color: #7ca5f0;
            color: white;
            padding-top: 20px;
            min-height: 50px;
            border-bottom: #a71515 3px solid;
        }
        #header h1 {
            margin: 0;
            padding: 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="container">
            <h1>Blood Source</h1>
            <h3 style="text-align: center;"><i>Be a life-saver, one drop at a time.</i></h3>
        </div>
    </header>
    <script>
    </script>
</body>
<head>
    <style>
    ul {
      list-style-type:none ;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: white;
      border-bottom: #a71515 3px solid;
      display:block;
    }
    
    li {
      float: left;
    }
    
    li a {
      display:grid;
      color: rgb(0, 0, 0);
      text-align: center;
      padding: 26px;
      text-decoration: none;
    }
    
    li a:hover {
      background-color: #a71515 ;
      color:white;
    }
    </style>
    </head>
    <body>
        
        <ul>
            <li><img src="blood_drop1.png" height="55px" width="55px"></li>
            <li><a href="#">HOME</a></li>
            <li><a href="donar.php">DONORS</a></li>
            <li><a href="reciever.php">RECEIVERS</a></li>
            <li><a href="recieverdetails.php">REQUEST HISTORY</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="contactus.php">CONTACT US</a></li>
            <li style="background-color:#a71515"><a href="thank.html">LOG OUT</a></li>
          </ul>
    
    </body></head>
    <body>
        <center>
           <a href="donar.php"><button class="one">DONORS</button></a><br>
           <a href="reciever.php"><button class="two">RECEIVER</button></a><br>
        </center>
    </body>
    <head>
        <style>            
        .one{
            background-color: #f04444;
              border: none;
              color: white;
              padding:50px 50px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 20px;
              margin: 50px 50px;
              cursor: pointer;
            border-radius: 12px;
            border: 2px solid rgba(250, 244, 244, 0.329); 
            box-shadow: 0 0 20px rgba(226, 23, 23, 0.918); 
        }
        .one:hover{
            background-color: #a71515;
        }
            .two {
                background-color: #f04444;
              border: none;
              color: white;
              padding:50px 50px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 17px;
              margin: 50px 50px;
              cursor: pointer;
            border-radius: 12px;
            border: 2px solid rgba(250, 244, 244, 0.329); 
            box-shadow: 0 0 20px rgba(226, 23, 23, 0.918); 
            }  
            .two:hover{
            background-color: #a71515;
        </style>
    </head>
</html>