<?php
    include("connect.php");
    $id=$_GET['id'];
   
    $sql="DELETE * FROM `guestbook` WHERE `ID` = '".$id."'";
    $result=mysqli_query($conn,$sql);
    
    if($result){
        echo "<script>alert('ลบเสร็จสิ้น')</script>";

    }else{
        echo "<script>alert('error')</script>";
    }

?>
