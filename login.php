<?php
     session_start();
 include("db.php");
 if($_SERVER['REQUEST_METHOD']=="POST")
 {  if(isset($_POST['$email']) && isset($_POST['password'])){
        $email=$_POST['email'];
    $password=$_POST['password'];
    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
        $query="select * from form where email='$email' limit 1";
        $result=mysqli_query($con,$query);
        if($result){
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data=mysqli_fetch_assoc($result);
                if($user_data['password']==$password)
                {
                    header("location: index.php");
                    die;
                }
            }
        }
        echo "<sript type='text/javascript'> alert('Wrong Username or Password')</script>";
    }
        else{
            echo "<sript type='text/javascript'> alert('Wrong Username or Password')</script>";
        }
    }
 }
 ?>
    
    
    
<!DOCTYPE html>
<html>
    <head>
        <meta cahrset="utf-8">
        <meta name="viewport" content="width-device-width,initial-sacle=1">
        <title>Form Login and Register</title>
    
    </head>
    <style>
        body{
            background-image: url(blood111.webp);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
        }
         .login{
            display:inline-block;
                width:400px;
                height: 500px;
                margin-left: 20px;
                padding-top:20PX;
                min-height:50PX;
                
    
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
    <body><center>
    
        <div class="login">
        <h1>Login</h1>
            <h4>It's free and only takes a few minutes</h4>
            <script>
            function log()
            {
                alert("Login successfull");
            }
            </script>


            <form method="POST">
            
                <label>Email:</label>
                <input type="email" name="" required>
                <label>password:</label>
                <input type="password" name="" required>
                <input type="submit" name="" value="Login" onclick="log">
            
           
            <p>Not have an account?<a href="signup.php">Sign Up here</a></p>
            <p><a href="homenew.php">->NEXT</a></p>
           
        </form>
        </div>
        </center>
    </body>
</html>