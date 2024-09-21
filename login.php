
<?php

//include function page
include_once('lib/functions/userFunction.php');

if(isset($_POST['btnlogin'])) {
    $result = Authentication($_POST['userName'],$_POST['userPass']);
    echo($result);
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    
    <!--Link Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap/bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image: url(login.jpg);">
<header style="background-color: black;">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12 col-12">
        <center><img src="logo.png" alt="logo" style="width: 80px; height: 80px;"><br>

        <h1 class="index" style="color: rgb(255, 255, 255)";><span class="text-info">I O I T</span> Sri Lanka</h1></center>
      </div>    
      <nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar bg-dark border-bottom border-body"
            data-bs-theme="dark">
            <div class="container">
              <a class="navbar-brand fs-2" href="index.php"><span class="text-info">I O I T</span> Sri Lanka</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6 text-center">
                  <li class="nav-item">
                    <a class="nav-link text-info" href="index.php">Back</a>
                </li>
                </ul>
              </div>
            </div>
          </nav>
</header>
  <div class="container" style="width:50%; margin: top 80px;">
    <div class="row">
        <div class="col-md-12" style="padding-top:50px;">
            <div class="card" style="background-color:rgba(0,0,0,0.4);color:white">
                <div class="card-header">
                    <h2>Login your account</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group mt-3">
                            <label for="">Enter Your User Name: </label>
                            <input type="text" name="userName" id="userName" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <label for="">Enter Your Password:  </label>
                            <input type="password" name="userPass" id="userPass" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" value="Login" name="btnlogin" class="btn btn-outline-info btn-sm">
                        </div>
                        <center><div class="form-group mt-3">
                            <h6> don't have an account? <a href="registration.php" style="text-decoration: none;" class="text-info">register now</a></h6>
                        </div></center>
                    </form>
                </div>
            </div>
        </div>
    </div></div>
</body>
</html>