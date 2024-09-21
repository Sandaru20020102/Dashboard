<?php
//database connection details

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "file_upload_download";

 $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


 if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

 //Fetch the uploaded files from the database

 $sql = "SELECT *FROM files4";
 $result = $conn->query($sql);

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Uploaded files</title>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="homeStyle.css">
</head>
<body style="background-color: aliceblue;">
<header>
    <div class="row">
      <div class="col-sm-12 col-md-2 col-lg-2 col-12">
        <center><img src="logo.png" alt="logo" style="width: 80px; height: 80px;"></center>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4 col-12">
        <h1 class="index"><span class="text-info">I O I T</span> Sri Lanka</h1>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6 col-12">
      <center><h1 class="index">User Page</h1></center>
       </div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar bg-dark border-bottom border-body"
        data-bs-theme="dark">
        <div class="container">
          <a class="navbar-brand fs-2" href="home2.php"><span class="text-info">I O I T</span> Sri Lanka</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-6 text-center">
              <li class="nav-item">
                <a class="nav-link" href="home2.php">Home</a>
              </li>
             <li class="nav-item">
                <a class="nav-link text-info" href="lib\views\dashboards\user.php">Back</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
	<div class="container mt-5">
        <h2>Uploaded Files</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th>File Type</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Display the uploaded files and download links
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file_path = "uploads/" . $row['filename'];
                        ?>
                        <tr>
                            <td><?php echo $row['filename']; ?></td>
                            <td><?php echo $row['filesize']; ?> bytes</td>
                            <td><?php echo $row['filetype']; ?></td>
                            <td><a href="<?php echo $file_path; ?>" class="btn btn-primary" download>Download</a></td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="4">No files uploaded yet.</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>

<?php
$conn->close();
?>
