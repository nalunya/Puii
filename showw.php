<html>
<head>
<title>itflab</title>
<style>
  table{
    color:#fff;
    border:1px solid #fff;
    padding:10px;
  }
</style>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<?php
include('connect.php')
$res = mysqli_query($conn, 'SELECT * FROM newbook');
?>
<br><br>

<div class="container">

<table width="100%" border="1" style="text-align:center; background:#f7dad9;">
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Height</div></th>
    <th width="150"> <div align="center">Weight </div></th>
<th>Bmi</th>
<th>Action</th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
       
{
?>
  <tr>
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['height'];?></td>
<td><?php echo $Result['weight'];></td>
<td><?php echo $Result['bmi'];></td>
    <td><a  class="<a  class="btn btn-info" href="edit.php?id=<?php echo $Result['id'];?>">แก้ไข</a></td>
    
  </tr>
<?php
}
?>
</table>
<br><br>
<center>
<a  class="btn btn-success" href="insert.html">เพิ่ม</a>
<?php
mysqli_close($conn);
?>
</div>
</body>
</html>
