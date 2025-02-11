<?php
     session_start();
 include("db.php");?>
 <!DOCTYPE html>
<html>
<head>
    <title>About Us - Blood Source</title>
    <link rel="icon" href="blood_drop1.png" type="image/png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right,white,rgb(255, 111, 111));
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .header {
            text-align: center;
            padding: 20px;
            background-color:blueviolet;
            color: white;
        }
        .content {
            margin-top: 20px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="header">
            
            <h1>About Us</h1>
        </div>
        <div class="content">
            <h2>Who We Are</h2>
            <p>Welcome to Blood Source, your reliable platform for blood donation. We are dedicated to connecting generous blood donors with those in dire need. Our community is composed of altruistic individuals who believe in the power of giving and the impact it can make on someone’s life.</p>
            <h2>Our Mission</h2>
            <p>
                Our mission is to ensure that no one in need of a blood transfusion goes without. We strive to make the process of donating and receiving blood as seamless and efficient as possible. We believe that by fostering a community of generous donors, we can meet the needs of those in critical situations and contribute to saving lives.  
            </p>
            <h2>How We Work</h2>
            <p>Our platform is designed to be user-friendly and efficient. Donors and recipients can easily register, navigate, and connect. We ensure that all blood donations are safe, and we adhere to strict health and safety guidelines.</p>
            <h2>Contact Us</h2>
            <p>For any inquiries or support, please feel free to reach out to us. We are always here to help.</p><br>
            <p><b>Thank you for being a part of our life-saving mission.</b></p>
        </div>
    </div>
</body>
</html>