<?php
include "db_conn.php";
$id = $_GET["Id"];
$sql = "DELETE FROM `group` WHERE Id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}