<?php
     session_start();
 include("db.php");
 if($_SERVER['REQUEST_METHOD']=="POST")
 {
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['pnum'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $bloodgroup=$_POST['bloodgroup'];
    $password=$_POST['password'];
    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
        $query="insert into form(fname,lname,email,pnum,gender,address,bloodgroup,password) values('$firstname','$lastname',' $email','$phonenumber','$gender','$address','$bloodgroup','$password')";
        mysqli_query($con,$query);
        echo "<sript type='text/javascript'> alert('Successfully Register')</script>";

    }
    else{
        echo "<sript type='text/javascript'> alert('Please Ebter Some Valid Information')</script>";

    }
 }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta cahrset="utf-8">
        <meta name="viewport" content="width-device-width,initial-sacle=1">
        <title>Form Login and Register</title>
        <style>
            body{
                background-image: url(blood111.webp);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
            }
            .signup{
            display:inline-block;
            height: 950px;
                width:400px;
                margin-left: 20px;
                padding-top:20PX;
                min-height:70PX;
                display: flex;
    flex-direction: column;
    border: 1px solid black;
    align-items: center;
    margin: auto;
    margin-top: 50px;
    background-color: rgba(0,0,0,0.5);
    box-shadow: inset -5px -5px rgba(0,0,0,0.5);
    border-radius: 25px;}
    h1{
    text-align: center;
    color: white;
}
h4{
    text-align: center;
    padding-top: 15px;
    color: white;
}
form{
    width: 300px;

    margin-left: 20px;
    
}
form label{
    display: flex;
    margin-top: 20px;
    font-size: 18px;
    color: white;
}
form input{
    width: 100%;
    padding: 7px;
    border: none;
    border-radius: 6px;
    border: 1px solid gray;
    outline: none;
}
input[type="submit"]{
    width: 300px;
    height: 35px;
    margin-top: 20px;
    background-color: #ff7200;
    border: none;
    color: white;
    font-size: 18px;
    cursor: pointer;
}

p{
    text-align: center;
    padding-top: 20px;
    font-size: 15px;
    color: white;
}
    </style>
    </head>
    <body>
            <script>
                function sign()
                {
                    alert("Registered successfully");
                }
            </script>
        <div class="signup">
            <h1>Sign Up</h1>
            <h4>It's free and only takes a few minutes</h4>
            <center><form method="POST">
               <label>First Name:</label>
               <input type="text" name="fname" required>
               <label>Last Name:</label>
               <input type="text" name="lname" required>
                <label>Email:</label>
                <input type="email" name="email" required>
                <label> Phone Number:</label><input type="tel" name="pnum" required>
                <label>Gender:</label>
                <input type="text" name="gender" required>
                <label>Address:</label>
                <input type="text" name="address" required>
                <label>Blood Group:</label>
                <input type="text" name="bloodgroup" required>
                <label>password:</label>
                <input type="password" name="password" required>
                <input type="submit" name="" value="Submit" onclick="sign()">
            </form></center>
            <p>By clicking the Sign Up button,you agree to our<br>
                <a href="">Terms and condition</a>and<a href="#">Policy Privacy</a></p>
                <p>Already have an account?<a href="login.php">Login Here</a></p>
        </div>
    </body>
</html>