<?php
 include('connect.php');
 $name=$_POST['name'];
 $height=$_POST['height'];     $weight=$_POST['weight'];
$height1=$height/100;
  $bmi=$weight/($height1*$height1);
 $sql="INSERT INTO newbook (name,height, weight,bmi)
VALUES ('".$name."', '".$height."', '".$weight."','".$bmi."')";
 $result=mysqli_query($conn,$sql);
 if($result){
   echo "<script>alert('เพิ่มข้อมูลสำเร็จ')<script>";
   echo "<script>window.location='showw.php'<script>";
}else{
echo "<script>alert('Error')<script>";
echo "<script>window.location='insert.html'<script>";
}
?>
