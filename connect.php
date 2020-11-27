<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'nalunya220.mysql.database.azure.com', 'puii240145@nalunya220', 'Fa240145', 'ITF', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>
