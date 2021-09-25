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
    <title>AnkSassy - Online Ankara Fashion Store For Female</title>
</head>

<body>

    <header>
        <?php
        require_once("../components/inner-header.php");
        ?>
    </header>


    <!-- search container starts from here -->
    <section>
        <div class="container mt-4">
            
            <form class="row g-3">
                <div class="col-lg-3 col-sm-auto">

                <select name="" id="" class="form-control">
                        <option>Select By Category</option>
                        <option>Women</option>
                        <option>Children</option>
                    </select>
                </div>
                <div class="col-lg-3 col-sm-auto">

                    <select name="" id="" class="form-control">
                        <option>Select Type</option>
                        <option>Dress</option>
                        <option>Top</option>
                        <option>Skirts</option>
                        <option>Jackets</option>
                    </select>

                </div>
                <div class="col-lg-3 col-sm-auto">
                    <select name="" id="" class="form-control">
                        <option>Search By Size</option>
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Large</option>
                        <option>XLarge</option>
                    </select>
                </div>


                <div class="col-lg-2 col-sm-auto">
                    <select name="" id="" class="form-control">
                        <option>Select Price Range</option>
                        <option>Less than 1k</option>
                        <option>Less than 3k</option>
                        <option>Less than 5k</option>
                        <option>Less than 15k</option>
                    </select>
                </div>

                <div class="col-lg-1 col-sm-auto">
                    <button type="submit" class="btn btn-primary mb-3">Seach</button>
                </div>
            </form>
          
        </div>
    </section>



    <!-- search container ends here -->

    <!-- Container starts from here-->
    <div class="container-fluid" style="background-color: cornflowerblue;">
        <h3 class="text-center pt-4 pb-4" style="font-family: 'Lobster', cursive; ">Shop</h3>


        <!-- First Div starts from here-->
        <div>
            <div class="row justify-content-around mb-4" >
                <div class="col-lg-2 col-sm-12">
                    <div class="card d-block mx-auto mt-2" style="width: 14rem;">
                        <img class="card-img-top" src="../images/productImag1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h5 class="card-title">&#8358 1500</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 col-sm-12">
                    <div class="card d-block mx-auto mt-2" style="width: 14rem;">
                        <img class="card-img-top" src="../images/productImag2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Lase Children Lace</h5>
                            <h5 class="card-title">&#8358 2500</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 col-sm-12">
                    <div class="card d-block mx-auto mt-2" style="width: 14rem;">
                        <img class="card-img-top" src="../images/productImag2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Lase Dress </h5>
                            <h5 class="card-title">&#8358 10,300</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-12">
                    <div class="card d-block mx-auto mt-2" style="width: 14rem;">
                        <img class="card-img-top" src="../images/productImag1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h5 class="card-title">&#8358 1500</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- First Div ends from here-->





        <!-- Second Div starts from here-->
        <div class="d-none d-lg-block">
            <div class="row justify-content-around mb-4">

                <div class="col-lg-2 col-sm-12">
                    <div class="card d-block mx-auto mx-md-0" style="width: 14rem;">
                        <img class="card-img-top" src="../images/productImag2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h5 class="card-title">&#8358 1500</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 col-sm-12">
                    <div class="card d-block mx-auto mx-md-0" style="width: 14rem;">
                        <img class="card-img-top" src="../images/productImag2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h5 class="card-title">&#8358 2500</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 col-sm-12">
                    <div class="card d-block mx-auto mx-md-0" style="width: 14rem;">
                        <img class="card-img-top" src="../images/productImag2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Lase Dress </h5>
                            <h5 class="card-title">&#8358 10,300</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-12">
                    <div class="card d-block mx-auto mx-md-0" style="width: 14rem;">
                        <img class="card-img-top" src="../images/productImag1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h5 class="card-title">&#8358 1500</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Second Div ends from here-->





        <!-- Third Div starts from here-->

        <div class="d-none d-lg-block">
            <div class="row justify-content-around">

                <div class="col-lg-2 col-sm-12 mb-3">
                    <div class="card d-block mx-auto mx-md-0" style="width: 14rem;">
                        <img class="card-img-top" src="../images/productImag1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h5 class="card-title">&#8358 1500</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 col-sm-12 mb-3">
                    <div class="card d-block mx-auto mx-md-0" style="width: 14rem;">
                        <img class="card-img-top" src="../images/productImag2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h5 class="card-title">&#8358 2500</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-2 col-sm-12 mb-3">
                    <div class="card d-block mx-auto mx-md-0" style="width: 14rem;">
                        <img class="card-img-top" src="../images/productImag2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Lase Dress </h5>
                            <h5 class="card-title">&#8358 10,300</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-12 mb-3">
                    <div class="card d-block mx-auto mx-md-0" style="width: 14rem;">
                        <img class="card-img-top" src="../images/productImag2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h5 class="card-title">&#8358 1500</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Third Div ends from here-->

    </div>
    <!-- Container ends here-->

    <footer class="page-footer font-small blue pt-4 bg-dark text-light mt-3">
        <?php
        require_once("../components/inner-footer.php");
        ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>

</html>