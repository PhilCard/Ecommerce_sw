<?php include '../sw_controller.php'; ?>

<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <script src="../Sw_js/jquery-3.6.3.min.js"></script>
        <title> Scandiweb Test </title>
    </head>

    <body>

        <div class="container">
            <form id="product_form" method="POST">
                <div class="top-header">
                    <h2> Product Add </h2> 
                    <div class="btn-list"> 
                        <button name="save_btn" id="save_product" value="Save"> Save </button>
                        <button name="cancel_btn" id="cancel" value="cancel"> Cancel </button>
                    </div>
                </div>

                <div class="separator"> </div>

                <div class="sku-flex">
                
                    <?php foreach($dvdLists as $key => $dvdList) { ?>
                        <p class="sku-validator-dvd" style="visibility:hidden;"><?= $dvdList->sku ?></p>
                    <?php } ?>

                    <?php foreach($bookLists as $key => $bookList) { ?>
                        <p class="sku-validator-book" style="visibility:hidden;"><?= $bookList->sku ?></p>
                    <?php } ?>

                    <?php foreach($furnitureLists as $key => $furnitureList) { ?>
                        <p class="sku-validator-furniture" style="visibility:hidden;"><?= $furnitureList->sku ?></p>
                    <?php }?>
                  
                    <p> SKU </p>
                    <input id="sku" name="sku_input" type="text" autocomplete="off">
                </div>

                <p id="sku-warning"> </p>

                <div class="name-flex">
                    <p> Name </p>
                    <input id="name" name="name_input" type="text" autocomplete="off" disabled> 
                </div>

                <div class="price-flex">
                    <p> Price ($) </p>
                    <input id="price" name="price_input" type="number" min="1" disabled> 
                </div>

                <p id="warning-message"> </p>
                <p id="Warning-Product"> </p>

                <div class="switcher-flex">
                    <p> Type Switcher </p>
                    <select id="productType" disabled>
                        <option value="Type Switcher" disabled selected> Type Switcher </option>
                        <option value="DVD" class="dvd"> DVD </option>
                        <option value="Book" class="book"> Book </option>
                        <option value="Furniture" class="furniture"> Furniture </option> 
                    </select>
                </div>

                
                <div id="dvd">
                    <div class="dvd-flex">
                        <p> Size (MB) </p> 
                        <input id="size" name="size_input" type="number" min="1"> 
                    </div>
                    <p id="alert-Size"> Please, provide SIZE</p>
                    <p id="Warning-Size"> </p>
                </div>

                <div id="book">
                    <div class="book-flex"> 
                        <p> Weight </p> 
                        <input id="weight" name="weight_input" type="text" min="1">
                    </div>
                    <p id="alert-Weight"> Please, provide WEIGHT </p>
                    <p id="Warning-Weight"> </p>
                </div>

                <div id="furniture"> 
                    <div class="furniture-flex"> 
                        <p> Height </p> 
                        <input id="height" name="height_input" type="number" min="1"> 
                    </div>
                    <div class="furnitureWidth-flex"> 
                        <p> Width </p> 
                        <input id="width"  name="width_input" type="number" min="1"> 
                    </div>
                    <div class="furnitureLenght-flex"> 
                        <p> Length </p> 
                        <input id="length"  name="length_input" type="number" min="1"> 
                    </div>
                    <p id="alert-Furniture"> Please, provide DIMENSIONS </p>
                    <p id="Warning-Furniture"> </p>
                </div>

            </form>
           
            <footer> 
                <h3> Scandiweb test assignment </h3>
            </footer>

        </div>
        <script src="../Sw_js/sw_product_add.js"> </script>
    </body>
</html>