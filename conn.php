<?php
$conn = new mysqli('localhost', 'root', 'root','meal');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";
?>