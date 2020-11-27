<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itf45.mysql.database.azure.com', 'rosjana@itf45', 'Pang0990062471', 'itflab', 3306);
if(mysqli_connect_errno($conn)){
    echo "connect fail".mysqli_connect_error();
}
?>
