<?php
session_start();
include "config.php";
 if(isset($_POST['submit']) && isset($_FILES['my_image'])){
    
     
    $img_name=$_FILES['my_image']['name'];
    $img_size=$_FILES['my_image']['size'];
    $tmp_name=$_FILES['my_image']['tmp_name'];
    $error=$_FILES['my_image']['error'];

    if($error===0){
        $img_ex= pathinfo($img_name,PATHINFO_EXTENSION);
        $img_ex_lc=strtolower($img_ex);

        $allowed_exs=array("jpg","jpeg","png");
        if(in_array($img_ex_lc,$allowed_exs)){
            $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
            $img_upload_path='uploads/'.$new_img_name;
            move_uploaded_file($tmp_name,$img_upload_path);

            $user_id= $_SESSION['id'];
            $data=$_POST['data'];
            $location=$_POST['location'];
            $name=$_SESSION['firstname'];
            // echo $data;
            $sql="INSERT INTO post(img_url,user_id,description,location,user_name) Values('$new_img_name','$user_id','$data','$location','$name')";
            mysqli_query($conn,$sql);
             header("Location: home.php");
        }
        else{
            $em="You cant upload files of this type";
            header("Location: index.php?error=$em");
        }
    }
    else{
        $em="unknown error occurred";
        header("Location: index1.php?error=$em");
    }

 }
 else{
    header("Location: index1.php");
 }
 ?>