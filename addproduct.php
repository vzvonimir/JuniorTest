<?php require_once("init.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product Add</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootsrtrap\bootstrap.css" rel="stylesheet">



</head>

<body>
    
        <nav class="container mt-3 mb-2">
            <label>
                <h3>Product Add</h3>
            </label>
            <span class="float-end">
                <a id="save" type="button" class="btn btn-primary btn-sm mx-3">Save</a>
                <a id="cancel_btn" type="button" class="btn btn-secondary btn-sm">Cancel</a>
            </span>
            <hr class="mt-0">
        </nav>
       

        <main class="container">
          
            <form id="product_form">

                <div class="row mb-3">
                    <label for="inputSKU" class="col-sm-1 col-form-label">SKU</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="sku">
                      <p id="sku_warning" style="display: none;" class="bg-warning">Please insert value!!!</p>
                      <p id="sku_warning2" style="display: none;" class="bg-warning">SKU already exists, please insert new sku!</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputName" class="col-sm-1 col-form-label">Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="name">
                      <p id="name_warning" style="display: none;" class="bg-warning">Name must be filled out!!!</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPrice" class="col-sm-1 col-form-label">Price($)</label>
                    <div class="col-sm-4">
                      <input type="number" step="any" class="form-control" id="price">
                      <p id="price_warning" style="display: none;" class="bg-warning">Please insert price!!!</p>
                    </div>
                </div>

                <!-- Type Switcher -->
                <div class="row mb-3">
                    <label for="inputType" class="col-sm-2 col-form-label">Type Switcher</label>
                    <div class="col-sm-3">
                        <select id="productType" class="form-select">
                            <option value="0">Type Switcher</option>
                            <option value="1">DVD</option>
                            <option value="2">Furniture</option>
                            <option value="3">Book</option>
                        </select>
                        <p id="type_warning" style="display: none;" class="bg-warning">Choose product type!!!</p>
                    </div>
                </div>

                <!-- DVD -->
                <div id="DVD" class="row mb-3" style="display: none;">
                    <label for="inputSize" class="col-sm-1 col-form-label">Size(MB)</label>
                    <div class="col-sm-4">
                      <input type="number" step="any" class="form-control" id="size">
                      <p id="dvd_warning" style="display: none;" class="bg-warning">Please insert value!!!</p>
                    </div>
                    <p>Please provide size of the DVD in megabytes.</p>
                </div>

                <!-- Furniture -->
                <div id="Furniture" class="row mb-3" style="display: none;">
                    <label for="inputHeight" class="col-sm-1 col-form-label">Height(CM)</label>
                    <div class="col-sm-4">
                      <input type="number" step="any" class="form-control" id="height">
                      <p id="height_warning" style="display: none;" class="bg-warning">Please insert value!!!</p>
                    </div>
                    <label for="inputWidth" class="col-sm-1 col-form-label">Width(CM)</label>
                    <div class="col-sm-4">
                      <input type="number" step="any" class="form-control" id="width">
                      <p id="width_warning" style="display: none;" class="bg-warning">Please insert value!!!</p>
                    </div>
                    <label for="inputLength" class="col-sm-1 col-form-label">Length(CM)</label>
                    <div class="col-sm-4">
                      <input type="number" step="any" class="form-control" id="length">
                      <p id="length_warning" style="display: none;" class="bg-warning">Please insert value!!!</p>
                    </div>
                    <p>Please provide dimensions in HxWxL format.</p>
                </div>

                <!-- Book -->
                <div id="Book" class="row mb-3" style="display: none;">
                    <label for="inputWeight" class="col-sm-1 col-form-label">Weight(KG)</label>
                    <div class="col-sm-4">
                      <input type="number" step="any" class="form-control" id="weight">
                      <p id="book_warning" style="display: none;" class="bg-warning">Please insert value!!!</p>
                    </div>
                    <p>Please provide weight of the book.</p>
                </div>

            </form>

        </main>
      
     
        <footer class="container fixed-bottom">
            <hr>
            <p class="d-flex justify-content-center">Scandiweb Test assignment</p>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap JavaScript -->
        <script src="js/bootstrap.js"></script>

        <script src="js/scripts.js" ></script>


       

</body>

</html>