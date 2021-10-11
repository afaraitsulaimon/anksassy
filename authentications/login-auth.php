<?php
     session_start();
    require_once("../database/db.php");
    require_once("../handler/data-handler.php");


        if (isset($_POST['userLoginButton'])) {
            
            $loginErrors = array();

            $theUserLoginEmailAdd = sanitize($_POST['userLoginEmail']);
            $theUserLoginPassCode = sanitize($_POST['userLoginPassword']);
          

         
           

            $selectTheUser = "SELECT * FROM `users_registration` WHERE `emailAddress` = '$theUserLoginEmailAdd' ";

            $querySelectTheUser = mysqli_query($connection, $selectTheUser);

            if (!$querySelectTheUser) {
                
                die("could not query querySelectTheUser" .mysqli_error($connection));
            }

            $fetchTheParticularUser = mysqli_fetch_assoc($querySelectTheUser);
            $thePassHashed = $fetchTheParticularUser["passCodeOfUser"] ?? null;
           
           

           

           

            $verifyUserPass = password_verify($theUserLoginPassCode , $fetchTheParticularUser["passCodeOfUser"]); 
          
            if (!$verifyUserPass) {
                
                $loginErrors[] = "Incorrect Login details";
            }
            
           

            //let's check for possible errors

            if (empty($theUserLoginEmailAdd)) {
               
                $loginErrors[] = "Email is required";
            }

            if (empty($theUserLoginPassCode)) {
               
                $loginErrors[] = "Password is required";
            }

            $getThisUserDetails = "SELECT * FROM `users_registration` WHERE `emailAddress` = '$theUserLoginEmailAdd' ";
            
          

           
            $queryGetThisUser = mysqli_query($connection, $getThisUserDetails);
           
         

            $thisUserNumRows = mysqli_num_rows($queryGetThisUser);

         
            $fetchForThisUser = mysqli_fetch_assoc($queryGetThisUser);
            $userFetched = $fetchForThisUser['ActivationType'] ?? null;


       


            

            if ($thisUserNumRows <= 0) {
                
                $loginErrors[] = "Incorrect Username or Password ";

            }

            

            if ($thisUserNumRows = 1 && $userFetched === 'inActive') {
              
                    
                    $loginErrors[] = "Account is not activated ";
            
            }



            
            if (empty($loginErrors) && $userFetched == 'confirmed') {

                $getTheLoginSuccessfulUser = "SELECT * FROM `users_registration` WHERE emailAddress = '$theUserLoginEmailAdd' ";
                   
                $queryGetTheLoginSuccessfulUser = mysqli_query($connection, $getTheLoginSuccessfulUser);

                if (!$queryGetTheLoginSuccessfulUser) {
                    
                    die("could not query queryGetTheLoginSuccessfulUser" .mysqli_error($connection));
                }

                $fetchTheLoginUserDet = mysqli_fetch_assoc($queryGetTheLoginSuccessfulUser);
                
                $loginSuccessUserType = $fetchTheLoginUserDet['userRegType'] ??  null;

                

                if ($loginSuccessUserType === 'buyers') {
                    
                    $_SESSION['buyersIdOfUser'] = $fetchTheLoginUserDet['users_id'];

                   
                    header("location:buyers/dashboard.php");
                    exit();

                }elseif ($loginSuccessUserType === 'sellers') {
                    
                    $_SESSION['sellerIdOfUser'] = $fetchTheLoginUserDet['users_id'];
                    header("location:sellers/dashboard.php");
                    exit();

                }
                
                
               
            }else{

                $theLoginErrorMessages = "<ul>";

                foreach ($loginErrors as $loginError) {
                    
                    $theLoginErrorMessages .= "<li>$loginError</li>";
                  
                }

                $theLoginErrorMessages .= "</ul>";
            }

          
            


        }
?>