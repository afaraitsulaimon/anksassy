<?php
    session_start();
  
    
    require_once("../../database/db.php");
    require_once("handler/seller-log-verification.php");
    $loggedInSeller = sellerLoggedIn();

    $getThisLoggedInSeller = "SELECT * FROM `users_registration` WHERE users_id = $loggedInSeller";

  

    $queryGetThisLoggedInSeller = mysqli_query($connection,$getThisLoggedInSeller);

    if (!$queryGetThisLoggedInSeller) {
        
        die("could not query queryGetThisLoggedInSeller" .mysqli_error($connection));
    }

    $fetchGetThisLoggedInSeller = mysqli_fetch_assoc($queryGetThisLoggedInSeller);

    $sellerName = $fetchGetThisLoggedInSeller['firstName'];
?>
<link href="https://emoji-css.afeld.me/emoji.css" rel="stylesheet">
<header>

        <nav class="navbar navbar-expand-lg">

            <!--  Show this only on mobile to medium screens  -->
            <a class="navbar-brand d-lg-none" href="../index.php">AnkSassy</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!--  Use flexbox utility classes to change how the child elements are justified  -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Good Afternoon, <?php echo $sellerName; ?>!</a>
                    </li>


                </ul>


                <!--   Show this only lg screens and up   -->
                <a class="navbar-brand d-none d-lg-block text-dark" href="../index.php">AnkSassy <span style="font-size: 1em; color:pink">.</span></a>



                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="input-group">

                            <a href="../../authentications/sellers/logout.php"><button class="btn btn-danger">Logout</button></a>
                        </div>
                    </li>


                </ul>
            </div>
        </nav>




    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                
                        <h2 class="text-center" style="font-family: 'Righteous', cursive; color:cornflowerblue">We are Happy to have you back <i class="em em-smiley" aria-role="presentation" aria-label="SMILING FACE WITH OPEN MOUTH"></i> </h2>


                </ul>

            </div>

        </div>
    </div>