<!doctype html>
<html class="no-js" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="30; url='contact.php'" />
<title>Mail Conformation</title>
</head>

<body>

<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
        $name= test_input($_POST['name']);
        $email = test_input($_POST['email']);
        $mobile = test_input($_POST['mobile']);
        $message = test_input($_POST['msg']);
        // $place = test_input($_POST['place']);
       
        $client_ip = $_SERVER['REMOTE_ADDR'];
        
   
        $msg = " <table  width='60%' style='border:1px solid black;'>
                    <th style='background-color:#0051A4;color:#FFFFFF;text-align: center;'>Description</th>
                    <th style='background-color:#0051A4;color:#FFFFFF;text-align: center;'>Value</th>
                    <tr>
                        <td width='65%'>Name</td>
                        <td>" . $name . "</td></tr>

                    <tr style='background-color:#AAD4FF;'>
                        <td width='65%'>Email</td>
                        <td>" . $email . "</td>
                    </tr>
                        
                    
                    <tr style='background-color:#AAD4FF;'>
                        <td width='65%'>Phone</td>
                        <td>" . $mobile . "</td> 
                    </tr>
                    
                    <tr style='background-color:#AAD4FF;'>
                        <td width='65%'>Message</td>
                        <td>" . $message . "</td> 
                    </tr></table>";

           //Deal with the email
       
            // $to="shafeebash@gmail.com";
            $to="support@alkaaseblawyers.com";
            $subject = 'Enquiry From alkaaseblawyers.com (contact-us)';
            // Always set content-type when sending HTML email
            $headers  = "From: Alkaseeb <noreply@alkaaseblawyers.com>" . "\r\n" . "Reply-To: $email"  ;
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=utf-8" . "\r\n";

// More headers
           
            // $headers  .= 'MIME-Version: 1.0' . "\r\n";
            // $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
           // $a = mail( $mail_to_send_to, $subject, $message, $headers );

            if (mail($to, $subject, $msg, $headers)) {
                echo "<meta http-equiv='refresh' content='3; url=index.php' /><br/><center><h3>Thank you..! </h3>.<h4> Your mail has been sent. We will contact soon.</h4></center>";
               
            } else {
                echo "<meta http-equiv='refresh' content='3; url=contact-us.php' /><br/><center><h3>Sorry ..! </h3>.<h4> Your mail not sent. Please Try Again.</h4></center>
                <a href='javascript: history.go(-1)'>Click here to go back</a>";
               
            }

    }

    
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 
    
    ?>
 

</body>
</html>