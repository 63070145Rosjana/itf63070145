<?php
require('connect.php');
    if(isset($_POST['submit'])){
        $num = $_POST['name'];
        $numa = $_POST['weight'];
        $numb = $_POST['height'];
        $numc = $numa / ($numb**2);

        $sql = "INSERT INTO gustbook2 (name, weight, height, bmi) value ('$num','$numa', '$numb', '$numc')";

        if(mysqli_query($conn, $sql)){
            echo "New data insert successfully";
            echo "<a href='newindex.php'>back to home page</a>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="newinsert.php" method="post">
        <h1>ชื่อ</h1>
        <input type="text" name="name">
        <h1>น้ำหนัก</h1>
        <input type="text" name="weight">
        <h1>ส่วนสูง</h1>
        <input type="text" name="height">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>