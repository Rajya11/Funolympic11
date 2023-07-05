<?php
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $videoName = $_FILES["video"]["name"];
  $videoTmpName = $_FILES["video"]["tmp_name"];
  $videoSize = $_FILES["video"]["size"];
  $videoError = $_FILES["video"]["error"];

  if ($videoError === 0) {
    $videoDestination = "uploads/" . $videoName;
    move_uploaded_file($videoTmpName, $videoDestination);

    // Save video details to the database
    $sql = "INSERT INTO videos (name, path) VALUES ('$videoName', '$videoDestination')";
    mysqli_query($conn, $sql);

    header("Location: index.php?msg=Video uploaded successfully.");
    exit();
  } else {
    header("Location: index.php?msg=Error uploading video.");
    exit();
  }
}
?>

