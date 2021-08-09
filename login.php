



<?php
$username = $_GET["username"];
$password = $_GET["password"];
$conn = new mysqli("localhost", "username", "password", "Users");
if ($conn->connect_error) {
    die("Failed to connect to database: ". $conn->connect_error);
}
$check = "SELECT User, Pass FROM Users WHERE User = '$username';";
$result = $conn->query($check);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    if ($row["Pass"] == $password) {
      echo "<h1>login success!!!!</h1>";
    } else {
      echo "Incorrect Username or Password";
    }
  }
} else {
  echo "Incorrect Username or Password";
}
$conn->close();
?>

