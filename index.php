<?php
session_start();
include "config.php";

if(isset($_POST['email']) && isset($_POST['password'])){

    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

}
$email=$_POST['email'];
$pass=$_POST['password'];

if(empty($email))
{
    header("Location: login.php?error= email required ");
    exit();
}
else if(empty($pass)){
    header("Location: login.php?error=Password is required");
    exit();
}
 $sql="SELECT * FROM users WHERE email='$email' AND password='$pass'";
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)==1){
     $row=mysqli_fetch_assoc($result);
    
     if($row['email']==$email && $row['password']==$pass)
     {
         echo "Logged In!";
        // echo $row['email'];
         $_SESSION['id']=$row['user_id'];
         $_SESSION['firstname']=$row['firstname'];
         $_SESSION['gender']=$row['gender'];
         $_SESSION['lastname']=$row['lastname'];
         $_SESSION['email']=$row['email'];
         
        // echo $_SESSION['id'];
             
            header("Location: home.php");
         
         exit();
     }
     else{
        header("Location: login.php?error=Incorrect User Name Or Password");
         exit();
     }
 }
 else{
    header("Location: login.php?error=Incorrect User Name Or Password");
     exit();
 }