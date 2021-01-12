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

<?php
include "conn.php";

session_start();

   
   if(isset($_POST['LogIn'])){
                                                            
      $uname = stripslashes($_REQUEST['username']);
      $uname = mysqli_real_escape_string($conn, $uname); 
      $pass = stripslashes($_REQUEST['password']);
      $pass = mysqli_real_escape_string($conn, $pass);
      

      $query    = "SELECT * FROM `data` WHERE username='$uname'AND password='" .$pass. "'";
      $result = mysqli_query($conn, $query) or die(mysql_error());
      $rows = mysqli_num_rows($result);

      if ($rows>0) {
          $_SESSION['username'] = $uname;
      
          header("Location:home.php");
      } 
      else {
          echo "<div class='form'>
                <h3>Incorrect Username/password</h3><br/>
                
                </div>";
      }
    }
?>

        <div class="container">
            <div class="row">
                    <div class="col-lg-4 m-auto">
                        <form method="post">
                        <div class="card-header bg-primary">
                                    <h1 class="text-center text-white">Login Form</h1>
                                </div>

                            <div class="input-group-lg mb-2 mt-4">
                                <input type="text" class="form-control" placeholder="Email address and phone number" name="username" required>
                            </div>

                            <div class="input-group-lg mb-2">
                                <input type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>

                            <input type="submit" class="btn btn-primary col-lg-12 fw-bold fs-5 mb-2" name="LogIn" value="LogIn">
                            <a href="forgotpwd.php"><p class="text-primary text-center mt-2">Forgotten password?</p></a>
                        </form>
                            <div class="text-center">
                                <h5><a href="Reg.php"><button type="button" class="btn btn-success col-lg-7 fw-bold fs-6 mb-2 mt-5"><p>Create New Account</button></a></h5>
                            </div>
                    </div>
              
            </div>
        </div>
    
</body>
</html>