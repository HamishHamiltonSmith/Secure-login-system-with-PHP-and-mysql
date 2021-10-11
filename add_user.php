
<?php
$username = $_GET["username"];
$plain_pass = $_GET["password"];
$hash_pass = md5($plain_pass);
$email = $_GET["email"];
$conn = new mysqli("localhost", "username", "password", "database");
if ($conn->connect_error) {
  die("Falied to conect to database: ". $conn->connect_error);
}
$add = "INSERT INTO Site_Users (username, email, password) VALUES ('$username', '$email', '$hash_pass');";
if ($conn->query($add) === TRUE) {
  echo "<h1>Account Created!</h1><br>";
  echo "<a href='login-page.html'>Back to login</a>";
} else {
  echo "Could not create user: ". $conn->error;
}
$conn->close();
?>
