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
    $age=$_POST['age'];
    $weight=$_POST['weight'];
    
    if(!empty($email) && !is_numeric($email) )
    {
        $query="insert into donar(fname,lname,email,pnum,gender,address,bloodgroup,age,weight) values('$firstname','$lastname',' $email','$phonenumber','$gender','$address','$bloodgroup','$age','$weight')";
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
        <link rel="stylesheet" href="regist.css">
        <style>
            body{
                background-image: linear-gradient(to right,rgb(255, 255, 255),rgb(248, 120, 120));
            }
            form{
                display:inline-block;
                width:320px;
                margin-left: 20px;
                padding-top:20PX;
                min-height:50PX;
                
            }
           
form label{
    display: flex;
    margin-top: 20px;
    font-size: 18px;
    color: black;
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
            .don{
    width: 400px;
    height: 850px;
    margin: auto;
    background: white;
    border-radius: 3px;
    border-bottom:#a71515 3px solid;
                border-radius:12px;
                border:2px solid rgba(250,244,244,0.329);
                box-shadow:0 0 20px rgba(226,23,23,0.918);
}
            </style>
    </head>
    <body>
            <script>
                function donar()
                {
                    alert("Registered successfully");
                }
            </script>
            <center>
            <h1>DONOR REGISTRATION FORM</h1></center>
        <div class="don">
           
            <center>
            <form method="POST">
                <br><br>
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
                <label>Age:</label>
                <input type="text" name="age" required>
                <label>Weight:</label>
                <input type="text" name="weight" required>
                

                <input type="submit" name="" value="Submit" onclick="donar()">
            </form></center>
        </div>
    </body>
</html>