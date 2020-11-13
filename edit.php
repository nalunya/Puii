
<?php
 $id=$_GET['id'];
 $sql = "SELECT FROM guestbook WHERE ID = '".$id."'";
 $result=mysqli_query($conn,$sql);
 $info = mysqli_fetch_array($result);
 echo $id;
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
    <input type="text" name = "name" value="<?php echo $info['Name'];?>"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" placeholder="Enter Comment"></textarea><br>  
    Link:<br>
    <input type="text" name = "link"placeholder="Enter Link"> <br><br>
    <input type="submit" name="submit">
  </form> 
    </body>
    
</html>
