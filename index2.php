<!DOCTYPE html>
<html lang="en">
<head>
<style>

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

<body style="padding: 200px 250px 250px 350px;" >
<div style="border-style: inset; width:600px; text-align:center;">
    <h1>Post Your issue</h1>
    
     <form action="update.php" method="post" enctype="multipart/form-data"><br>
      <label>Post Id:</label>
       <input type="text" name="post_id" value="<?php echo $_GET['post_id'] ; ?>" readonly><br>
       <label>Description:</label>
        <input type="text" name="data" style="width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box; height:80px; width:350px"" placeholder ="Description" ><br>
  <label>Location:</label>
    <input type="text" name="location" placeholder ="Location" ><br><br>
        <input type="file" name="my_image"><br><br>
        <input type="submit" name="submit" value="Upload"><br><br>
     </form>
</div>
</body>
</html>