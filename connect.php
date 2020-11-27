<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'nongpuii.mysql.database.azure.com', 'nongpuii@nongpuii', 'Fa240145', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>