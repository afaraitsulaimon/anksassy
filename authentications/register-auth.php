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


    if (isset($_POST['registerBtn'])) {
       
        // store all errors in a variable array

        $registrationErrors = array();

        //get the input values for each field

        $theFirstNameOfUser = sanitize($_POST['userfirstname']);
        $theLastNameOfUser = sanitize($_POST['userlastname']);
        $thePhoneNumOfUser = sanitize($_POST['userphone']);
        $theEmailAddOfUser = sanitize($_POST['useremail']);
        $thePassCodeOfUser = sanitize($_POST['userpass']);
        $hashedPw = password_hash($thePassCodeOfUser, PASSWORD_DEFAULT);
        $theConfirmPassCodeOfUser = sanitize($_POST['passconfirm']);

        if ($_POST['usertype'] && $_POST['usertype'] === 'buyers') {
            
            $theTypeUserBelongTo = $_POST['usertype'];
        }
        

        if ($_POST['userActivationStatus'] && $_POST['userActivationStatus'] === 'inActive') {
            
            $theUserActiveStatus = $_POST['userActivationStatus'];
        }
        

        
        //CHECK ERROR FROM USERS INPUT

        if (empty($theFirstNameOfUser)) {
           
            $registrationErrors[] = "First name is required";
        }

        if (empty($theLastNameOfUser)) {
           
            $registrationErrors[] = "Last name is required";
        }
        
        //check if it is no
        // check if it up to 11
        // check if empty
        
        if (empty($thePhoneNumOfUser)) {
           
            $registrationErrors[] = "Phone Number is required";

        }elseif (strlen($thePhoneNumOfUser) < 11 || strlen($thePhoneNumOfUser) > 11) {

            $registrationErrors[] = "Phone must be 11 digits";

        }elseif(!is_numeric($thePhoneNumOfUser)) {

            $registrationErrors[] = "Phone must be digits";
        }


        //check if email not empty
        //check if the format is correct
        //check if the email is not already existing


        if (empty($theEmailAddOfUser)) {

            $registrationErrors[] = "Email is required";

        }elseif (!filter_var($theEmailAddOfUser, FILTER_VALIDATE_EMAIL)) {

            $registrationErrors[] = "Invalid Email";
          }


          $allRegUsers = "SELECT * FROM users_registration `users_registration` WHERE emailAddress = '$theEmailAddOfUser' ";

          $queryAllRegUsers = mysqli_query($connection,$allRegUsers);

          if (!$queryAllRegUsers) {
              
            die("could not query queryAllRegUsers".mysqli_error($connection));

          }

          $countRows = mysqli_num_rows($queryAllRegUsers);

          if ($countRows >= 1) {
              
            $registrationErrors[] = "Email address already exist";

          }

        
        //check if the pass meets length of 6
        //if it meets up with containing characters and digits
        
          $pwNumber = preg_match('@[0-9]@', $thePassCodeOfUser);
          $uppercase = preg_match('@[A-Z]@', $thePassCodeOfUser);
          $lowercase = preg_match('@[a-z]@', $thePassCodeOfUser);
          $specialChars = preg_match('@[^\w]@', $thePassCodeOfUser);
          $passLength = 6;
  
          if (empty($thePassCodeOfUser)) {

            $registrationErrors[] = "Password is required";

          } elseif (strlen($thePassCodeOfUser) < $passLength || !$pwNumber || !$uppercase || !$lowercase || !$specialChars) {
            
            $registrationErrors[] = "Password must be at least 6 and must contain at least 1 number, 1 uppercase letter, 1 lowercase letter and 1 special character";


        }

        //for confirm password, check if the password matches with the confirm password
        //check if it is not also empty

        if (empty($theConfirmPassCodeOfUser)) {

            $registrationErrors[] = "Confirm Password is required";

        }elseif ($theConfirmPassCodeOfUser != $thePassCodeOfUser) {

            $registrationErrors[] = "Password does not match";

        }

        //check if no user type is selected

        if ($_POST['usertype'] && $_POST['usertype'] === 'noneuser') {
            
            $registrationErrors[] = "User Type is required";

        }


        //once no error, send details to database

        if (empty($registrationErrors)) {
            
            $storeNewUser = "INSERT INTO `users_registration` (`firstName`,`lastName`,`emailAddress`,`phoneNumber`,`passCodeOfUser`,`userRegType`,`ActivationType`,`dateReg`)";
            $storeNewUser .= "VALUES('$theFirstNameOfUser','$theLastNameOfUser','$theEmailAddOfUser','$thePhoneNumOfUser','$hashedPw','$theTypeUserBelongTo','$theUserActiveStatus', NOW())";

            $queryStoreNewUser = mysqli_query($connection, $storeNewUser);

            if (!$queryStoreNewUser) {
                
                die("could not query queryStoreNewUser" .mysqli_error($connection));
            }

            $regToken = bin2hex(random_bytes(50));   
            $registerConfirmation = "INSERT INTO `regconfirmationtoken` (`user_email_address`, `registrationToken`,`tokenCreatedDate`) VALUES ('$theEmailAddOfUser', '$regToken', NOW())";
            
            

            $queryRegisterConfirmation = mysqli_query($connection,$registerConfirmation);

            if (!$queryRegisterConfirmation) {
                
                die("could not query queryRegisterConfirmation" .mysqli_error($connection));
            }
 

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPDebug  = 1;  
            $mail->SMTPAuth   = TRUE;
            $mail->SMTPSecure = "ssl";
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465;
            $mail->Username = "anksassyemail@gmail.com";
            $mail->Password = "$mailer_p";
            $mail->AddAddress("$theEmailAddOfUser", "User");
            $mail->SetFrom("anksassyemail@gmail.com", "Admin");
            $mail->AddReplyTo("anksassyemail@gmail.com", "Admin");
            $mail->AddCC("anksassyemail@gmail.com", "Admin");
            $mail->Subject = "Confirm You Registration";
            $content = "Hi $theFirstNameOfUser, click on this <a href=\"https://localhost/anksassy/pages/confirm-registration.php?token= . $regToken . \">Click here</a> to confirm your registration";
       
            $mail->WordWrap = 100;
            $mail->IsHTML(true);
            $mail->MsgHTML($content);
           
            
             $mail->Send();

            header("location:register.php?regStatus=successfulReg");
            exit();

        }else{

            $theErrorsInRegistration = "<ul>";

            foreach ($registrationErrors as $registrationError) {

                 $theErrorsInRegistration .= "<li>$registrationError</li>";
            }

            $theErrorsInRegistration .= "</ul>";
        }
       
    }
