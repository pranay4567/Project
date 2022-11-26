<!DOCTYPE html>
<html lang="en">
<body>
   <h2>Signup Form</h2> 
   <form action="create.php" method="POST">
       <fieldset>
           <legend>Personal Information:</legend>
           First Name:<br>
           <input type="text" name="firstname">
           <br>
           Last Name:<br>
           <input type="text" name="lastname">
           <br>
           Email:<br>
           <input type="text" name="email">
           <br>
           password:<br>
           <input type="password" name="password">
           <br>
           Gender:<br>
           <input type="radio" name="gender" value="male">Male
           <input type="radio" name="gender" value="female">Female
           <br><br>
           <input type="submit" name="submit" value="submit">
       </fieldset>
   </form>
</body>
</html>