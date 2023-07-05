<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user id from URL parameter
$id = $_GET['id'];

// SELECT user data from database
$sql = "SELECT id, username, email, password FROM register WHERE id=$id";
$result = $conn->query($sql);

if ($result === false) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} else if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $email = $row['email'];
    $password = $row['password'];
} else {
    echo "User not found";
}

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 6px rgba(0,0,0,0.3);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit User</h1>
        <form method="post" action="update.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label>Username:</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <label>Password:</label>
            <input type="password" name="password" value="<?php echo $password; ?>">
            <input type="submit" name="update" value="Update">
        </form>
    </div>
</body>
</html>
