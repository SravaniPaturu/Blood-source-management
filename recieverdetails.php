<?php
     session_start();
 include("db.php");
 

 $query="select* from reciever";
 $result=mysqli_query($con,$query);
 ?>
 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width,initial-sacle=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>DONAR DETAILS</title>
        <link rel="icon" href="blood_drop1.png" type="image/png">
        <style>
            body{
                background-image: linear-gradient(to left,red,white);
            }
            
        </style>
    </head>
    <body>
    
    <div class="container>
       <div class="row mt-5">
        <div class="col">
            <div class="card mt-5">
                <div class="card-header">
                    <h2 class="display-6 text-center">RECIEVER DETAILS</h2>
                </diV>
            <div class="card-body">
            <table class="table table-bordered">
               <tr class="bg-dark text-white">
                <th>Patient Name</th>
                <th>Hospital</th>
                <th>Blood Type</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Units</th>
                <th>Gender</th>
                <th>Request</th>
               </tr>
               <tr>
                <?php
                  while($row=mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['pname'];?></td>
                  <td><?php echo $row['hospital'];?></td>
                  <td><?php echo $row['bloodtype'];?></td>
                  <td><?php echo $row['pnum'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['unit'];?></td>
                  <td><?php echo $row['gender'];?></td>
                  <td><a href="#" class="btn btn-primary">Aceept</a>
                  <a href="#" class="btn btn-primary">Reject</a></td>
                 </tr> 
                <?php
                  }
                ?>
               
           </table>
       </div>
     </div>
    </div>


    </body>    
        
    </html>