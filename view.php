<?php
 session_start();
 include "config.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  background-image: url('bg6.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  color: white;
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
    <li><a href="signup.php">Sign Up</a></li>
  <?php }?>
</ul>  

<body>
    <?php 
        $sql="SELECT * FROM post ORDER BY votes DESC; ";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            while($images=mysqli_fetch_assoc($res)){?>
            <div style="border-style: inset; width: 600px; padding:30px;">
                <h3>User Id: <?php echo $images['user_id']; ?> </h3>
                <h3>User Name:<?php echo $images['user_name']; ?></h3>
                <h3>Description:<?php echo $images['description']; ?></h3>
                <h3>Location:<?php echo $images['location']; ?></h3>
                <h3>Date:<?php echo $images['date']; ?></h3>
                <h3> Status: <?php echo $images['status']; ?></h3>

                <img src="uploads/<?=$images['img_url']?>" style="width:500px;height:300px;"  >
                <h3> Number Votes <?php echo $images['votes']; ?></h3>
                <?php 
                  $id= $_SESSION['id'];
                  $sq="SELECT * FROM users WHERE user_id='$id'";
                  $r=$conn->query($sq);
                  $p=mysqli_fetch_assoc($r);
                  if($p['acc_type']=="admin"){ ?>
                    <form action="status.php">
                    <label>Post ID</label><br>
                    <input type="text" name="post_id" value="<?php echo $images['post_id'] ; ?>" readonly><br>
                    <label for="status">Change the status:</label>                   
                     <select name="status" id="cars">
                     <option value="No Action Taken">no action tacken</option>
                     <option value="Submitted to newspaper">Submitted to newspaper</option>
                     <option value="Resolved">Resolved</option>
                    </select>
                     <br><br>
                    <input type="submit" value="Submit">
                    </form>
                    
                 <?php  } else {
                
                  $post_id=$images['post_id'];
                  $user_id=$_SESSION['id'];
                  $sql="SELECT * FROM  votes where post_id='$post_id' AND user_id='$user_id' ";
                  $result=$conn->query($sql);

                if(mysqli_num_rows($result)>0)
                 {  ?>
                 <h5> You already voted</h5>
                <?php }else{?>
                    <h2><a href="vote.php?post_id=<?php echo $images['post_id'];?>& user_id=<?php echo $_SESSION['id']; ?> & votes=<?php echo $images['votes']; ?>">vote</a></h2>
                    
               <?php } } ?>
                <br><br>

            </div>
            <?php }}?>
        
</body>
</html>