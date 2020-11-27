<?php
 include('connect.php');
 $name=$_POST['name'];
 $height=$_POST['height'];     $weight=$_POST['weight'];
$height=$height/100;
  $bmi=$weight/($height*$height);
bmit=number_format("$bmi",2);
 $sql="INSERT INTO newbook (name,height, weight,bmi)
VALUES ('".$name."', '".$height."', '".$weight."','".bmit."')";
 $result=mysqli_query($conn,$sql);
 if($result){
   echo "<script>alert('เพิ่มข้อมูลสำเร็จ')<script>";
   echo "<script>window.location='show.php'<script>";
}else{
echo "<script>alert('Error')<script>";
echo "<script>window.location='insert.html'<script>";
}
?>
