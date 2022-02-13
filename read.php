<?php
  include '../view/db.php';
  $sql = "select * from useri";
  $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    if ($row['id'] == $_GET['id']) {
      echo '<form class="form-inline m-2" action="update.php" method="POST">';
      echo '<td><input type="text" class="form-control" name="name" value="'.$row['name'].'"></td>';
      echo '<td><input type="text" class="form-control" name="surname" value="'.$row['surname'].'"></td>';
      echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
      echo '<input type="hidden" name="id" value="'.$row['id'].'">';
      echo '</form>';
    } else {
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['surname'] . "</td>";
      echo '<td><a class="btn btn-primary" href="../view/dashboard.php?id=' . $row['id'] . '" role="button">Update</a></td>';
    }
    echo '<td><a class="btn btn-danger" href="../view/delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
    echo "</tr>";
  }
  $conn->close();
?>