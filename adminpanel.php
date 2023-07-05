<?php
include "db_conn.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    body {
      background-color: #f5f5f5;
    }

    .navbar {
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 1.5rem;
    }

    .card {
      margin-bottom: 2rem;
    }

    .card-header {
      background-color: #fff;
      border-bottom: none;
    }

    .table {
      background-color: #fff;
      margin-top: 1.5rem;
    }

    .table th {
      font-weight: bold;
      font-size: 0.875rem;
      color: #6c757d;
    }

    .table td {
      font-size: 0.875rem;
      color: #212529;
      vertical-align: middle;
    }

    .btn-action {
      font-size: 1rem;
      padding: 0.5rem 1rem;
    }

    .btn-action i {
      font-size: 1.25rem;
    }

    .btn-edit {
      color: #212529;
    }

    .btn-delete {
      color: #dc3545;
    }

    .btn-delete:hover {
      color: #b21f2d;
    }

    .alert {
      margin-top: 1.5rem;
      font-size: 0.875rem;
      padding: 0.5rem 1rem;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">Admin Panel Dashboard</a>
    </div>
  </nav>
  <div class="container mt-5">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">' . $msg . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
    }
    ?>
    <a href="add-new.php" class="btn btn-primary mb-3">Add New</a>
    <a href="logout.php" class="btn btn-danger mb-3">Log Out</a>
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `register`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
        <tr>
          <td><?php echo $row["ID"] ?></td>
          <td><?php echo $row["Username"] ?></td>
          <td><?php echo $row["email"] ?></td>
          <td><?php echo $row["Password"] ?></td>
          <td>
            <a href="edite.php?id=<?php echo $row["ID"] ?>" class="link-blue"><i
                class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
            <a href="deletee.php?id=<?php echo $row["ID"] ?>" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
          </td>
        </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
 


  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>


