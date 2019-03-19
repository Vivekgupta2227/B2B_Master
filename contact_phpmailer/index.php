<?php
$result = "";
if(isset($_POST['submit'])){
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;                              // Passing `true` enables exceptions
    //Server settings
    $mail->SMTPDebug = 1;
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'vivek2227gupta@gmail.com';                 // SMTP username
    $mail->Password = 'Rekhagupta12*';                           // SMTP password
   // $mail->SMTPSecure = 'tls';                           // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->isSMTP(true);                                      // Set mailer to use SMTP
    $mail->addAddress('vivek2727gupta@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
         // Add a recipient
    $mail->Subject = 'Form Submission'.$_POST['subject'];
    $mail->body ='<h1 align =center> Name:'.$_POST['name'].'<br>Email:'.$_POST['email'].'<br>Message:' .$_POST['msg'].'</h1>';
   if (!$mail->Send()) {
$result= "Something went wrong.Please try again";
}
else
{

$result ="Thanks".$_POST['name']."for contacting us.";

}
}

   ?>

<!DOCTYPE html>
   <html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Contact Form Bootstrap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4 mt-5 bg-light rounded">
        <h1 class="text-center font-weight-bold text-primary">Contact Us</h1>
        <hr class="bg-light">
        <h5 class="text-center text-success"><?=$result;?></h5>
        <form action="" method="post" id="form-box" class="p-2">
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
            <input type="text" name="subject" class="form-control" placeholder="Enter subject" required>
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-comment-alt"></i></span>
            </div>
            <textarea name="msg" id="msg" class="form-control" placeholder="Write your message" cols="30" rows="4" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Send">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>