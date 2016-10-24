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
                        <li><a href="admin.php">Home</a></li>
                      <li><a href="regShowRecord.php">Regitration Details</a></li>
                      <li><a href="msgRecord.php">Massage Details</a></li>
                  </ul>
                </div>
                
            </div>  
        </nav>
     </div>    
        <!-- Navbar is end here -->
        
        <!-- Show Registration Record -->
        <div class="container">
            <table class="table table-default table-hover">
                <tr class="">
                    <th>Serial No</th>
                    <th>Massager Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Massage</th>
                    
                </tr>
                
                
 <?php
     include("./database/db_connect.php");
     $query = "SELECT * FROM massage";
     $run = mysql_query($query);
     while ($row=mysql_fetch_array($run)) {
         $id = $row['s_no'];
         $name = $row['s_name'];
         $email = $row['s_email'];
         $subject = $row['s_subject'];
         $massage = $row['s_massage'];
        
 ?>               
                <tr>
                   <td><?php echo $id;  ?></td>
                   <td><?php echo $name;  ?></td>
                   <td><?php echo $email;  ?></td>
                   <td><?php echo $subject;  ?></td>
                   <td><?php echo $massage;  ?></td>
                   
                                  
                </tr>
<?php  } ?>                
            </table>
        </div>
        
</body>
</html>