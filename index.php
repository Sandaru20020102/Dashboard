<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="homeStyle2.css">
</head>

<body>
  <header>
    <div class="row">
      <div class="col-sm-12 col-md-2 col-lg-2 col-12">
        <center><img src="logo.png" alt="logo" style="width: 80px; height: 80px;"></center>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4 col-12">
        <h1 class="index"><span class="text-info">I O I T</span> Sri Lanka</h1>
      </div>
      <div class="col-sm-12 col-md-2 col-lg-2 col-12"><br> 
        <center><a class="btn" href="crud2/add-new.php" role="button">Apply Now</a></center>
      </div>

      <div class="col-sm-12 col-md-4 col-lg-4 col-12"><br>        
        <center><a class="btn" href="login.php" role="button">SignIn</a>
        <a class="btn" href="registration.php" role="button">SignUp</a></center>
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
                    <a class="nav-link text-info" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="crud2/add-new.php">Apply Now</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="subject.html">Subjects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact/contact.php">Contact Us</a>
                </li>
                </ul>
              </div>
            </div>
          </nav>

      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="home1.jpg" class="d-block w-100" alt="home1">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-weight: 900; font-size: 30px; color: rgb(255, 255, 255);">We are smart</h5>
              <p>We have lot of students.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="home2.jpg" class="d-block w-100" alt="home2">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-weight: 900; font-size: 30px; color: rgb(0, 0, 0);">Class rooms</h5>
              <p>We have smart class rooms.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="home3.jpg" class="d-block w-100" alt="home3">
            <div class="carousel-caption d-none d-md-block">
              <h5 style="font-weight: 900; font-size: 30px; color: rgb(255, 255, 255);">Staff</h5>
              <p>We have qualified lecture panel.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

  </header>
  <section class="about my-5">
    <div class="container">
      <div class="text-center">
        <h1>Welcome to <span class="text-info">I.O.I.T </span> Sri Lanka</h1>
        <hr class="w-50 m-auto">
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-12"><br>
          <p class="p-2">Welcome to I.O.I.T. Institute,where excellence meets innovation in education.
            At Institute Of Information Technology in Sri Lanka, we are dedicated to fostering a dynamic learning
            environment that
            empowers students to thrive academically, personally, and professionally.
          </p>
          <a class="btn btn-primary" href="about.html" role="button">More About Us</a>
          <a class="btn btn-primary" href="crud2/add-new.php" role="button">Join With Us</a>
        </div><br><br>
        <div class="col-sm-12 col-md-6 col-lg-6 col-12">
          <div class="text-center">
            <img src="logo.png" alt="logo" class="logo">
            <h1><span class="text-info">I.O.I.T. </span>Sri Lanka</h1>

          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>Services</h4>
          <ul>
            <li><a href="about.html">about us</a></li>
            <li><a href="subject.html">subjects</a></li>
            <li><a href="crud2/add-new.php">apply now</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Quick Links</h4>
          <ul>
            <li><a href="UGC.jpg">UGC Certificate</a></li>
            <li><a href="logo.png">Logo</a></li>
            <li><a href="subject.html">Staff</a></li>
            <li><a href="location.html">Institute Map</a></li>
            <li><a href="privecy.html">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div>
            <a href="https://web.whatsapp.com/"><img class="social-links" src="whatsapp.png" alt="whatsapp"></a>
            <a href="https://www.facebook.com/login.php/"><img class="social-links" src="facebook.png" alt="whatsapp"></a>
            <a href="https://www.instagram.com/"><img class="social-links" src="instagram.jpg" alt="instagram"></a>
            <a href="https://lk.linkedin.com/"><img class="social-links" src="linkd in.png" alt="whatsapp"></a>
          </div>
        </div>
      </div>
    </div>
</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
