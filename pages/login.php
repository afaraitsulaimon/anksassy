
<?php
   
    require_once("../authentications/login-auth.php");
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

    <title>
        <?php
        $title = "Login";
        require_once("../components/title.php");
        ?>
    </title>


</head>

<body>
    <div class="container-fluid login-header">
        <div class="row">
            <div class="col-12">
                <a class="logo-text" href="../index.php">AnkSassy</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row ">
            <div class="col-6 bg left-login-message">
                <div class="theFadeBackGroundColor">
                    <h1>Login & Enjoy your Day</h1>.
                    <p>Don't have an account yet with us? Click below to Register</p><br>
                    <button class='btn btn-primary text-light'><a href='register.php'>Register</a></button>
                </div>
            </div>
            <div class="col-6 bg login-form border rounded">
                <h1>Welcome Back!</h1><br />

                <?php
                    if (isset($theLoginErrorMessages)) {
                        
                        echo "<div class='alert alert-danger'>{$theLoginErrorMessages}</div>";
                    }
                ?>
                <h3>Login</h3>
                <form name="loginForm" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
                    <div class='form-group'>
                        <input type="text" name='userLoginEmail' placeholder="Email Address" class='form-control'>

                    </div>

                    <div id="errorOnUserLoginEmail" class="text-danger text-center">

                    </div>

                    <div class='form-group'>
                        <input type="password" name='userLoginPassword' placeholder="Password" class='form-control'>

                    </div>

                    <div id="errorOnUserLoginPassword" class="text-danger text-center">

                    </div>

                    <div class='form-group'>
                        <button type='submit' name='userLoginButton' class='form-control btn btn-primary'>Login</button>
                    </div>
                    <span>Forgot Password? Click <a href="forget-password.php">Here</a></span>

                </form>
            </div>
        </div>
    </div>

    <script src="../script//login-validation.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>