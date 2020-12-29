<?php
  //start a session -- needed for Securimage Captcha check
  session_start();
  /**
   * Sets error header and json error message response.
   *
   * @param  String $messsage error message of response
   * @return void
   */
  function errorResponse ($messsage) {
    header('HTTP/1.1 500 Internal Server Error');
    die(json_encode(array('message' => $messsage)));
  }
  /**
   * Pulls posted values for all fields in $fields_req array.
   * If a required field does not have a value, an error response is given.
   */
  function constructMessageBody () {
    $fields_req =  array("fname" => true, "subject" =>true, "email" => true,"phone"=>true, "msg" => true);
    $message_body = "";
    foreach ($fields_req as $name => $required) {
      $postedValue = $_POST[$name];
      if ($required && empty($postedValue)) {
        errorResponse("$name is empty.");
      } else {
        $message_body .= ucfirst($name) . ":  " . $postedValue . "\n";
      }
    }
    return $message_body;
  }
  header('Content-type: application/json');
  //do Captcha check, make sure the submitter is not a robot:)...
  $url = 'https://www.google.com/recaptcha/api/siteverify';
  $opts = array('http' =>
    array(
      'method'  => 'POST',
      'header'  => 'Content-type: application/x-www-form-urlencoded',
      'content' => http_build_query(array('secret' => '6LeVEg0TAAAAAObqPWwCMnCYA9okL_FDmZ61v5yO', 'response' => $_POST[]))
    )
  );
//   $context  = stream_context_create($opts);
//   $result = json_decode(file_get_contents($url, false, $context, -1, 40000));

  if (!$result->success) {
    errorResponse('reCAPTCHA checked failed!');
  }
  //attempt to send email
  $messageBody = constructMessageBody();
//   require './library/vender/php_mailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
  $mail->CharSet = 'UTF-8';
  $mail->isSMTP();
  $mail->Host = "hummingsoftindia.com";
  $mail->SMTPAuth = true;
  $mail->Username = "smtp@hummingsoftindia.com";
  $mail->Password = "SMGogle@321";
  
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;
  
  $mail->setFrom($_POST['email'], $_POST['fname'],$_POST['msg'],$_POST['subject']);
  $mail->addAddress("join@hummingsoftindia.com");
  $mail->Subject = $_POST['reason'];
  $mail->Body  = $messageBody;
  //try to send the message
  if($mail->send()) {
    echo json_encode(array('message' => 'Your message was successfully submitted.'));
  } else {
    errorResponse('An expected error occurred while attempting to send the email: ' . $mail->ErrorInfo);
  }
?>