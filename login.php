<!DOCTYPE html>
<html lang="en">
<body>
   <h2>login Form</h2> 
   <form action="index.php" method="POST">
       <fieldset>
           Email:<br>
           <input type="text" name="email">
           <br>
           password:<br>
           <input type="password" name="password">
           <br>
           <input type="submit" name="submit" value="submit">

           <?php if(isset($_GET['error'])){ ?>
					<p> <?php echo $_GET['error']; ?> </p>
			<?php } ?>
       </fieldset>
   </form>
</body>
</html>