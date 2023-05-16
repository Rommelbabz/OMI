<?php
    class crud{
        //private database object
        private $db;

        //constructor to initialize private variable to the database connection
        function _construct($conn){
            $this->db = $conn;
        }

        public function insert ($firstname, $lastname, $specialty, $address, $datepicker, $number){
            try{
                $sql = "INSERT INTO attendee VALUES (:firstname, :lastname, :specialty, :address, :datepicker, :number)";
                $stmt = $this->db->prepare($sql);

                $stmt->bindparam(':firstname',$firstname);
                $stmt->bindparam(':lastname',$lastname);
                $stmt->bindparam(':specialty',$specialty);
                $stmt->bindparam(':address',$address);
                $stmt->bindparam(':datepicker',$datepicker);
                $stmt->bindparam(':number',$number);

                $stmt->execute();
                return true;

            }catch(PDOExemption $e) {
                echo $e->getmassage;
                return false;
            }
        }
    }
?>