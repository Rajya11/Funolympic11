<?php
if (isset($_GET['video'])) {
  $video_path = $_GET['video'];
} else {
  // If video path is not provided, redirect back to the dashboard
  header("Location: dashboard.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Live Video</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <h2>Live Video</h2>
    <div class="embed-responsive embed-responsive-16by9">
      <video controls>
        <source src="<?php echo $video_path ?>" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
    <a href="dashboard.php" class="btn btn-primary mt-3">Go Back</a>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
