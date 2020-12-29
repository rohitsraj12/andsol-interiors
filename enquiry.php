<?php
if(isset($_POST['enquiry_submit'])){
        // message from
        $user_name = $_POST['fname'];
        $user_email = $_POST['email'];
        $user_phone = $_POST['phone'];
               
        $to = "marketingandsol@gmail.com";
        $subject = "Message from website home page enquiry | andsolinteriors.com";
        $message = "<p>Message from website home page enquiry</p></br>";
        $message .= "<p> I am  ". $user_name ."</p></br>";
        $message .= "<p> My e-mail ". $user_email ."</p></br>";
        $message .= "<p> My telephone number ". $user_phone ."</p></br>";
        $message .= "<p>Thank you,</p>";
        $message .= "<p>". $user_name ."</p>";
        $message .= "<p>" . $user_email . " | " . $user_phone . "</p>";
        
        $headers = "From:" . $user_name . " <" . $user_email . ">\r\n";
        $headers .= "Reply-To: " . $user_email . "\r\n";
        $headers .= "Content-type: text/html\r\n";
    
        mail($to, $subject, $message, $headers);

        header("location:index.html");
}
?>