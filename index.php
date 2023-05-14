<?php include 'sw_controller.php'; ?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="Sw_js/jquery-3.6.3.min.js"></script>
        <title> Scandiweb Test </title>
    </head>

    <body>

        <div class="container"> 
            <form id="add-product" method="POST">
                <div class="top-header">
                    <h2> Product List </h2>
                    <div class="btn-list"> 
                        <button name="add" id="add-product-btn"> ADD </button>
                        <button id="delete-product-btn" name="Dell" > MASS DELETE </button>
                    </div>
                </div>

                <!----------- DVD PRODUCT DESCRIPTION ---------->
                <?php foreach($dvdLists as $key => $dvdList) { ?>
                    <div class="product-dvd" id="<?= $dvdList->id_dvd ?>">
                        <input class="delete-checkbox" type="checkbox" name="checkDvd">
                        <p> <?= $dvdList->sku ?> </p>
                        <p> <?= $dvdList->name ?> DVD </p>
                        <p> <?= $dvdList->price?> $ </p>
                        <p> Size: <?= $dvdList->size ?> MB </p>
                    </div> 
                <?php } ?>
                <!----------- DVD PRODUCT DESCRIPTION ENDING ---------->

                
                <!----------- BOOK PRODUCT DESCRIPTION ---------->
                <?php foreach($bookLists as $key => $bookList) { ?>
                    <div class="product-book" id="<?= $bookList->id_book ?>">
                        <input class="delete-checkbox" type="checkbox">
                        <p> <?= $bookList->sku ?>  </p>
                        <p> <?= $bookList->name ?> </p>
                        <p> <?= $bookList->price?> $ </p>
                        <p> Weight: <?= $bookList->weight ?>KG</p>
                    </div> 
                <?php } ?>
                <!----------- BOOK PRODUCT DESCRIPTION ENDING ---------->


                <!----------- FURNITURE PRODUCT DESCRIPTION---------->
                <?php foreach($furnitureLists as $key => $furnitureList) { ?>
                    <div class="product-furniture" id="<?= $furnitureList->id_furniture ?>">
                        <input class="delete-checkbox" type="checkbox" type="checkbox">
                        <p> <?= $furnitureList->sku ?>  </p>
                        <p> <?= $furnitureList->name ?> </p>
                        <p> <?= $furnitureList->price?> $ </p>
                        <p> <?= $furnitureList->height ?>x<?= $furnitureList->width ?>x<?= $furnitureList->length ?> </p>
                    </div> 
                <?php } ?>
                 <!----------- FURNITURE PRODUCT DESCRIPTION ENDING ---------->
            </form>

            <footer> 
                <h3> Scandiweb test assignment </h3>
            </footer>
            
        </div>
        <script src="Sw_js/sw_product_dell.js"> </script>
    </body>
</html>