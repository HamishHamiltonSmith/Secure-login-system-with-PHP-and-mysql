<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$message = "Password Reset: 127.0.0.1/login/reset_pass.html";
$email = $_GET['email'];
$conn = new mysqli("localhost", "hamakins", "password123", "Users");
if ($conn->connect_error) {
  die("Failed to connect to database: ". connect_error);
}
$sql = "SELECT email FROM Site_Users WHERE email = '$email';";
$result = $conn->query($sql);
if ($result-> num_rows > 0) {
  echo "<h1>If that email is on our servers we will send a lin to it<h1>";
  mail($email, "Password Reset", $message);
} else {
  echo "<h1>If that email is on our servers we will send a link to it<h1>";
}
?>
