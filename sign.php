<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Form</title>
        <style>
            *{
                margin:0;
                padding:0;
                box-sizing: border-box;
            }
            body{
                min-height: 100vh;
                background: #eee;
                display: flex;
                font-family: sans-serif;
            }
            .container{
                margin: auto;
                width: 500px;
                max-width: 90%;
            }
            .container form{
                width:100%;
                height: 100%;
                padding:20px;
                background: white;
                border-radius: 4px;
                box-shadow: 0 8px 16px rgba(0,0,0,.3);
            }
            .container form h1{
                text-align: center;
                margin-bottom: 24px;
                color: #222;
            }
            .container form .form-control{
                width:100%;
                height: 40px;
                background: white;
                border: 1px solid silver;
                margin:10px 0 18px 0;
                padding: 0 10px; 
            }
            .container form .btn{
                margin-left: 50%;
                transform:translateX(-50%);
                width:120px;
                height:34px;
                border:none;
                outline:none;
                background: #27a327;
                cursor:pointer;
                font-size:16px;
                text-transform: uppercase;
                color:white;
                border-radius: 4px;
                transition: .3s;
            }
            .container form .btn.hover{
                opacity: .7;
            }
        </style>
    </head>
<body>
   <div class="container">
   <form action="create.php" method="POST">
    <h1>Sign in</h1>
       <div class="form-group">
        <label for="">First Name </label>
        <input type="text" name="firstname" class="form-control" required>     
       </div>
       <div class="form-group">
        <label for="">Last Name </label>
        <input type="text" name="lastname" class="form-control" required>     
       </div>
       <div class="form-group">
        <label for="">Email </label>
        <input type="text" name="email" class="form-control" required>     
       </div>
       <div class="form-group">
        <label for="">Password </label>
        <input type="password" name="password" class="form-control" required>     
       </div>
       <div class="form-group">
        <label for="">Gender </label> &nbsp 
        <input type="radio" name="gender" value="male"  >  &nbsp Male  &nbsp 
        <input type="radio" name="gender" value="female" >  &nbsp  Female  
       </div>
       <input type="submit" class="btn" value="Register">
           <?php if(isset($_GET['error'])){ ?>
					<p> <?php echo $_GET['error']; ?> </p>
					<?php } ?>
       </fieldset>
   </form>
   </div>
</body>
</html>