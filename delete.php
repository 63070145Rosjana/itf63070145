<html>
<head>
<title>delete</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf45.mysql.database.azure.com', 'rosjana@itf45', 'Pang0990062471', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
// sql to delete a record
$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];

$sql = "DELETE FROM guestbook WHERE Name='$name'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<div class="panel-footer">
  <tr><center><?php echo "Go to Home page"; ?></center></tr>
  <tr><center><a href="show.php"><input type="submit" value="Home" class="btn btn-warning"></a></center></tr>
</div>
</body>
</html>