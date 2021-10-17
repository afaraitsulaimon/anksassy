<?php
    require_once("../authentications/retrieve-forgotpw-auth.php");
    require_once("../authentications/get-forgotpw-token.php");
    
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Righteous&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/out-style.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid register-header">
        <div class="row">
            <div class="col-12">
                <a class="logo-text" href="../index.php">AnkSassy</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-around">

        

    <div class="col-7 forgot-form rounded">
                      <?php

                        if (isset($_GET['invalidToken']) && $_GET['invalidToken'] === 'failedToken') {
                            
                            echo "<div class='alert alert-danger mt-4'>Token is incorrect or invalid</div>";

                        }elseif (isset($_GET['expiredToken']) && $_GET['expiredToken'] === 'failedToken') {
                            
                            echo "<div class='alert alert-danger mt-4'>Token has expired</div>";

                        }elseif (isset($_GET['passResetStatus']) && $_GET['passResetStatus'] === 'successful') {
                            
                            echo "<div class='alert alert-success text-center mt-4'>Password Successfully created, Proceed to Login</div>";
                       
                        }elseif (isset($theErrMessageOnResetPassCode)) {
                            
                            echo "<div class='alert alert-danger mt-4'> $theErrMessageOnResetPassCode </div>";
                        }

                      ?>
                <h3>Enter new Password</h3>
                <form method="POST" name="retrieveForgotPassForm" action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>">
                    <div class='form-group'>
                        <input type="password" name='newLoginPassword' placeholder="Enter new password" class='form-control'>
                    </div>

                    <div id="errorOnNewLoginPassword" class='text-danger text-center'>
                       
                       </div>


                    <div class='form-group'>
                        <input type="password" name='confirmNewLoginPassword' placeholder="Confirm new password" class='form-control' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least 1 number and 1 uppercase and lowercase letter">
                    </div>

                    <div id="errorOnConfirmNewLoginPassword" class='text-danger text-center'>
                       
                    </div>

                    <div class='form-group'>
                        <input type="hidden" name='toksForRetEntry' class='form-control' value='<?php if(isset($theTemporaryTokeForPassReset)){
                                    echo $theTemporaryTokeForPassReset;
                                }?>'>
                    </div>


                    <div class='form-group'>
                        <button type="submit" name="resetPasswordButton" class='form-control btn btn-light'>Reset Password</button>
                    </div>



                </form>

                <p class="text-center">Return to <a href="login.php" class="text-center">Login</a></p>
            </div>
        </div>
    </div>



    <script src="../script//retrieve-forgotpw-validation.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>

