<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf45.mysql.database.azure.com', 'rosjana@itf45', 'Pang0990062471', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
// sql to delete a record
$sql = "DELETE FROM guestbook WHERE ID='$ID'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>