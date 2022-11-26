<?php
 session_start();
 include "config.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<title>Civic Problem</title>
<head>
<style>
body {
  background-image: url('https://img.freepik.com/free-vector/social-media-network_74855-4575.jpg?w=2000');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<style>
ul {
  list-style-type: none;
  margin-top: 0;
  padding: 0;
  overflow: hidden;
  background-color: rgb(0,0,0,0.4);
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  font-family: 'poppins', sans-serif;
  padding: 20px 20px;
  text-decoration: none;
}
li a:hover {
  color: rgb(119, 239, 247);
}
</style>
</head>
<body>
<ul>
<li> <a href="home.php">Home</a></li>
<li><a href="account.php">Account</a></li>
<li><a href="view.php">Dashboard</a></li>
<?php 
   if(isset($_SESSION['id'])) {  ?>
   <li><a href="index1.php">Upload</a></li>
  <li style="padding-left: 200px;"><a href="logout.php">Logout</a></li>
  
  
   <?php } else { ?>
    <li style="padding-left: 700px; "><a href="login.php">Login/Sign Up</a></li>
  <?php }?>

</ul>  
</body>
<p style="font-size :70px; padding-left:150px; padding-top:100px;">Be a Responsible  citizen<br> Post your complaint</p>
</html>

