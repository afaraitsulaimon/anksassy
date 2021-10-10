<?php
    require_once("../database/db.php");

    require_once("../authentications/confirm-registration-auth.php");

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
    <title></title>
</head>

<body>
    

    <header>
        <?php
        require_once("../components/inner-header.php");
        ?>
    </header>

    <?php
        if (isset($_GET['tokenStatus']) && $_GET['tokenStatus'] === 'unConfirmedToken') {
            
            echo "<div class='alert alert-danger h4' style='display:flex;height:70vh; align-items:center; justify-content:center;'>Token has expired, kindly click &nbsp <a href ='register.php'>  Register </a> &nbsp to register again</div>";
       
        }elseif (isset($_GET['tokenStatus']) && $_GET['tokenStatus'] === 'confirmedToken') {
            
            echo "<div class='alert alert-success h4' style='display:flex;height:70vh; align-items:center; justify-content:center;'>Account Successfuly activated . Click &nbsp <a href=''>Here </a> &nbsp to Login</div>";

        }elseif (isset($_GET['noToken']) && $_GET['noToken'] === 'unAvailableToken') {
            
            echo "<div class='alert alert-danger h4' style='display:flex;height:70vh; align-items:center; justify-content:center;'>Token Incorrect ,You need to register, Click &nbsp <a href='register.php'>Here </a> </div>";

        }

    ?>


    <footer class="page-footer font-small blue pt-4 bg-dark text-light">
        <?php
        require_once("../components/inner-footer.php");
        ?>
    </footer>

    <script src="../script/register-validation.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>