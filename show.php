<?php
include("connect.php");
?>
<html>
<head>
<title>ITF Lab</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
<?php
$sql="SELECT * FROM guestbook";
$result=mysqli_query($conn,$sql);

?>
<table width="600" border="1">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><a  class="btn btn-info" href="delete.php">ลบ</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</div>
</body>
</html>
