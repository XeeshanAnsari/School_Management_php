<?php

    mysql_connect("localhost","root","");
    mysql_select_db("school");
   if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $massage = $_POST['massage'];
     
      


     $query = "insert into massage (s_name,s_email,s_subject,s_massage) value('$name','$email','$subject','$massage')";  
     
     if(mysql_query($query)){
         echo"<script> window.open('../index.php?massaged=Massaged Send','_self')</script>";
     } 

   }
   
?>