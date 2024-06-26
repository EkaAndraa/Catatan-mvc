<?php 

    include("../config/database.php");
    class CatatanModel extends db {
        public function catatan_add($Catatan, $Catatan_data){
            $date = date('y-m-d H-m-sa');
            $is_done = 0;

            $sql = "INSERT INTO Catatan_tbl(topic, Catatan, is_done, add_date)VALUE(?, ?, ?, ?)";
            $sql_exc = $this->connect()->prepare($sql);
            return $sql_exc->execute([$Catatan, $Catatan_data, $is_done, $date]);
        }
        
        public function all_Catatan(){
            $sql = "SELECT * FROM Catatan_tbl";
            $sql_exc = $this->connect()->prepare($sql);
            $sql_exc->execute();
            $result = $sql_exc->fetchAll();

            return $result;
        }
        
        public function Catatan_update($id, $topic, $Catatan){
            $sql = "UPDATE Catatan_tbl SET topic = ?, Catatan = ? WHERE id = ?";
            $sql_exc = $this->connect()->prepare($sql);
            $result = $sql_exc->execute([$topic, $Catatan, $id]);

            return $result;
            
        }

        public function Catatan_delete($id){
            $sql = "DELETE FROM Catatan_tbl WHERE id = ?";
            $sql_exc = $this->connect()->prepare($sql);
            $result = $sql_exc->execute([$id]);

            return $result;
        }
    }
    }
