<?php 
$name = $_POST ['name']; 
$visitor_email = $_POST ['email']; 
$subject = $_POST ['subject']; 
$message = $_POST ['message'];  

$email_form = 'WestPress39@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\ ".
                "User Email: $visitor_email.\ ".
                "Subject: $subject.\ ".
                "User Message: $message.\ ";


                $to = 'seline2107@gmail.com'; 

                $headers = "From: $email_from \r\n" ; 

                $headers .= "Reply-To: $visitor_email \r\n"; 

                mail($to, $email_subject, $email_body, $headers); 

                header ("Location: Contact.html");

?> 