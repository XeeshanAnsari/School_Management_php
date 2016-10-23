<?php

    mysql_connect("localhost","root","");
    mysql_select_db("school");
   if(isset($_POST['submit'])){
      $name = $_POST['s_name'];
      $fname = $_POST['s_fname'];
      $class = $_POST['s_class'];
      $phone = $_POST['s_phone'];
      $email = $_POST['s_email'];
      $address = $_POST['s_address'];
      


     $query = "insert into registration (s_name,s_father_name,s_class,s_phone,s_email,s_address) value('$name','$fname','$class','$phone','$email','$address')";  
     
     if(mysql_query($query)){
         echo"<script> window.open('../index.php?success=Registration SuccessFull ','_self')</script>";
         echo"<script> window.open('../index.php?successPara=you Completed the Registration and we'll inform you after couple of days and prepration to test .Text will be annoncement . ','_self')</script>";
     }   

   }
   
?>
