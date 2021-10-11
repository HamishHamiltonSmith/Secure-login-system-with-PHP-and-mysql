<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$email = $_GET['email'];
$conn = new mysqli("localhost", "username", "password", "database");
if ($conn->connect_error) {
  die("Failed to connect to database: ". connect_error);
}
$sql = "SELECT email FROM Site_Users WHERE email = '$email';";
$result = $conn->query($sql);
if ($result-> num_rows > 0) {
  echo "<h1>Sorry, password resets are not currently working<h1>";
} else {
  echo "<h1>Sorry, password resets are not currently working<h1>";
}
?>
