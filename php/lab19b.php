
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Registration Form</title>
</head>
<body>
<h2>User Registration Form</h2>
<form method="post">
<label for="fullname">Full Name:</label>
<input type="text" id="fullname" name="fullname" required><br><br>
<label for="email">Email:</label>
<input type="email" id="email" name="email" required><br><br>
<label for="username">Username:</label>
<input type="text" id="username" name="username" required><br><br>
<label for="password">Password:</label>
<input type="password" id="password" name="password" required><br><br>
<input type="submit" name="submit" value="Register">
</form>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab19b";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['submit'])){
$fullname = filter_var($_POST['fullname'],FILTER_SANITIZE_STRING);
$email = $_POST['email'];
$username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
$password = $_POST['password'];
if(strlen($fullname) > 40) {
echo "Error: Full name must be up to 40 characters long.";
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo "Error: Invalid email address.";
}
else if(!preg_match("/^[A-Za-z]+[0-9]+$/", $username)) {
echo "Error: Username must start with a string and followed by a number.";
}
else if(strlen($password) <= 8) {
echo "Error: Password must be more than 8 characters long.";
}
else {
$sql = "INSERT INTO users (fullname, email, username, password)
VALUES ('$fullname', '$email', '$username', '$password')";
$result = mysqli_query($conn,$sql);
if ($result) {
echo "User registered successfully.";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
}
$conn->close();
?>
