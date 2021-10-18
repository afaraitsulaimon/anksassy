

<!Doctype html lang="en">

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
    <link rel="stylesheet" href="../../styles/out-style.css">
    <title>AnkSassy - Online Ankara Fashion Store For Female</title>
</head>

<body>

    <?php
    require_once("components/seller-header.php");
    ?>

    <div class="container bg-primary rounded">
        <div class="row">

            <!-- left sidebar started from here -->
            <?php
            require_once("components/left-sidebar.php");
            ?>

            <!-- left sidebar ends here -->

            <div class="col-8 mt-5">
                <a class="nav-link text-light" href="dashboard.php" style="font-family: 'Righteous', cursive;">Hi, <?php echo $sellerName; ?>!</a>
                <div class="card-group mt-3">
                    <div class="card">
                    <button type="button" class="btn btn-light">
                                Notifications <span class="badge badge-primary">4</span>
                        <div class="card-body">
                            <h5 class="card-title text-primary">List of Items</h5>
                            <p class="card-text">This shows all the list of items you have uploaded, that is up for sales and negotiable.</p>
                        </div>
                        </button>
                    </div>



                    <div class="card">
                    <button type="button" class="btn btn-light">
                                Notifications <span class="badge badge-primary">4</span>
                        <div class="card-body">
       
                            <h5 class="card-title text-primary">New Negotiation</h5>
                            <p class="card-text">For all the new negotiations from customers that are willing to order goods from you.</p>
                        </div>
                        </button>
                    </div>



                    <div class="card">
                    <button type="button" class="btn btn-light">
                                Notifications <span class="badge badge-primary">4</span>
                            
                        <div class="card-body">
                       
           
                            <h5 class="card-title text-primary">Accepted Negotiation</h5>
                            <p class="card-text">This are the numbers of present accepted negotiations.</p>
                        </div>
                        </button>
                    </div>


                </div>


                <div class="card-group mt-4 mb-4">
                    <div class="card">
                    <button type="button" class="btn btn-light">
                                Notifications <span class="badge badge-primary">4</span>
                        <div class="card-body">
                            
                          
                            <h5 class="card-title text-primary">Completed Transaction</h5>
                            <p class="card-text">All your completed transactions, that has being shipped and delivered.</p>
                        </div>
                        </button>
                    </div>


                    <div class="card">
                    <button type="button" class="btn btn-light">
                                Notifications <span class="badge badge-primary">4</span>
                        <div class="card-body">
                        
                            
           
                            <h5 class="card-title text-primary">Negotiations</h5>
                            <p class="card-text">On going negotiations between seller and the buyer, which final price is yet to be accepted.</p>
                        </div>
                        </button>
                    </div>

                    <div class="card">
                    <button type="button" class="btn btn-light">
                                Notifications <span class="badge badge-primary">4</span>
                        <div class="card-body">
                            <h5 class="card-title text-primary">Transaction</h5>
                            <p class="card-text">Transactions which buyers have paid for, update orders here (Processing, Shipped or Delivered).</p>
                        </div>
                        </button>
                    </div>


                </div>

            </div>
        </div>

    </div>

    <footer>
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <h5 class="text-center">Copyright 2021 Anksassy</h5>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>