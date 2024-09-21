<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="homeStyle.css">
	<title>File upload and download</title>
</head>
<body>
<header>
    
       <nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar bg-dark border-bottom border-body"
        data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand fs-2" href="homePage.html"><span class="text-info">I O I T</span> Sri Lanka</a>
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
            </ul>
          </div>
        </div>
      </nav>
    </header>
	<div class="container mt-5">
		<h2>Upload English Lecture Notes</h2>
		<form action="uploadEng2.php" method="POST" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="file" class="form-label">Select file</label>
				<input type="file" class="form-control" name="file" id = "file">
			</div>
			<button type="submit" class="btn btn-primary">Upload file</button>
		</form>
	</div>

</body>
</html>