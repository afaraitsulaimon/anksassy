<?php
require_once("../database/db.php");
require_once("../handler/data-handler.php");
require_once("mail-secure-pw.php");
require('../vendor/phpmailer/phpmailer/src/PHPMailer.php');
require('../vendor/phpmailer/phpmailer/src/Exception.php');
require('../vendor/phpmailer/phpmailer/src/SMTP.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['retrievePassButton'])) {
    
    $forgotPasswordErrors = array();

    $theForgotPassWordEmailAdd = sanitize($_POST['emailForForgotPw']);
  

    if (empty($theForgotPassWordEmailAdd)) {
        

        $forgotPasswordErrors[] = "Email address is Required";

    }

    $checkThisEmailForForgetPw = "SELECT * FROM `users_registration` WHERE emailAddress = '$theForgotPassWordEmailAdd' ";

  
    $queryCheckThisEmailForFgPw = mysqli_query($connection, $checkThisEmailForForgetPw);

    if (!$queryCheckThisEmailForFgPw) {
        
        die("could not query queryCheckThisEmailForFgPw" .mysqli_error($connection));
    }

    $numRowsCheckThisEmailAdd = mysqli_num_rows($queryCheckThisEmailForFgPw);

    if ($numRowsCheckThisEmailAdd = 0) {
        
        $forgotPasswordErrors[] = "Email address does not exist";
    }


    if (!empty($theForgotPassWordEmailAdd) && !filter_var($theForgotPassWordEmailAdd, FILTER_VALIDATE_EMAIL)) {
        
        $forgotPasswordErrors[] = "Incorrect Email Address";

    }

    if (empty($forgotPasswordErrors)) {

        $getTheEmailThatForgotPassCode = "SELECT * FROM `users_registration` WHERE emailAddress = '$theForgotPassWordEmailAdd' ";

        $queryGetTheEmailThatForgotPassCode = mysqli_query($connection, $getTheEmailThatForgotPassCode);

        if (!$queryGetTheEmailThatForgotPassCode) {
            
            die("could not query queryGetTheEmailThatForgotPassCode" .mysqli_error($connection));
        }

        $fetchGetTheEmailThatForgotPassCode = mysqli_fetch_assoc($queryGetTheEmailThatForgotPassCode);

        $emailOfThePassCodeNeeded = $fetchGetTheEmailThatForgotPassCode['emailAddress'] ?? null;

        //then generate a random number

            $tempTokenForFgPw = bin2hex(random_bytes(50));   
        $emailOfThePassCodeNeeded = $fetchGetTheEmailThatForgotPassCode['emailAddress'] ?? null;
        $temporaryToken = "INSERT INTO `forgetpw_temporary_token` (`forgotPasswordEmail`, `tempTokeForForgotPw`,`dateTempCreated`) VALUES ('$emailOfThePassCodeNeeded', '$tempTokenForFgPw', NOW())";

        $queryTemporaryToken = mysqli_query($connection, $temporaryToken);

        if (!$queryTemporaryToken) {
            
            die("could not query queryTemporaryToken" .mysqli_error($connection));
        }

        // then send the email to the user

        
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug  = 1;  
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "ssl";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->Username = "anksassyemail@gmail.com";
        $mail->Password = "$mailer_p";
        $mail->AddAddress("$emailOfThePassCodeNeeded", "User");
        $mail->SetFrom("anksassyemail@gmail.com", "Admin");
        $mail->AddReplyTo("anksassyemail@gmail.com", "Admin");
        $mail->AddCC("anksassyemail@gmail.com", "Admin");
        $mail->Subject = "Confirm You Registration";
        $content = "Hi User, click on this <a href=\"https://localhost/anksassy/pages/retrieve-forgot-password.php?token_pw= . $tempTokenForFgPw . \">Click here</a> to confirm your registration";
   
        $mail->WordWrap = 100;
        $mail->IsHTML(true);
        $mail->MsgHTML($content);
       
        
         $mail->Send();

        header("location:forget-password.php?forgotpwStatus=successfulPassRequest");
        exit();

            
    }else{

        $theErrorsInForgetPass = "<ul>";

        foreach ($forgotPasswordErrors as $forgotPasswordError) {

             $theErrorsInForgetPass .= "<li>{$forgotPasswordError}</li>";
        }

        $theErrorsInForgetPass .= "</ul>";
    }
}

?>