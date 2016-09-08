<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</head>
<body>
        <!--  NavBar is start here-->
        <nav class="navbar navbar-inverse navnbar-fixed ">
            <div class="container-fluid">
                <div class="navbar-brand">
                    School Managemnet
                </div>
                <div class="navbar-header navbar-right">
                  <ul class="nav navbar-nav ">
                      <li><a href="#">Home</a></li>
                      <li><a href="">Blog</a></li>
                      <li><a href="regForm.php">Registration</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Contact</a></li>
                  </ul>
                </div>
                
            </div>  
        </nav>
        <!-- Navbar is end here -->
         <!-- registratton is success body -->
        <div class="container" >
            <div class="jumbotron">
                <h1><?php
                        echo @$_GET['success'];
                      ?>               
                 </h1>
                  <p class="lead">you Completed the Registration and we'll inform you after couple of days and prepration to test .Text will be annoncement .</P>
                  <p>
                      <a href="#" class=" btn btn-lg btn-primary">More Details<a/> 
                 </p>
            </div>
        </div>
        
        
</body>
</html>        
      