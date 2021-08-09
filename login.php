



<?php
$username = $_GET["username"];
$plain_password = $_GET["password"];
$secure_password = md5($plain_password);
$conn = new mysqli("localhost", "username", "password", "table");
if ($conn->connect_error) {
    die("Failed to connect to database: ". $conn->connect_error);
}
$check = "SELECT column1, column2 FROM table WHERE column1 = '$username';";
$result = $conn->query($check);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if ($row["Pass"] == $secure_password) {
      echo "<h1 style='background: green;'>Login success</h1><br><br>";
      echo "<h3>Welcome back $username<h3>";
    } else {
      echo "Incorrect Username or Password";
    }
  }
} else {
  echo "Incorrect Username or Password";
}
$conn->close();
?>

