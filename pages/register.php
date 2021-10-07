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
        <div class="row">



            <div class="col-6 register-form rounded" style="height:auto;">
                <h1>Good To Have you Here!</h1>
                <h3>Register</h3>
                <form class="form" name="registrationForm">
                    <div class='form-group'>
                        <input type="text" name='userfirstname' placeholder="Firstname" class='form-control' id="firstName">
                        <div id="errorOnFirstName" class="text-danger text-center">

                        </div>
                    </div>

                    <div class='form-group'>
                        <input type="text" name='userlastname' placeholder="Lastname" class='form-control' id="lastName">
                        <div id="errorOnLastName" class="text-danger text-center">

                        </div>
                    </div>

                    <div class='form-group'>
                        <input type="phone" name='userphone' placeholder="Phone" class='form-control' id="phoneNumber">
                        <div id="errorOnPhone" class="text-danger text-center text-center">

                        </div>
                    </div>

                    <div class='form-group'>
                        <input type="email" name='useremail' placeholder="Email" class='form-control' id="emailAdd">
                        <div id="errorOnEmail" class="text-danger text-center text-center">

                        </div>
                    </div>

                    <div class='form-group'>
                        <input type="password" name='userpass' placeholder="Password" class='form-control' id="passWord" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Must contain at least 1 number and 1 uppercase and lowercase letter">
                        <div id="errorOnPassword" class="text-danger text-center text-center">

                        </div>

                    </div>

                    <div class='form-group'>
                        <input type="password" name='passconfirm' placeholder="Confirm Password" class='form-control' id="passWordCon">
                        <div id="errorOnConPass" class="text-danger text-center text-center">

                        </div>
                    </div>

                    <div class='form-group'>
                        <select name="usertype" class='form-control' id="usersType">
                            <option value="noneuser">Select User Type</option>
                            <option value="buyers">Buyer</option>
                            <option value="sellers">Seller</option>
                        </select>

                        <div id="errorOnUserType" class="text-danger text-center text-center">

                        </div>
                    </div>

                    <div class='form-group'>
                        <button class='form-control btn btn-light'>Register</button>
                    </div>


                </form>
            </div>

            <div class="col-6 right-register-message">
                <div class="theFadeBackGroundColor">
                    <h1 class="text-center">Register & Enjoy lot of goodies</h1>.
                    <p>Already have an account with Us? Click below to login</p><br>
                    <button class='btn btn-primary text-light'><a href='login.php'>Login</a></button>
                </div>
            </div>

        </div>
    </div>


    <script src="../script/register-validation.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>
