<?php

    ob_start();

    include 'products_class/product_list_class.php';
    include 'products_class/add_product_class.php';

    /* <---------- REDIRECT TO ANOTHER PAGE ----------> */

    if(isset($_POST['add'])) {
        $btn_add = new Vendor\ProductHome\RedirectPage();
        $btn_add->Redirect('add-product/', false);
    }

    /* <---------- REDIRECT TO ANOTHER PAGE ----------> */


    /* <---------- PRODUCT LIST START ----------> */

    // <---------- DVD LIST START----------> //

    $dvdList = new Vendor\ProductHome\SwList();
    $conexao = new Vendor\ProductHome\ConnectDB();

    $dvdList = new Vendor\ProductHome\SwDVD($conexao, $dvdList);
    $dvdLists = $dvdList->productListDvd();

     // <---------- DVD LIST END ----------> //


     // <---------- BOOK LIST START ----------> //

    $bookList = new Vendor\ProductHome\SwList();
    $conexao = new Vendor\ProductHome\ConnectDB();

    $bookList = new Vendor\ProductHome\SwBook($conexao, $bookList);
    $bookLists = $bookList->productListBook();

    // <---------- BOOK LIST END ----------> //


    // <---------- FURNITURE LIST START ----------> //

    $furnitureList = new Vendor\ProductHome\SwList();
    $conexao = new Vendor\ProductHome\ConnectDB();

    $furnitureList = new Vendor\ProductHome\SwFurniture($conexao, $furnitureList);
    $furnitureLists = $furnitureList->productListFurniture();

    // <---------- FURNITURE LIST END----------> //
    
    /* <---------- PRODUCT LIST END ----------> */


    /* <---------- DELETE PRODUCTS START ----------> */

    // <---------- DELETE DVD START ----------> //

    if(isset($_GET['action']) && $_GET['action'] == "delete1"){

        $dvdList = new Vendor\ProductHome\SwList();
        $dvdList->__set('id_dvd', $_GET['id']);

        $conexao = new Vendor\ProductHome\ConnectDB();

        $deleteDVD = new Vendor\ProductHome\SwDVD($conexao, $dvdList);
        $deleteDVD->deleteDVD();

        $redirect = new Vendor\ProductHome\RedirectPage();
        $redirect->Redirect('index.php', false);
        
    }

    // <---------- DELETE DVD END ----------> //


    // <---------- DELETE BOOK START ----------> //

    if(isset($_GET['action']) && $_GET['action'] == "delete2"){

        $bookList = new Vendor\ProductHome\SwList();
        $bookList->__set('id_book', $_GET['id']);

        $conexao = new Vendor\ProductHome\ConnectDB();

        $deleteBook = new Vendor\ProductHome\SwBook($conexao, $bookList);
        $deleteBook->deleteBook();

        $redirect = new Vendor\ProductHome\RedirectPage();
        $redirect->Redirect('index.php', false);
        
    }

    // <---------- DELETE BOOK END ----------> //


    // <---------- DELETE FURNITURE START ----------> //

    if(isset($_GET['action']) && $_GET['action'] == "delete3"){

        $furnitureList = new Vendor\ProductHome\SwList();
        $furnitureList->__set('id_furniture', $_GET['id']);

        $conexao = new Vendor\ProductHome\ConnectDB();

        $deleteFurniture = new Vendor\ProductHome\SwFurniture($conexao, $furnitureList);
        $deleteFurniture->deleteFurniture();

        $redirect = new Vendor\ProductHome\RedirectPage();
        $redirect->Redirect('index.php', false);
        
    }

    // <---------- DELETE FURNITURE END ----------> //

    /* <---------- DELETE PRODUCTS ENDING ----------> */
    


    /* <---------- PRODUCT ADD START ----------> */

     /* <---------- CANCEL BTN ----------> */
     if(isset($_POST['cancel_btn'])) {
        $btn_cancel = new Vendor\ProductHome\RedirectPage();
        $btn_cancel->Redirect('../', false);
    }
    /* <---------- CANCEL BTN ----------> */
    
    
    // <---------- INSERT SwDVD START ----------> //

    if(isset($_POST['save_btn'])) {

        if(!empty($_POST['sku_input']) && !empty($_POST['name_input']) && !empty($_POST['price_input']) && !empty($_POST['size_input'])) {
        
            $dvdAdd = new Vendor\ProductAdd\SwAdd();
            $dvdAdd->__set('sku', $_POST['sku_input']); 
            $dvdAdd->__set('name', $_POST['name_input']);
            $dvdAdd->__set('price', $_POST['price_input']); 
            $dvdAdd->__set('size', $_POST['size_input']); 
            
            $conexao = new Vendor\ProductAdd\ConnectDB();

            $insertDVD = new Vendor\ProductAdd\SwDVD($conexao, $dvdAdd);
            $insertDVD->insertDvd();

            $redirect = new Vendor\ProductHome\RedirectPage();
            $redirect->Redirect('../', false);
        }
    }

    // <---------- INSERT SwDVD END ----------> //


    // <---------- INSERT SwBook START ----------> //

    if(isset($_POST['save_btn'])) {

        if(!empty($_POST['sku_input']) && !empty($_POST['name_input']) && !empty($_POST['price_input']) && !empty($_POST['weight_input'])) {
    
            $bookAdd = new Vendor\ProductAdd\SwAdd();
            $bookAdd->__set('sku', $_POST['sku_input']); 
            $bookAdd->__set('name', $_POST['name_input']);
            $bookAdd->__set('price', $_POST['price_input']); 
            $bookAdd->__set('weight', $_POST['weight_input']); 
           
            $conexao = new Vendor\ProductAdd\ConnectDB();

            $insertBook = new Vendor\ProductAdd\SwBook($conexao, $bookAdd);
            $insertBook->insertBook();

            $redirect = new Vendor\ProductHome\RedirectPage();
            $redirect->Redirect('../', false);

        }
    }

    // <---------- INSERT SwBook END ----------> //


    // <---------- INSERT SwFurniture START ----------> //

    if(isset($_POST['save_btn'])) {

        if(!empty($_POST['sku_input']) && !empty($_POST['name_input']) && !empty($_POST['price_input']) && !empty($_POST['height_input']) && !empty($_POST['width_input']) && !empty($_POST['length_input'])) {
    
            $furnitureAdd = new Vendor\ProductAdd\SwAdd();
            $furnitureAdd->__set('sku', $_POST['sku_input']); 
            $furnitureAdd->__set('name', $_POST['name_input']);
            $furnitureAdd->__set('price', $_POST['price_input']); 
            $furnitureAdd->__set('height', $_POST['height_input']); 
            $furnitureAdd->__set('width', $_POST['width_input']); 
            $furnitureAdd->__set('length', $_POST['length_input']); 
           
            $conexao = new Vendor\ProductAdd\ConnectDB();

            $insertFurniture = new Vendor\ProductAdd\SwFurniture($conexao, $furnitureAdd);
            $insertFurniture->insertFurniture();

            $redirect = new Vendor\ProductHome\RedirectPage();
            $redirect->Redirect('../', false);

        }
    }

    // <---------- INSERT SwFurniture END ----------> //

    /* <---------- PRODUCT ADD END ----------> */

    ob_end_flush(); 

?>