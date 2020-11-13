<?php
if(isset($_POST['submit'])){
    echo "eiei";
}else{
    echo "555+";
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
    <input type="text" name = "name" placeholder="Enter Name"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" placeholder="Enter Comment"></textarea><br>  
    Link:<br>
    <input type="text" name = "link"placeholder="Enter Link"> <br><br>
    <input type="submit" name="submit">
  </form> 
    </body>
    
</html>
