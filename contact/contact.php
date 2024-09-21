<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
   $message = $_POST['message'];
   $email = $_POST['email'];

   $sql = "INSERT INTO `contact`(`id`, `message`, `email`) VALUES (NULL,'$message','$email')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: contact.php?msg=New record created successfully");
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
    <title>Subjects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="contact2.css">
</head>

<body>
    <header>
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
                    <a class="nav-link " href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../crud2/add-new.php">Apply Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../subject.html">Subjects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info" href="contact.php">Contact Us</a>
                </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
  <div class="container2">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">No 45/2</div>
          <div class="text-two">Malabe</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+94 70 30 46 406</div>
          <div class="text-two">+94 72 67 76 504</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">ioitsrilanka@gmail.com</div>
          <div class="text-two">info.ioitsrilanka@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any question from us, you can send us message from here. It's our pleasure to help you.</p>
      <form action="" method="post">
        <div class="input-box">
          <input type="text" name="message" placeholder="Enter your message">
        </div>
        <div class="input-box">
          <input type="email" name="email" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
        </div>
        <div>
          <button type="submit" class="btn btn-info" name="submit" onclick="alert('Thank you for contact us, We will contact you soon')">Send</button>
        </div>
      </form>
    </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Services</h4>
          <ul>
            <li><a href="../about.html">about us</a></li>
            <li><a href="../subject.html">subjects</a></li>
            <li><a href="../crud2/add-new.php">apply now</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="../UGC.jpg">UGC Certificate</a></li>
            <li><a href="../logo.png">Logo</a></li>
            <li><a href="../subject.html">Staff</a></li>
            <li><a href="../location.html">Institute Map</a></li>
            <li><a href="../privecy.html">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div>
            <a href="https://web.whatsapp.com/"><img class="social-links" src="../whatsapp.png" alt="whatsapp"></a>
            <a href="https://www.facebook.com/login.php/"><img class="social-links" src="../facebook.png" alt="whatsapp"></a>
            <a href="https://www.instagram.com/"><img class="social-links" src="../instagram.jpg" alt="instagram"></a>
            <a href="https://lk.linkedin.com/"><img class="social-links" src="../linkd in.png" alt="whatsapp"></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>

    

  



