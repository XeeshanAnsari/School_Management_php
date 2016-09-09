<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    
</head>
<body>
    
        <!--  NavBar is start here-->
     <div class="container-fuild"> 
        <nav class="navbar navbar-default  ">
            <div class="container-fluid">
                <div class="navbar-brand">
                    Admin Penal
                </div>
                <div class="navbar-header navbar-right">
                  <ul class="nav navbar-nav  ">
                      <li><a href="regShowRecord.php"> ShowRegistration</a></li>
                  </ul>
                </div>
                
            </div>  
        </nav>
     </div>    
        <!-- Navbar is end here -->
        
        <!-- Show Registration Record -->
        <div class="container">
            <table class="table table-default table-hover">
                <tr>
                    <th>Roll Number</th>
                    <th>Student Name</th>
                    <th>STudent S/O</th>
                    <th>Student class</th>
                    <th>Phone Number</th>
                    <th>Email Address</th>
                    <th>Address</th>   
                </tr>
                
                
 <?php
     include("./database/db_connect.php");
     $query = "SELECT * FROM registration";
     $run = mysql_query($query);
     while ($row=mysql_fetch_array($run)) {
         $id = $row['g_r_no'];
         $name = $row['s_name'];
         $fname = $row['s_father_name'];
         $class = $row['s_class'];
         $phone = $row['s_phone'];
         $email = $row['s_email'];
         $address = $row['s_address'];
      
 ?>               
                <tr>
                   <td><?php echo $id;  ?></td>
                   <td><?php echo $name;  ?></td>
                   <td><?php echo $fname;  ?></td>
                   <td><?php echo $class;  ?></td>
                   <td><?php echo $phone;  ?></td>
                   <td><?php echo $email;  ?></td>
                   <td><?php echo $address;  ?></td>
                                  
                </tr>
<?php  } ?>                
            </table>
        </div>
        
</body>
</html>