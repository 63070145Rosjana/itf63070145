<?php
    $conn = mysqli_int();
    mysqli_real_connect($conn, 'itf45.mysql.database.azure.com', 'rosjana@itf45', 'Pang0990062471', 'itflab', 3306);
    if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
    $Id = $_GET['Id'];
    $sql = "DELETE FROM gustbook2 WHERE Id = $Id";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
      
    mysqli_close($conn);
?>