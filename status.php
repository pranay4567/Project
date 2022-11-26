<?php
    include "config.php";

    $status= $_GET['status'];
    $post_id=$_GET['post_id'];

    $sql="UPDATE post SET  status='$status' WHERE post_id = '$post_id' ";
    $result=$conn->query($sql);
    header("Location: view.php ");
    ?>