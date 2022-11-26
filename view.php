<?php
 session_start();
 include "config.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

</style>
</head>

<body>
    <?php 
        $sql="SELECT * FROM post ";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            while($images=mysqli_fetch_assoc($res)){?>
            <div style="border-style: inset;">
                <h3> <?php echo $images['user_id']; ?> </h3>
                <h3> <?php echo $images['user_name']; ?></h3>
                <h3> <?php echo $images['description']; ?></h3>
                <h3> <?php echo $images['location']; ?></h3>
                <h3> <?php echo $images['date']; ?></h3>
                <img src="uploads/<?=$images['img_url']?>" style="width:500px;height:300px;"  >
                <h3> Number Votes <?php echo $images['votes']; ?></h3>
                <?php 

                  $post_id=$images['post_id'];
                  $user_id=$_SESSION['id'];
                  $sql="SELECT * FROM  votes where post_id='$post_id' AND user_id='$user_id' ";
                  $result=$conn->query($sql);

                if(mysqli_num_rows($result)>0)
                 {  ?>
                 <h5> You already voted</h5>
                <?php }else{?>
                    <a href="vote.php?post_id=<?php echo $images['post_id'];?>& user_id=<?php echo $_SESSION['id']; ?> & votes=<?php echo $images['votes']; ?>">vote</a>
                    
               <?php } ?>
                <br><br>

            </div>
            <?php }}?>
        
</body>
</html>