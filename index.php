<?php require_once("init.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product List</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootsrtrap\bootstrap.css" rel="stylesheet">



</head>

<body>

<?php
$dvds = DVD::findAll();
$books = Book::findAll();
$furnitures = Furniture::findAll();
?>
    
        <nav class="container mt-3 mb-2">
            <label>
                <h3>Product List</h3>
            </label>
            <span class="float-end">
                <a href="addproduct.php" type="button" class="btn btn-primary btn-sm mx-3">ADD</a>
                <a id="delete-product-btn" type="button" class="btn btn-danger btn-sm">MASS DELETE</a>
            </span>
            <hr class="mt-0">
        </nav>
       

        <main class="container d-flex justify-content-center">
            <div class="row">

                <?php foreach($dvds as $dvd): ?>
                <div class="col-md-3 p-3">
                    <div class="card border-dark m-auto" style="width: 15rem; height: 11rem;">
                        <div class="card-body p-2">
                            <div class="form-check">
                                <input class="form-check-input delete-checkbox" type="checkbox" value="dvd,<?php echo $dvd->getId() ?>">
                            </div>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo $dvd->getSKU(); ?></p>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo $dvd->getName(); ?></p>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo $dvd->getPrice() . " $"; ?></p>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo "Size: " . $dvd->getSize() . " MB" ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <?php foreach($books as $book): ?>
               <div class="col-md-3 p-3">
                    <div class="card border-dark m-auto" style="width: 15rem; height: 11rem;">
                        <div class="card-body p-2">
                            <div class="form-check">
                                <input class="form-check-input delete-checkbox" type="checkbox" value="book,<?php echo $book->getId() ?>">
                              </div>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo $book->getSKU(); ?></p>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo $book->getName(); ?></p>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo $book->getPrice() . " $"; ?></p>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo "Weight: " . $book->getWeight() . "KG" ?></p>
                        </div>
                      </div>
                </div>
                <?php endforeach; ?>

                <?php foreach($furnitures as $furniture): ?>
               <div class="col-md-3 p-3">
                    <div class="card border-dark m-auto" style="width: 15rem; height: 11rem;">
                        <div class="card-body p-2">
                            <div class="form-check">
                                <input class="form-check-input delete-checkbox" type="checkbox" value="furniture,<?php echo $furniture->getId() ?>">
                              </div>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo $furniture->getSKU(); ?></p>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo $furniture->getName(); ?></p>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo $furniture->getPrice() . " $"; ?></p>
                                <p class="card-text d-flex justify-content-center mb-1"><?php echo "Dimension: " . $furniture->getDimensions() ?></p>
                        </div>
                      </div>
                </div>
                <?php endforeach; ?>


            </div>

        </main>
      
     
        <footer class="container">
            <hr>
            <p class="d-flex justify-content-center">Scandiweb Test assignment</p>
        </footer>
       


        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap JavaScript -->
        <script src="js/bootstrap.js"></script>

        <script src="js/scripts.js" ></script>

        <script src="js/mass_delete.js" ></script>

</body>

</html>