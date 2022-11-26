<?php
    include "config.php";

    $post_id= $_GET['post_id'];
    $user_id=$_GET['user_id'];
    $votes=$_GET['votes'] + 1;
    $sql="UPDATE post SET  votes='$votes'  WHERE post_id = '$post_id' ";
    $result=$conn->query($sql);
    $s= "INSERT INTO votes (user_id,status,post_id) VALUES ('$user_id',1,'$post_id')";
    $r=$conn->query($s);

    header("Location: view.php ");
    ?>