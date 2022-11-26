<?php
    include "config.php";
    
     $post_id=$_POST['post_id'];
  echo 1;
    $img_name=$_FILES['my_image']['name'];
    $img_size=$_FILES['my_image']['size'];
    $tmp_name=$_FILES['my_image']['tmp_name'];
    $error=$_FILES['my_image']['error'];
    
    $img_ex= pathinfo($img_name,PATHINFO_EXTENSION);
        $img_ex_lc=strtolower($img_ex);

        $allowed_exs=array("jpg","jpeg","png");

    $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
    $img_upload_path='uploads/'.$new_img_name;
    move_uploaded_file($tmp_name,$img_upload_path);

    
    $data=$_POST['data'];
   
    $location=$_POST['location'];
     echo $data;

     $sql="UPDATE post SET  description='$data', img_url='$new_img_name',location='$location'  WHERE post_id = '$post_id' ";
     $result=$conn->query($sql);
    if($result==TRUE)
    {
        header("Location: account.php ");
    }
    else{
     echo "ERROR:" . $sql . "<br>" . $conn->error;
    }
$conn->close();
?>
