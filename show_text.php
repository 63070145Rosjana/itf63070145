<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
    body {
        background-image: url('cat11.jpg');
    }
</style>
</head>

<body>
    <div class="container">
        <strong>Diary: </strong>
        <td><?php echo $_POST['name'];?></td>
        <td><?php echo $_POST['Date'];?></td>
        <td><?php echo $_POST['Diary'];?></td>
        <td><?php echo $_POST['Story'];?></td>
        <br>
        <td><?php echo $_POST['gender'];
            $text = $_POST['gender'];
            if ($text=="sad")
            {
                echo "สู้ๆ";
            }
            elseif ($text=="normal")
            {
                echo "ทำต่อไป";
            }
            elseif ($text == "happy")
            {
                echo "ดีแล้วนะ";
            }
        ?>
       </td>
    </div>
</body>

</html>
