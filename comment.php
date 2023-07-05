<?php
//Connect to database
$db = mysqli_connect("localhost", "username", "password", "comments_db");

//Check connection
if(!$db){
    die("Failed to connect to database: " . mysqli_connect_error());
}

//Insert new comment into database
if(isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$comment = mysqli_real_escape_string($db, $_POST['comment']);
	$sql = "INSERT INTO comments (username, comment) VALUES ('$username', '$comment')";
	mysqli_query($db, $sql);
}

//Retrieve comments from database
$sql = "SELECT * FROM comments ORDER BY created_at DESC";
$result = mysqli_query($db, $sql);

//Loop through comments and display them
echo "<h2>Comments</h2>";
while($row = mysqli_fetch_assoc($result)){
	echo "<p><strong>" . $row['username'] . "</strong>: " . $row['comment'] . "</p>";
	echo "<small>" . $row['created_at'] . "</small><hr>";
}

//Close database connection
mysqli_close($db);
?>

<form method="POST" action="">
	<label for="username">Name:</label><br>
	<input type="text" id="username" name="username"><br><br>
	<label for="comment">Comment:</label><br>
	<textarea id="comment" name="comment"></textarea><br><br>
	<input type="submit" name="submit" value="Submit">
</form>
