<?php 

    namespace Vendor\ProductHome;
   
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

    Class RedirectPage {
            
        function Redirect($url, $permanent = false) 
        {
            if (headers_sent() === false) {
                header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
            }
            
            exit(); 
        }       
    }


    class SwList {
        private $dvdList;
        private $bookList;
        private $furnitureList;

        public function __get($attr)
        {
            return $this->$attr;
        }

        public function __set($attr, $value)
        {
            $this->$attr = $value; 
        }

    }


    class SwDVD extends SwList {

        public function __construct(ConnectDB $conexao, SwList $dvdList ) 
        {
            $this->conexao = $conexao->conexao();
            $this->dvdList = $dvdList;
        }

        public function productListDvd()
        {
            $query = 'select id_dvd, sku, name, price, size from dvd';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function deleteDVD() 
        {
            $query = 'delete from dvd where id_dvd = :id_dvd';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id_dvd', $this->dvdList->__get('id_dvd'));
            $stmt->execute();
        }
    }


    class SwBook extends SwList {

        public function __construct(ConnectDB $conexao, SwList $bookList ) 
        {
            $this->conexao = $conexao->conexao();
            $this->bookList = $bookList;
        }

        public function productListBook()
        {
            $query = 'select id_book, sku, name, price, weight from book';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function deleteBook() 
        {
            $query = 'delete from book where id_book = :id_book';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id_book', $this->bookList->__get('id_book'));
            $stmt->execute();
        }
    }
    

    class SwFurniture extends SwList {

        public function __construct(ConnectDB $conexao, SwList $furnitureList) 
        {
            $this->conexao = $conexao->conexao();
            $this->furnitureList = $furnitureList;
        }

        public function productListFurniture()
        {
            $query = 'select id_furniture, sku, name, price, height, width, length from furniture';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function deleteFurniture() 
        {
            $query = 'delete from furniture where id_furniture = :id_furniture';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id_furniture', $this->furnitureList->__get('id_furniture'));
            $stmt->execute();
        }
    }

?>