<?php
    include "config.php";
   
        $first_name=$_POST['firstname'];
        $last_name=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];
    
        echo $first_name;
        echo $last_name;
    $sql="INSERT INTO users (firstname,lastname,email,password,gender) VALUES ('$first_name','$last_name','$email','$password','$gender')"; 

    $result=$conn->query($sql);

    if($result==TRUE)
    {
       header("Location: login.php ");
    }
    else{
        echo "ERROR:" . $sql . "<br>" . $conn->error;
    } 
    
    $conn->close();
    
?>

