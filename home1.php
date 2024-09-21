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
      <div class="col-sm-12 col-md-6 col-lg-6 col-12">
        <center><h1 class="index">Admin Page</h1></center>
      </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar bg-dark border-bottom border-body"
        data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand fs-2" href="home.html"><span class="text-info">I O I T</span> Sri Lanka</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6 text-center">
              <li class="nav-item">
                <a class="nav-link text-info" href="home1.php">Home</a>
              </li>
             <li class="nav-item">
                <a class="nav-link" href="lib\views\dashboards\admin.php">Subjects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="crud/index.php">Manage users</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="contact/index.php">See messages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">log out</a>
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
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
