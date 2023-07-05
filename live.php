<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Funolympic</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flexor
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">Rajya@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+977-*******</span></i>
      </div>

      <div class="cta d-none d-md-flex align-items-center">
        <a href="http://localhost/login/live.php" class="scrollto"> Live Videos </a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Funolympic</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  </header><!-- End Header -->
  <body style="background-color:#fff8f4">

<!DOCTYPE html>
<html>
<head>
	<title>Live videos Section </title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #00FF00;
			padding: 20px;
		}
		h1 {
			text-align: center;
			margin-bottom: 20px;
		}
		.video-container {
			display: flex;
			flex-wrap: wrap;
			align-items: flex-start;
			justify-content: center;
			gap: 20px;
		}
		.video {
			width: 400px;
			height: 300px;
			border-radius: 5px;
			box-shadow: 0 5px 15px rgba(0, 0, 0, .1);
			background-color: #fff;
			padding: 15px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
		}
		.video video {
			width: 100%;
			height: 100%;
			border-radius: 5px;
		}
		.video h2 {
			font-size: 20px;
			color: #444;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<h1>Live videos</h1>
	<div class="video-container">
		<?php
		$videos = array(
			array("title" => "Video 1", "src" => "videos/vid-1.mp4"),
			array("title" => "Video 2", "src" => "videos/vid-2.mp4"),
			array("title" => "Video 3", "src" => "videos/vid-3.mp4"),
			array("title" => "Video 4", "src" => "videos/vid-4.mp4")
		);
		foreach ($videos as $video) {
			echo "<div class='video'>
					<video controls>
						<source src='" . $video['src'] . "' type='video/mp4'>
						Your browser does not support the video tag.
					</video>
					<h2>" . $video['title'] . "</h2>
				</div>";
		}
		?>
	</div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
  <title>Comment Box</title>
  <style>
    body {
      text-align: center;
      background-color: #f5f5f5;
    }

    .comment-box {
      background-color: #fff;
      border-radius: 20px;
      padding: 10px; /* Increased padding to make the box taller */
      max-width: 800px; /* Increased max-width to make the box wider */
      margin: 50px auto 0;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .comment-box h2 {
      border-bottom: 1px solid #ccc;
      padding-bottom: 10px;
    }

    .comment-box .latest-comments {
      border-top: 1px solid #ccc;
      padding-top: 10px;
    }

    .comment-box .latest-comments p {
      margin-bottom: 5px;
    }

    form {
      text-align: left;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-sizing: border-box;
      margin-bottom: 20px;
      font-size: 16px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .comment-section {
      border: 1px solid #ccc;
      padding: 20px;
      margin-top: 20px;
      border-radius: 20px;
    }

    .comment {
      border: 1px solid #ccc;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 20px;
    }

    .comment-header {
      font-weight: bold;
      font-size: 16px;
    }

    .comment-body {
      margin-top: 0;
      font-size: 14px;
    }
  </style>
</head>
<body>
	<div class="comment-box">
		<h2>Leave a comment</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="name">Name:</label>
		<input type="text" id="name" name="name"><br><br>
		<label for="comment">Comment:</label><br>
		<textarea id="comment" name="comment" rows="4" cols="50"></textarea><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

   <?php
// Define variables and initialize with empty values
$nameErr = $commentErr = "";
$name = $comment = "";

// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "comments_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle comment deletion
if(isset($_POST['delete'])) {
    $comment_id = $_POST['comment_id'];
    
    // Delete comment from database
    $sql = "DELETE FROM comments WHERE id = $comment_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Comment deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Validate input and insert comment into database
if(isset($_POST['submit'])) {
    // Validate name
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        $name = $_POST['name'];
    }

    // Validate comment
    if (empty($_POST['comment'])) {
        $commentErr = "Comment is required";
    } else {
        $comment = $_POST['comment'];
    }

    // Insert comment into database if there are no errors
    if (empty($nameErr) && empty($commentErr)) {
        $sql = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";
    
        if ($conn->query($sql) === TRUE) {
            echo "New comment created successfully";
            $name = $comment = "";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$sql = "SELECT id, name, comment FROM comments ORDER BY id DESC LIMIT 5";
$result = $conn->query($sql);

if (!$result) {
    die("Error executing query: " . $conn->error);
}

if ($result->num_rows > 0) {
   echo "<div class='comment-section'>";
   echo "<h3>Latest Comments:</h3>";
   while($row = $result->fetch_assoc()) {
       echo "<div class='comment'>";
       echo "<p class='comment-header'><strong>".$row["name"]."</strong> says:</p>";
       echo "<p class='comment-body'>".$row["comment"]."</p>";
       echo "<form method='POST'>";
       echo "<input type='hidden' name='comment_id' value='".$row["id"]."'>";
       echo "<button type='submit' name='delete' class='delete-button'>Delete</button>";
       echo "</form>";
       echo "</div>";
   }
   echo "</div>";
} else {
   echo "<p>No comments yet</p>";
}

$conn->close();
?>

<!-- Add styles for error messages and highlighted fields -->
<style>
    .error {
        color: red;
    }
    .input-error {
        border: 1px solid red;
    }
</style>
