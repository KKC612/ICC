<?php
 if(isset($_POST['submit']))
 {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
	$email = $_POST['email'];
    $phone = $_POST['phone'];
    $when = $_POST['when'];
	$email_from = $name.'<'.$email.'>';

 $to="mike@mgmason.com";
 $subject="ICC Enquiry!";
 $headers  = 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= "From: ".$email_from."\r\n";
 $message="	  
 	   
 		 First Name:
		 $fname 	   
         <br>
         Last Name:
         $lname
         <br>
 		 Email:
		 $email 
		 <br>
         Phone:
         $phone
         <br>
         When:
         $when	   
         	   
      
   ";
	if(mail($to,$subject,$message,$headers))
		 print "<script language='Javascript'>document.location.href='http://dev5.mgmason.com/contact.php#mdx' ;</script>";
	else
		print "Error To send Email";
	
 }
?>
