<?php
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $videoId = $_POST["video-id"];

  // Get video path from the database
  $sql = "SELECT * FROM videos WHERE ID = '$videoId'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $videoPath = $row["path"];

  // Delete video file
  unlink($videoPath);

  // Delete video details from the database
  $sql = "DELETE FROM videos WHERE ID = '$videoId'";
  mysqli_query($conn, $sql);

  header("Location: index.php?msg=Video deleted successfully.");
  exit();
}
?>
