<?php
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
                
                <br><br>

            </div>
            <?php }}?>
        
</body>
</html>