
<?php
include "db_conn.php";
if (isset($_GET["id"]) && !empty($_GET["id"])) {
  $id = $_GET["id"];
  $sql = "DELETE FROM `register` WHERE id = $id";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: adminpanel.php?msg=Data deleted successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
} else {
  echo "Failed: ID parameter not found in URL or is empty.";
}


