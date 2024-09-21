<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $subject = $_POST['subject'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];

   $sql = "INSERT INTO `crud`(`id`, `first_name`, `last_name`, `subject`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$subject','$email','$gender')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=You have registered successfully. We will contact you soon");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../homeStyle.css">
</head>

<body style="background-image: url(../login.jpg);">
  <header style="background-color: aliceblue;">
  <div class="row">
      <div class="col-sm-12 col-md-2 col-lg-2 col-12">
        <center><img src="../logo.png" alt="logo" style="width: 80px; height: 80px;"></center>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4 col-12">
        <h1 class="index"><span class="text-info">I O I T</span> Sri Lanka</h1>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-12">
        <center><h1 class="index">Student Page</h1></center>
      </div>
      </header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar bg-dark border-bottom border-body"
        data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand fs-2" href="../index.php"><span class="text-info">I O I T</span> Sri Lanka</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6 text-center">
            <li class="nav-item">
                <a class="nav-link text-info" href="../index.php">Back</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<br>
   <div class="container" style="background-color: rgba(240, 248, 255, 0.555);">
      <div class="text-center mb-4"><br><br>
         <h2>Fill your details</h2>
         <p class="text-muted">Complete the form below to join with us</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="first_name" placeholder="Your First Name">
               </div>

               <div class="col">
                  <label class="form-label">Last Name:</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Your Last Name">
               </div>
            </div>
            <div class="mb-3">
                  <label class="form-label">Subject:</label>
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" placeholder="example@gmali.com">
            </div>

            <div class="form-group mb-3">
               <label>Gender:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="male" value="male">
               <label for="male" class="form-input-label">Male</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="female" value="female">
               <label for="female" class="form-input-label">Female</label>
            </div>

            <div>
               <button type="submit" class="btn btn-info" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div>
            <br><br>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>