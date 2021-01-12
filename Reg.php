<?php
include "conn.php";

session_start();
   
  


if(isset($_POST['reg']))
{
    
  

$Name=$_POST['name'];
$uname=$_POST['username'];
$pass=($_POST['password']);
$mob=$_POST['mobile'];



$sql = "INSERT INTO data (name,username,password,mobile)VALUES ('$Name','$uname','$pass','$mob')";

if ($conn->query($sql) === TRUE) {

    header("Location: regsuccessfully.php"); 
  
    exit;
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <meta http-equiv="refresh" content="300" >
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
            <div class="row">
                    <div class="col-lg-4 m-auto">

                        <form method="post">
                        <div class="card-header bg-primary">
                                    <h1 class="text-center text-white">Registration Form</h1>
                                </div>

                            <div class="input-group-lg mb-2">
                                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" required>
                            </div>

                            <div class="input-group-lg mb-2">
                                <input type="text" class="form-control" placeholder="Enter The Username"name="username" required>
                            </div>

                            <div class="input-group-lg mb-2">
                                <input type="password" class="form-control" placeholder="Enter The Password"name="password" required>
                            </div>

                            
                            
                            <div class="input-group-lg mb-2">
                                <input type="mobile" class="form-control" placeholder="Enter The Mobile"name="mobile" required>
                            </div>


                           
                            <h5><button type="Registration" class="btn btn-primary col-lg-12 fw-bold fs-5 mb-2 mt-5" name="reg">Registration</button></a></h5>
                            
                        </form>
                            
                    </div>
              
            </div>
        </div>
</body>
</html>