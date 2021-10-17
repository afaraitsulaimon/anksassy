<?php
require_once("../database/db.php");
require_once("../handler/data-handler.php");



if (isset($_POST['resetPasswordButton'])) {
   
   $tokenGottenForPassWordReset = sanitize($_POST['toksForRetEntry']);
    // get the details of the temporary token

    $selectTemporaryToksDetails = "SELECT * FROM `forgetpw_temporary_token` WHERE tempTokeForForgotPw = '$tokenGottenForPassWordReset' ";


  

    $queryTemporaryToksDetails  = mysqli_query($connection,$selectTemporaryToksDetails);

    if (!$queryTemporaryToksDetails) {
        
        die("could not query queryTemporaryToksDetails" .mysqli_error($connection));
    }

    $numRowsOfTemporaryToksDetails = mysqli_num_rows($queryTemporaryToksDetails);

  
   
    //checking if the token is not available

    if ($numRowsOfTemporaryToksDetails <= 0) {
        
     
        header("location:retrieve-forgot-password.php?invalidToken=failedToken");
        exit();
    }


    $fetchTemporaryToksDetails = mysqli_fetch_assoc($queryTemporaryToksDetails);

    $emailOfTemporaryToks = $fetchTemporaryToksDetails['forgotPasswordEmail'] ?? null;
    $dateTemporaryToksCreated = $fetchTemporaryToksDetails['dateTempCreated'] ?? null;

    // checking if the token has not expired
    //convert the time using   strtotime($dateTemporaryToksCreated);
    //get the current time, the token is put to user
    // then get the difference between the 2 time 
    // then check if the time given has elapsed , which is with 15mins
    //if token is more than 15 minutes, it would be deleted



        $createdToksTimeToSeconds = strtotime($dateTemporaryToksCreated);
       $currentTimeToksInUse = time();
       $diffBtwTheTwoToksTime = $currentTimeToksInUse - $createdToksTimeToSeconds;

  

       if ($diffBtwTheTwoToksTime < 900) {
           
            $deleteExpiredToks = "DELETE FROM `forgetpw_temporary_token` WHERE forgotPasswordEmail = '$emailOfTemporaryToks' ";

            $queryDeleteExpiredToks = mysqli_query($connection, $deleteExpiredToks);


              if (!$queryDeleteExpiredToks) {
                  
                die("could not query queryDeleteExpiredToks" .mysqli_error($connection));
              }

            header("location:retrieve-forgot-password.php?expiredToken=failedToken");
            exit();
       }


       //SO IF PASS ALL THE TEST ABOVE, THE PROCEED TO PROCESS FORM

    $theResetPasswordErrors = array();

    $thePasswordToSetTo = sanitize($_POST['newLoginPassword']);
    $hashedNewSetPassword = password_hash($thePasswordToSetTo, PASSWORD_DEFAULT);
    
    $theConfirmPasswordToSetTo = sanitize($_POST['confirmNewLoginPassword']);

    // check for errors

    if (empty($tokenGottenForPassWordReset)) {
        
        $theResetPasswordErrors[] = "Invalid Token";
    }

    if (empty($thePasswordToSetTo)) {
       
        $theResetPasswordErrors[] = "Password is required";

    }elseif (!empty($thePasswordToSetTo) && strlen($thePasswordToSetTo) < 6) {
        
        $theResetPasswordErrors[] = "Password must be at least 6";
    }

    $newSetpwNumber = preg_match('@[0-9]@', $thePasswordToSetTo);
    $uppercase = preg_match('@[A-Z]@', $thePasswordToSetTo);
    $lowercase = preg_match('@[a-z]@', $thePasswordToSetTo);
    $specialChars = preg_match('@[^\w]@', $thePasswordToSetTo);
    $passLength = 6;

   if (strlen($thePasswordToSetTo) < !$newSetpwNumber || !$uppercase || !$lowercase || !$specialChars) {
      
      $theResetPasswordErrors[] = "Password must be at least 6 and must contain at least 1 number, 1 uppercase letter, 1 lowercase letter and 1 special character";


  }

    

    if (empty($theConfirmPasswordToSetTo)) {
       
        $theResetPasswordErrors[] = "Password is required";

    }elseif (!empty($theConfirmPasswordToSetTo) && $theConfirmPasswordToSetTo != $thePasswordToSetTo) {
        
        $theResetPasswordErrors[] = "Password does not match";

    }


        if (empty($theResetPasswordErrors) && $numRowsOfTemporaryToksDetails != 0) {
            
            $resetThePassCodeToNew = "UPDATE `users_registration` SET `passCodeOfUser` = '$hashedNewSetPassword' WHERE `emailAddress` = '$emailOfTemporaryToks' ";
        
            $queryResetThePassCodeToNew = mysqli_query($connection, $resetThePassCodeToNew);

            if (!$queryResetThePassCodeToNew) {
                
                die("could not query queryResetThePassCodeToNew" .mysqli_error($connection));
            }

            $deleteTheTemporaryGenToks = "DELETE FROM `forgetpw_temporary_token` WHERE forgotPasswordEmail = '$emailOfTemporaryToks' ";

            $queryDeleteTheTemporaryGenToks = mysqli_query($connection, $deleteTheTemporaryGenToks);

            header("location:retrieve-forgot-password.php?passResetStatus=successful");
            exit();

        }else{

            $theErrMessageOnResetPassCode = "<ul>";

            foreach ($theResetPasswordErrors as $theResetPasswordError) {
               
                $theErrMessageOnResetPassCode .= "<li>$theResetPasswordError</li>";
            }
            $theErrMessageOnResetPassCode .= "</ul>";
        }
}








?>