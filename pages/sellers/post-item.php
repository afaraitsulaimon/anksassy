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

            <div class="col-8 mt-5 item-type">
                <h2 class="text-center">POST NEW ITEM</h2>

                <ul class="navbar nav">
                    <li class="btn btn-lg item-type-cloth" data-toggle="modal" data-target="#cloth-type">
                        CLOTH
                    </li>

                    <li class="btn btn-lg item-type-footwear" data-toggle="modal" data-target="#footwear-type">
                        FOOTWEAR
                    </li>
                </ul>


                 <!-- Modal for cloths ends here -->

                <div class="modal fade" id="cloth-type" tabindex="-1" role="dialog" aria-labelledby="cloth-typeModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="font-family: 'Righteous', cursive;">Post New Cloth</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Item Name:</label>
                                        <input type="text" class="form-control" id="cloth-item-name" name="clothItemName" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Item Description:</label>
                                        <textarea class="form-control" id="cloth-item-description" name="clothItemDescription" placeholder="Long Description" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <select name="clothItemForAge" id="cloth-item-for-age" class="form-control">
                                            <option value="ageNotSelected">Select Kid Or Women</option>
                                            <option value="kid">Kid</option>
                                            <option value="women">Women</option>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Select Available Sizes:</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="clothSizeCheckbox1" value="sizeSm">
                                            <label class="form-check-label" for="inlineCheckbox1">Small</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="clothSizeCheckbox2" value="sizeL">
                                            <label class="form-check-label" for="inlineCheckbox2">Large</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="clothSizeCheckbox3" value="sizeXl">
                                            <label class="form-check-label" for="inlineCheckbox3">X-Large</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="clothSizeCheckbox4" value="sizeXXl">
                                            <label class="form-check-label" for="inlineCheckbox3">XX-Large</label>
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="clothSizeCheckbox5" value="sizeXXXl">
                                            <label class="form-check-label" for="inlineCheckbox3">XXX-Large</label>
                                        </div>
                                    </div>

                                    

                                    <div class="form-group custom-file">
                                        <input type="file" class="custom-file-input" id="cloth-item-imageOne" name="imageOneForCloth">
                                        <label class="custom-file-label" for="customFileLang">Image 1</label>
                                    </div>
                                    <div class="form-group custom-file">
                                        <input type="file" class="custom-file-input" id="cloth-item-imageTwo" name="imageTwoForCloth">
                                        <label class="custom-file-label" for="customFileLang">Image 2</label>
                                    </div>

                                    <div class="form-group custom-file">
                                        <input type="file" class="custom-file-input" id="cloth-item-imageThree" name="imageThreeForCloth">
                                        <label class="custom-file-label" for="customFileLang">Image 3</label>
                                    </div>
                                    <div class="form-group custom-file">
                                        <input type="file" class="custom-file-input" id="cloth-item-imageFour" name="imageFourForCloth">
                                        <label class="custom-file-label" for="customFileLang">Image 4</label>
                                    </div>
                                    


                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Available Quantity:</label>
                                        <input type="text" class="form-control" id="cloth-item-quantity" name="clothItemQuantity">
                                    </div>


                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Price:</label>
                                        <input type="text" class="form-control" id="cloth-item-price" name="clothItemPrice">
                                    </div>

                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn-primary" name="clothPostNewItemButton">Send message</button>

                                    </div>


                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
 <!-- Modal for cloths ends here -->









                <!-- Modal for footwear starts from here -->


                <div class="modal fade" id="footwear-type" tabindex="-1" role="dialog" aria-labelledby="footwear-typeModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"  style="font-family: 'Righteous', cursive;">Post New Footwear</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="POST">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Item Name:</label>
                                        <input type="text" class="form-control" id="footwear-item-name" name="footwearItemName" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Item Description:</label>
                                        <textarea class="form-control" id="footwear-item-description" name="footwearItemDescription" placeholder="Long Description" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <select name="footwearItemAge" id="footwear-item-age" class="form-control">
                                            <option value="noAgeSelected">Select Kid Or Women</option>
                                            <option value="kid">Kid</option>
                                            <option value="women">Women</option>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Enter Size:</label>
                                        <input type="text" class="form-control" id="sizeOfFootwearItem" name="footwearItemSize" required>
                                    </div>

                                    

                                    <div class="form-group custom-file">
                                        <input type="file" class="custom-file-input" id="" name="footwearItemImageOne">
                                        <label class="custom-file-label" for="customFileLang">Image 1</label>
                                    </div>
                                    <div class="form-group custom-file">
                                        <input type="file" class="custom-file-input" id="" name="footwearItemImageTwo">
                                        <label class="custom-file-label" for="customFileLang">Image 2</label>
                                    </div>

                                    <div class="form-group custom-file">
                                        <input type="file" class="custom-file-input" id="" name="footwearItemImageThree">
                                        <label class="custom-file-label" for="customFileLang">Image 3</label>
                                    </div>
                                    <div class="form-group custom-file">
                                        <input type="file" class="custom-file-input" id="" name="footwearItemImageFour">
                                        <label class="custom-file-label" for="customFileLang">Image 4</label>
                                    </div>
                                    


                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Available Quantity:</label>
                                        <input type="text" class="form-control" id="footwear-item-price" name="footwearItemQuantity">
                                    </div>


                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Price:</label>
                                        <input type="text" class="form-control" id="item-price" name="footwearItemPrice">
                                    </div>

                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn-primary" name="footwearPostNewItemButton">Send message</button>

                                    </div>


                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                                <!-- Modal for footwear ends here -->

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