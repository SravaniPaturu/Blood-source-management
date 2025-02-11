<?php
     session_start();
 include("db.php");
 if($_SERVER['REQUEST_METHOD']=="POST")
 { if(isset($_POST['pname']) && isset($_POST['hospital']) && isset($_POST['bloodtype']) && isset($_POST['pnum']) && isset($_POST['unit']) && isset($_POST['gender'])){
    $pname=$_POST['pname'];
    $hospital=$_POST['hospital'];
    $blood_type=$_POST['bloodtype'];
    $pnum=$_POST['pnum'];
    $email=$_POST['email'];
    $unit=$_POST['unit'];
    $gender=$_POST['gender'];
    
    
    if(!empty($email) && !is_numeric($email) )
    {
        $query="insert into reciever(pname,hospital,bloodtype,pnum,email,unit,gender) values('$pname','$hospital',' $blood_type','$pnum','$email','$unit','$gender')";
        mysqli_query($con,$query);
        echo "<sript type='text/javascript'> alert('Successfully Register')</script>";

    }
    else{
        echo "<sript type='text/javascript'> alert('Please Ebter Some Valid Information')</script>";

    }
 }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta cahrset="utf-8">
        <meta name="viewport" content="width-device-width,initial-sacle=1">
        <title>Blood Request Form</title>
        
        <style>
            body{
                background-image:url(bggg.jpeg);
              
            }
            form{
                display:inline-block;
                width:450x;
                height: 500px;
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
#blood{
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
                function reciever()
                {
                    alert("Requested successfully");
                }
            </script>
            <center>
            <h1>BLOOD REQUEST FORM</h1></center>
        <div class="don">
           
            <center>
            <form method="POST">
                <br><br>
               <label>Patient Name:</label>
               <input type="text" name="pname" required>
               <label>Hospital Name:</label>
               <input type="text" name="hospital" required>
                <label>Blood Type:</label>
                <input type="text" name="bloodtype" required>
                <label> Phone Number:</label><input type="tel" name="pnum" required>
                <label> Email:</label>
                <input type="email" name="email" required>
                <label>Unit:</label>
                <input type="text" name="unit" required>
           
                <label>Gender:</label>  <br/>     
                <input type="text" name="gender" required>
                </select>
                <p style="text-align: center;"><a href="donar.php">SELECT A DONOR</a></p>
                <p style="text-align: center;"><a href="form.php">SEND REQUEST TO DONOR</a></p>
                

                <input type="submit" name="" value="Submit" onclick="reciever()">
            </form></center>
        </div>
    </body>
</html>