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
     <form action="upload.php" method="post" enctype="multipart/form-data"><br>
        <input type="text" name="data" style="width: 100%;
  padding: 12px 10px;
  margin: 5px 0px;
  box-sizing: border-box; height:80px; width:350px" placeholder ="Description" ><br><br>
    <input type="text" name="location" placeholder ="Location" ><br><br>
        <input type="file" name="my_image"><br><br>
        <input type="submit" name="submit" value="Upload"><br><br>
     </form>
     </div>
</body>
</html>