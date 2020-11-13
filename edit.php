
<?php
include("connect.php");
    $id=$_GET['id'];
    $infosql = "SELECT * FROM guestbook WHERE ID = '".$id."'";
    $inforesult = mysqli_query($conn,$infosql);
    $res = mysqli_fetch_array($inforesult);
    $name = $_POST['name'];
    $comment = $_POST['comment'];
 if(isset($_POST['submit'])){
    
    
    $update = "UPDATE * FROM `guestbook` SET `Name` = '".$name."' , `Comment` = '".$comment."' WHERE ID = '".$id."'";  
    $result= mysqli_query($conn,$update);
    if($result){
        echo "<script>alert('แก้ไขเสร็จสิ้น')</script>";
        echo "<script>window.location='show.php'</script>";

    }else{
        echo "<script>alert('error')</script>";
        echo "<script>window.location='show.php'</script>";

    }
 }

?>
<html>
    <head>
        <style>
            textarea{
                resize:none;
            }
        </style>
    </head>
    <body>
    <form method = "POST" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" value="<?php echo $res['Name'];?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" placeholder="Enter Comment" value="<?php echo $res['Comment'];?>"></textarea><br>  
    Link:<br>
    
    <input type="submit" name="submit">
  </form> 
    </body>
    
</html>
