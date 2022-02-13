<?php
include_once '../view/adminheader.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <h1>Welcome to Dashboard</h1>
  <p>Create, read, update, and delete users</p>
  <table class="table">
    <tbody>
      <?php include '../view/read.php'; ?>
    </tbody>
  </table>
  <form class="form-inline m-2" action="create.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" class="form-control m-2" id="name" name="name">
    <label for="score">Surname:</label>
    <input type="text" class="form-control m-2" id="surname" name="surname">
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
</body>
</html>