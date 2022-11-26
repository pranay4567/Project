<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="upload.php" method="post" enctype="multipart/form-data"><br>
        <input type="text" name="data" style="width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;" placeholder ="Description" ><br>
    <input type="text" name="location" placeholder ="Location" ><br>
        <input type="file" name="my_image"><br>
        <input type="submit" name="submit" value="Upload">
     </form>
</body>
</html>