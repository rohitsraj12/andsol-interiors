<?php
if(isset($_POST['submit'])){
        // message from
        $user_name = $_POST['fname'];
        $user_email = $_POST['email'];
        $user_phone = $_POST['phone'];
        $user_message = $_POST['msg'];
        
        // echo $user_name ." " . $user_email ." " . $user_phone ." " . $user_message;
        // message to
        // $email = $_POST['email'];
        // $admin_email = "admin@facultyforyou.com";

       
        $to = "marketingandsol@gmail.com";
        $subject = "Message from public contact form | andsolinteriors.com";
        $message = "<p>Message from public contact form</p></br>";
        $message .= "<p> I am  ". $user_name ."</p></br>";
        $message .= "<p> My e-mail ". $user_email ."</p></br>";
        $message .= "<p> My telephone number ". $user_phone ."</p></br>";
        $message .= "<p>". $user_message ."</p></br>";
        $message .= "<p>Thank you,</p>";
        $message .= "<p>". $user_name ."</p>";
        $message .= "<p>" . $user_email . " | " . $user_phone . "</p>";
        
        $headers = "From:" . $user_name . " <" . $user_email . ">\r\n";
        $headers .= "Reply-To: " . $user_email . "\r\n";
        $headers .= "Content-type: text/html\r\n";
    
        mail($to, $subject, $message, $headers);

        header("location:contact.html");
}
?>