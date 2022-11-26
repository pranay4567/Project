<?php
 session_start();
 include "config.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<style>
body {
  background-image: url('bg5.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  
  
}
</style>
<style>
ul {
  list-style-type: none;
  margin:0;
  height: 80px;
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0.925);
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
    <li><a href="login.php">Login</a></li>
  <?php }?>

</ul>  
</p>

<?php
  if(isset($_SESSION['id'])){  ?>
  <body>
    <h1 >hello,<?php echo $_SESSION['firstname'];?></h1>
    <h3>User Id:<?php echo $_SESSION['id'];?></h3>
    <h3>Full name:<?php echo $_SESSION['firstname'];?><?php echo $_SESSION['lastname'];?></h3>
    <h3>Email:<?php echo $_SESSION['email'];?></h3>
    <h3>Gender:<?php echo $_SESSION['gender'];?></h3>
    
    <?php 
        $id=$_SESSION['id'];
        $sql="SELECT * FROM post where user_id='$id' ";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            while($images=mysqli_fetch_assoc($res)){?>
            <div style="border-style: inset; width: 600px; padding:20px;">
                <h3> User Name :<?php echo $images['user_name']; ?></h3>
                <h3> Description :<?php echo $images['description']; ?></h3>
                <h3> Location :<?php echo $images['location']; ?></h3>
                <h3> Date :<?php echo $images['date']; ?></h3>
                <img src="uploads/<?=$images['img_url']?>" style="width:500px;height:300px;"><br><br>
                <h3><a href="index2.php?post_id=<?php echo $images['post_id'];?>">Edit</a></h3>
                <h3><a href="delete.php?post_id=<?php echo $images['post_id'];?>">Delete</a></h3>
                <br><br>
                
            </div>
            <?php }}?>
   <?php 
   } else{ ?>
   <h2><a style = "font-size: 30px; color:rgb(150, 4, 186); text-decoration:none; padding: 100px;  font-weight: bold;" href="login.php">Login Required</a></h2>
    <?php  } ?>
 </body>
</html>