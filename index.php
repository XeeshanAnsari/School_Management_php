<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
     <script src="./js/new.js"></script>   
</head>
<body    onload="slideA();">
    
    
    
      <!--  NavBar is start here-->
     <div class="container-fuild" id="header"> 
        <nav class="navbar navbar-inverse navnbar-fixed ">
            <div class="container-fluid">
                <div class="navbar-brand">
                    School Managemnet
                </div>
                <div class="navbar-header navbar-right">
                  <ul class="nav navbar-nav ">
                      <li><a href="index.php">Home</a></li>
                      <li><a href="#sectionPart">Sections</a></li>
                      <li><a href="regForm.php">Registration</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#contact">Contact</a></li>
                  </ul>
                </div>
                
            </div>  
        </nav>
     </div>    
        <!-- Navbar is end here -->
          
        
         <!-- Image slider is start here -->
      <div id="imgSlider">
         <img src="image/img1.jpg" alt="" id="img">
         <div class="left-btn" ><img src="image/left.png"  onclick="slider(-1);" alt="" class="left-arrow"></div>
         <div class="right-btn" ><img src="image/right.png" onclick="slider(1);" alt="" class="right-arrow"></div>    
      </div>  
    <!-- Image slider is end here -->
    
    
        
    
    <!-- welcome is start here -->
    
    <div id="welcome">
        <div class="welcomeTag">
            <h1>A centre of <b>education excellence</b></h1>
            <p>Our School is a very  old institution,but our tradition is to seek constant renewal to keep abreast of successful develpments in teaching and learning.</p>
        </div>
    </div> 
    
    <!-- welcome is end here -->
    
    
    <!-- Section tag is start here -->
    
    <div id="sectionPart">
        <div class="container sections">
            <div class="col-md-3 sectionDivs">
                <img src="image/child.jpg" alt="">
                    <div>
                        <h1>Kindergraten</h1>
                        <p>Young children need the interest, support and encouragement of both the parents and teachers in order to develop self respect and the confidence to learn. These attitudes, coupled with the skills that will be acquired in the four years of Kindergarten will help to build the foundation for success throughout school life.</p>
                        <button class="btn btn-primary ">Read more</button>
                    </div>
            </div>
            <div class="col-md-3 sectionDivs">
                <img src="image/img3.jpg" alt="">
                    <div>
                        <h1>Junior</h1>
                        <p>In English, pupils learn to change the way they speak and write to suit different  situations, purposes and audiences. They read a range of texts and respond to different layers of meaning in them. They explore the use of language in literary and non-literary texts and learn how language works</p>
                        <button class="btn btn-primary ">Read more</button>
                    </div>
            </div>
            <div class="col-md-3 sectionDivs">
                <img src="image/img.png" alt="">
                    <div>
                        <h1>Middle</h1>
                        <p>Middle School curriculum is designed with the needs of the growing adolescent in mind. It creates excitement for learning by cultivating an intellectual environment where curiosity, creativity and aesthetic awareness is developed. In addition to this, analytical and critical thinking skills are enhanced</p>
                        <button class="btn btn-primary ">Read more</button>
                    </div>
            </div>
            
            
        </div>
    </div>
    <!-- Section tag is end here -->
    
    
    <!-- contact section is start here -->
    
    <div id="contact">
        <h1>Contact Us</h1>
        <div class="container">
           
           <div class="col-md-3 contactNumbers">
                
                 <h4>Principle</h4>
                 <p class="Conlink">Tel: (021)-1234567 <br>
                    Fax:(021) 1234556  <br>
                  <a href="#">example@gmail.com</a>      
                  </p><br>   
   
                <h4>Business Manager</h4>
                <p>Tel: (021)-1234567 <br>
                   <a href="#">example@gmail.com</a>
                </p><br>
                
                <h4>Chief Accountant</h4>
                <p>Tel: (021)-1234567 <br>
                   <a href="#">example@gmail.com</a>
                </p><br>
            </div>
            
            <div class="col-md-3  contactNumbers">
                <h4>Kindergraten - Headmaster</h4>
                 <p>Tel: (021)-1234567 <br>
                        Fax:(021) 1234556  <br>
                   <a href="#">example@gmail.com</a>      
                 </p><br>   
   
                <h4>Junior - Headmaster</h4>
                <p>Tel: (021)-1234567 <br>
                   <a href="#">example@gmail.com</a>
                </p><br>
                
                <h4>Middle - Headmaster</h4>
                <p>Tel: (021)-1234567 <br>
                   <a href="#">example@gmail.com</a>
                </p><br>
            </div>
            
            <div class="col-md-6">
                <div id="massageBox">
                    <form action="./database/massage.php" method="post">
                        <input type="text" name="name" id="name" placeholder="Enter Name" class="contact-input-field"><br>
                        <input type="text" name="email" id="email" placeholder="Enter Email" class="contact-input-field"><br>
                       <input type="text" name="subject" id="class" placeholder="Enter Subject" class="contact-input-field"><br>
                       <br><textarea name="massage" id="massage" placeholder="Massage" cols="31" rows="5"></textarea>
                       <br>
                       <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-primary " id="massageBtn">
                        
                    </form>
                </div>
            </div>
            
            
        </div>
    </div>
    
    <!-- contact section is end here -->
    
    
    <!-- Footer is start here-->
    <div id="footer">
        <div class="container">
            <div class="col-md-3 footerColum">
                <h3>COMPANY</h3>
                <ul style="list-style: none;">
                      <li><a href="index.html#header">Home</a></li>
                      <li><a href="#sectionPart">Sections</a></li>
                      <li><a href="regForm.php">Registration</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            
            <div class="col-md-3 footerColum">
                <h3>ABOUT US</h3>
                <ul>
                      <li><a href="#">Head Principle</a></li>
                      <li><a href="#">Principle</a></li>
                      <li><a href="#">Teacher's</a></li>
                      <li><a href="#">Manager</a></li>
                      <li><a href="#"></a></li>
                </ul>
            </div>
            <div class="col-md-3 footerColum">
                <h3>CONNECT US</h3>
                <ul>
                      <li><a href="#" class="connectIcon"> <img src="./image/fb.png"  alt=""> FaceBook</a></li>
                      <li><a href="#" class="connectIcon"> <img src="./image/tw.png"  alt=""> Twitter</a></li>
                      <li><a href="#" class="connectIcon"> <img src="./image/go.png"  alt=""> Google+</a></li>
                      <li><a href="#" class="connectIcon"> <img src="./image/ln.png"  alt=""> LinkedIn</a></li>
                      
                </ul>
            </div>
            
            
        </div>
        <hr>
         <div id="copyRight">
           <p>&#169; CopyRigth 2016 By the Group Of XeeshanDeveloper</p>
        </div>
    </div>
    <!-- footer is end here -->
   
        
</body>
</html>