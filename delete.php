<?php
$delete_id=$_GET['delete_id']
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf45.mysql.database.azure.com', 'rosjana@itf45', 'Pang0990062471', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$sql="DELETE FROM guesbook WHERE Id ='$delete_id'"

$sql = "DELETE FROM guestbook WHERE name";
$result = mysql_query($sql);
if($result){
    echo"<script type='text/javascript'>alert('ลบข้อมูลสำเร็จ')</script>";//javascript แจ้ง alert ข้อความ
    echo "<meta http-equiv ='refresh'content='0;URL=show.php'>";// คำสั่งให้ refreshหน้าไปหน้าที่เราต้องการ
} else {
    echo"<script type='text/javascript'>alert('ลบข้อมูลไม่สำเร็จ');window.history.go(-1);</script>";//javascript แจ้ง alert ข้อความ และคำสั่งให้ refresh หน้าเดิมถ้าลบข้อความไม่สำเร็จ
}    

?>