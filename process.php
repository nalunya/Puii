<?php
 include('connect.php');
 $name=$_POST['name'];
 $height=$_POST['height'];     $weight=$_POST['weight'];
 $sql="INSERT INTO newbook (name,height, weight)
VALUES ('".$name."', '".$height."', '".$weight."')";
 $result=mysqli_query($conn,$sql);
 if($result){
   echo "<script>alert('เพิ่มข้อมูลสำเร็จ')<script>";
   echo "<script>window.location='show.php'<script>";
}else{
echo "<script>alert('Error')<script>";
echo "<script>window.location='insert.html'<script>";
}
?>
