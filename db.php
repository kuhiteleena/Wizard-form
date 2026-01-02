<?php
$conn = new mysqli("localhost", "root", "", "multistep");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>