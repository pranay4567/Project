<?php
    include "config.php";
     
    if(isset($_GET['post_id'])){
        $id=$_GET['post_id'];
    
     $sql="DELETE FROM post WHERE post_id='$id'";
       $result=$conn->query($sql);
       if($result==TRUE)
       {
        header("Location: account.php ");
       }
       else{
           echo "Error:" . $sql . "<br>" . $conn->error;
       }
    }
?>