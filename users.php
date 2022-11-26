<?php
    include "config.php";
    $sql="SELECT * FROM users";
    $result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
<head>
    <title>View books</title>
</head>
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
 color:rgb(20, 204, 217);
}
</style>
</head>
<body>
<ul>

 
</ul>  
</p>
</body>
<body>
    <div>
        <h2>Total Users</h2>
        <table style="width:100%">
    <head>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Role</th>
        </tr>
   </head>
   <tbody>
       <?php
           if($result->num_rows>0){
               while($row=$result->fetch_assoc()){

           ?>
           <tr>
               <td><?php echo $row['user_id'];?></td>
               <td><?php echo $row['firstname'];?></td>
               <td><?php echo $row['lastname'];?></td>
               <td><?php echo $row['email'];?></td>
               <td><?php echo $row['gender'];?></td>
           </tr>
           <?php }
           }
           ?>
   </tbody>
        </table>
    </div>
</body>
</html>