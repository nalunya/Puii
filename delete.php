<?php
   
   $conn = mysqli_init();
   mysqli_real_connect($conn, 'nalunya.mysql.database.azure.com', 'fa240145@nalunya', 'Puii240145', 'itflab', 3306);
   if (mysqli_connect_errno($conn))
   {
       die('Failed to connect to MySQL: '.mysqli_connect_error());
   }
   
    $id=$_GET['id'];
   
    $sql="DELETE * FROM guestbook WHERE ID='$id'";
    $result=mysqli_query($conn,$sql);
    
    if($result){
        echo "<script>alert('ลบเสร็จสิ้น')</script>";

    }else{
        echo "<script>alert('error')</script>";
    }

?>
