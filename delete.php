<?php
   
   include("connect.php");

    $id=$_GET['id'];
   
    $sql="";
    $result=mysqli_query($conn,'DELETE * FROM guestbook WHERE ID='$id'');
    
    if($result){
        echo "<script>alert('ลบเสร็จสิ้น')</script>";

    }else{
        echo "<script>alert('error')</script>";
    }

?>
