<?php
if(isset($_POST['Send']))
{
    $name=  $_POST['name'];	
    $email=  $_POST['email'];
    $mobile=  $_POST['phone_number'];
    $select=  $_POST['select'];
    $message1=  $_POST['message'];
    
  
	
    $to='jcbwalaservice@gmail.com';
    $subject="VISITOR CONTACT INFORMATION"; 
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <samir@thewebfactory.in>' . "\r\n";
    $headers .= 'Cc: ' . "\r\n";
    $message=" Contact Details "."<br/><br/>";
    $message.="Name: $name"."<br/>";
    $message.="Email: $email"."<br/>";
    $message.="Mobile: $mobile"."<br/>"; 
    $message.="Select your equipement: $select"."<br/>"; 
    $message.="Message: $message1"."<br/>"; 
    
    	

     $sentmail = mail($to,$subject,$message,$headers); 

    header('location:index.php');
}
?>