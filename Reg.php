<?php
include "conn.php";
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
<<div class="container">
            <div class="row">
                    <div class="col-lg-4 m-auto">
                        <form method="post">
                            <div class="input-group-lg mb-2">
                                <input type="text" class="form-control" placeholder="Enter Your Name">
                            </div>

                            <div class="input-group-lg mb-2">
                                <input type="text" class="form-control" placeholder="Enter The Username">
                            </div>

                            <div class="input-group-lg mb-2">
                                <input type="password" class="form-control" placeholder="Enter The Password">
                            </div>

                            
                            <div class="input-group-lg mb-2">
                                <input type="password" class="form-control" placeholder="Re-Enter The Password">
                            </div>

                            
                            <div class="input-group-lg mb-2">
                                <input type="mobile" class="form-control" placeholder="Enter The Mobile">
                            </div>




                            <h5><a href="regsuccessfully.php"><button type="button" class="btn btn-primary col-lg-12 fw-bold fs-5 mb-2">Register</button></a></h5>
                            
                            
                        </form>
                            
                    </div>
              
            </div>
        </div>
</body>
</html>