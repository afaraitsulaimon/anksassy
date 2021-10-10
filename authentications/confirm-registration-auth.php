
<?php
        if (isset($_GET['token'])) {

            

           $theTokenForTheReg = $_GET['token'];
           
        
        
           
           //get all the token and check if the token exists and if the token has not expired
           //then delete the token and change the in-Active in the registration table to confirm, 
           //so that the user can log in
           
           $theTokenDetails = "SELECT * FROM `regconfirmationtoken` WHERE registrationToken = $theTokenForTheReg ";

           $queryTheTokenDetails = mysqli_query($connection, $theTokenDetails);
          
           


          

            

           if (!$queryTheTokenDetails) {

               die("could not query queryTheTokenDetails" .mysqli_error($connection));
           }

           $fetchTheTokenDetails = mysqli_fetch_assoc($queryTheTokenDetails);
           
           
           $dateForThisToken = $fetchTheTokenDetails['tokenCreatedDate'] ?? null;

           $emailToDel = $fetchTheTokenDetails['user_email_address'] ?? null;
          

     
        $numRowsOfToken = mysqli_num_rows($queryTheTokenDetails);

         //checking if the token used doesn't exist in the db
       //redirect back to registration Page

            if ($numRowsOfToken < 1) {
                

                header("location:confirm-registration.php?noToken=unAvailableToken");
                exit();
                
            }
           

            
           //convert the time the token was created to seconds using strtotime()
           // take the current time using time()
        //check the difference between the 2 time 
        // and check if the time is greater or less than 86400 (which is 24hrs)
           $timeTokenWasCreated = strtotime($dateForThisToken);

           $currentTime = time();
          
           $diffBtwTheTwoTime = $currentTime - $timeTokenWasCreated;

           //checking if the time difference of the 2 time is greater than 24hrs (86400)
           //Then Delete the token generated and also delete the user from the registration
           //so that they can register

           if ($diffBtwTheTwoTime > 86400) {
               
               $removeUser = "DELETE FROM `users_registration` WHERE emailAddress = '$emailToDel' ";
             
               $queryRemoveUser = mysqli_query($connection, $removeUser);

               if (!$queryRemoveUser) {
                   
                die("could not query queryRemoveUser" .mysqli_error($connection));

               }

               $delTokenDetails = "DELETE FROM `regconfirmationtoken` WHERE `user_email_address` = '$emailToDel' ";
               $queryDelTokenDetails= mysqli_query($connection, $delTokenDetails);

               if (!$queryDelTokenDetails) {
                   
                die("could not query queryDelTokenDetails" .mysqli_error($connection));

               }

               header("location:confirm-registration.php?tokenStatus=unConfirmedToken");
               exit();

           }elseif ($diffBtwTheTwoTime < 86400){

            // if token is till less than 24hrs
            // the update the user to be active and delete token

              $updateUser = "UPDATE `users_registration` SET `ActivationType` = 'confirmed' WHERE `emailAddress` = '$emailToDel' ";

              $queryUpdateUser = mysqli_query($connection, $updateUser);

              if (!$queryUpdateUser) {
                  
                die("could not query queryUpdateUser" .mysqli_error($connection));
              }

              $delTokenDetails = "DELETE FROM `regconfirmationtoken` WHERE `user_email_address` = '$emailToDel' ";
              $queryDelTokenDetails= mysqli_query($connection, $delTokenDetails);

              if (!$queryDelTokenDetails) {
                  
               die("could not query queryDelTokenDetails" .mysqli_error($connection));

              }

              header("location:confirm-registration.php?tokenStatus=confirmedToken");
              exit();
              
           }
        

         
       
        }
?>