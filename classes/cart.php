<?php
   require_once "database.php";

   class Cart extends Database{
       public function displayCart(){
           $sql = "SELECT * FROM cart";

           if($result = $this->conn->query($sql)){
            $rows = array();
            while($row = $result->fetch_assoc()){
               $rows[] = $row;
            }

            return $rows;
        } else {
            die("Error retrieving all cart: " . $this->conn->error);
        }
       }
   }
?>