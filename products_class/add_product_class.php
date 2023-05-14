<?php

    namespace Vendor\ProductAdd;

    use PDO;

    class ConnectDB {

        private $host = 'localhost';
        private $dbname = 'sw';
        private $user = 'root';
        private $pass = '';

        public function conexao()
        {
            try{

                $conexao = new \PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                );

                return $conexao;

            } catch (PODException $e) {
                echo '<p>' .$e->GetMessage(). '</p>';

            }

        }
    }


    class SwAdd{

        private $conexao;    
        private $dvdAdd;
        private $bookAdd;
        private $furnitureAdd;
        
        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $valor)
        {
            $this->$atributo = $valor; 
        }
    }


    class SwDVD extends SwAdd { 

        public function __construct(ConnectDB $conexao, SwAdd $dvdAdd) 
        {
            $this->conexao = $conexao->conexao();
            $this->dvdAdd = $dvdAdd;
        }

        public function insertDvd()
        {
            $query = 'insert into dvd(sku,name,price,size)values(:sku,:name,:price,:size)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':sku', $this->dvdAdd->__get('sku'));
            $stmt->bindValue(':name', $this->dvdAdd->__get('name'));
            $stmt->bindValue(':price', $this->dvdAdd->__get('price'));
            $stmt->bindValue(':size', $this->dvdAdd->__get('size'));
            $stmt->execute();
        }
    }

    
    class SwBook extends SwAdd {

        public function __construct(ConnectDB $conexao, SwAdd $bookAdd) 
        {
            $this->conexao = $conexao->conexao();
            $this->bookAdd = $bookAdd;
        }

        public function insertBook() 
        {
            $query = 'insert into book(sku,name,price,weight)values(:sku,:name,:price,:weight)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':sku', $this->bookAdd->__get('sku'));
            $stmt->bindValue(':name', $this->bookAdd->__get('name'));
            $stmt->bindValue(':price', $this->bookAdd->__get('price'));
            $stmt->bindValue(':weight', $this->bookAdd->__get('weight'));
            $stmt->execute();
        }
    }


    class SwFurniture extends SwAdd {

        public function __construct(ConnectDB $conexao, SwAdd $furnitureAdd) 
        {
            $this->conexao = $conexao->conexao();
            $this->furnitureAdd = $furnitureAdd;
        }

        public function insertFurniture() 
        {
            $query = 'insert into furniture(sku,name,price,height,width,length)values(:sku,:name,:price,:height,:width,:length)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':sku', $this->furnitureAdd->__get('sku'));
            $stmt->bindValue(':name', $this->furnitureAdd->__get('name'));
            $stmt->bindValue(':price', $this->furnitureAdd->__get('price'));
            $stmt->bindValue(':height', $this->furnitureAdd->__get('height'));
            $stmt->bindValue(':width', $this->furnitureAdd->__get('width'));
            $stmt->bindValue(':length', $this->furnitureAdd->__get('length'));
            $stmt->execute();
        }
    }

?> 