<?php
     session_start();
 include("db.php");
 ?>
 <!DOCTYPE html>
<html>
    <head>
        <meta cahrset="utf-8">
        <meta name="viewport" content="width-device-width,initial-sacle=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
        <title>Responsive Contact Page </title>
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            body{
                font-family: 'Outfit';
                background: linear-gradient(to right,red,white);
                background-image: url(con.jpeg);
                background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
            }
            .one{
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: space-evenly;
            }
            .two{
                display: flex;
                flex-direction: column;
                width: 430px;
                height: 400px;
                gap: 20px;
                
    border: 1px solid black;
    align-items: center;
    margin: auto;
    margin-top: 50px;
    background-color: rgba(0,0,0,0.5);
    box-shadow: inset -5px -5px rgba(0,0,0,0.5);
    border-radius: 25px;
            }
            .three h2{
                font-weight: 600;
                color: red;
                font-size: 40px;
                margin-bottom: 5px;
            }
            .three hr{
                border: none;
                width: 120px;
                height: 5px;
                background-color: red;
                border-radius: 10px;
                margin-bottom: 20px;
            }
            .four{
                width: 400px;
                height: 50px;
                border: none;
                outline: none;
                padding-left: 25px;
                font-weight: 500;
                color: #666;
                border-radius: 50px;
            }
            .four:focus{
                border: 2px solid #ff994f;
            }
            .four::placeholder{
                color: #a9a9a9;
            }
            .two button{
                display: flex;
                align-items: center;
                padding: 15px 30px;
                font-size: 16px;
                color: black;
                gap: 10px;
                border: none;
                border-radius: 50px;
                background-color: #ff994f;
                cursor: pointer;
            }
            .five{
                display: flex;
                flex-direction: column;
                width: 300px;
                height: 200px;
                gap: 20px;
                
    border: 1px solid black;
    align-items: center;
    margin: auto;
    margin-top: 50px;
    background-color:rgb(163, 197, 253);
    box-shadow: inset -5px -5px rgba(0,0,0,0.3);
    border-radius: 25px;
            }
        
            
        </style>
    
    </head>
    <body>
        <div class="one">
            <form action="" class="two">
                <div class="three">
                    
                    <h2>Get in touch</h2>
                    <hr>

                </div>
                <input type="text" name="name" placeholder="Your Name" class="four" required>
                <input type="email" name="email" placeholder="Your Email" class="four" required>
                <textarea rows="30" cols="50" name="message" placeholder="Your Message" class="four" required></textarea>
                <button type="submit">Submit</button>
             </form>
             <div class="five">
             
            
            <h1 style="font-size: 20px; font-style:italic; text-color:red ;font-weight:bold;">Contact Information</h1>
            <p><i class="fa fa-phone" aria-hidden="true"></i>+91 7013765523</p>
            <p>info@example.com</p>
            <p>MVJ ,whitefield,banglore,karnataka</p>

        
             </div>
        </div>
    </body>