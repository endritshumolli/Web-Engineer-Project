<?php
  include '../view/db.php';
  $name = $_POST["name"];
  $score = $_POST["surname"];
  $sql = "insert into useri (name, surname) values ('$name', '$surname')";
  $conn->query($sql);
  $conn->close();
  header("location: ../view/dashboard.php");
?>