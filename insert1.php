<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'nongpuii.mysql.database.azure.com', 'nongpuii@nongpuii', 'Fa240145', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$name = $_POST['name'];
$hieght = $_POST['hieght'];
$weight = $_POST['weight'];


$sql = "INSERT INTO newbook (Name , Hieght , Wieght) VALUES ('$name', '$hieght', '$wieght')";


if (mysqli_query($conn, $sql)) {
     echo "<script>alert('เพิ่มข้อมูลเรียบร้อย')</script>";
      echo "<script>window.location='show.php'</script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
