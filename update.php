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

// Check if the form has been submitted
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Update the user in the database
    $sql = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "User updated successfully";
        echo '<br><br><a href="http://localhost/login/adminpandel.php"><button>Back to Admin Panel</button></a>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve the user from the database
    $sql = "SELECT id, username, email, password FROM register WHERE id=$id";
    $result = $conn->query($sql);

    if ($result === false) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } else if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['username'];
        $email = $row['email'];
        $password = $row['password'];
?>

        <h2>Edit User</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label>Username:</label>
            <input type="text" name="username" value="<?php echo $username; ?>"><br><br>
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>"><br><br>
            <label>Password:</label>
            <input type="password" name="password" value="<?php echo $password; ?>"><br><br>
            <input type="submit" name="update" value="Update User">
        </form>

<?php
    } else {
        echo "User not found";
    }
} else {
    echo "Invalid request";
}

// Close connection
$conn->close();
?>
