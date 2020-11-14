<html>
<head>
<title>ITF Lab</title>
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
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<div class="container">
    <table class="table table-bordered">
    <tr>
        <thead class="thead-dark">
            <th width="100"> <div align="center">Name</div></th>
            <th width="350"> <div align="center">Comment </div></th>
            <th width="150"> <div align="center">Link </div></th>
            <th width="150"> <div align="center">Action </div></th>
        </thead>
    </tr>
    <?php
    while($Result = mysqli_fetch_array($res))
    {
    ?>
    <tr>
        <td><?php echo $Result['Name'];?></div></td>
        <td><?php echo $Result['Comment'];?></td>
        <td><?php echo $Result['Link'];?></td>
        <td><center><a class="btn btn-warning" href="edit_r2.php?member_id=<?php echo $crow['member_id']; ?>">edit</a>
            <a class="btn btn-warning" href='delete.php?delete_id_id=$Result[Id]'>delete</a>
        </center></td>
    </tr>
    <?php
    }
    ?>
    </table>
    <td><center><a class="btn btn-warning" href="form.html?member_id=<?php echo $crow['member_id']; ?>">Add</a></center></td>
</div>
<?php
mysqli_close($conn);
?>
</body>
</html>
