<?php 
    include_once("../model/TodoModel.php");

    class CatatanController extends CatatanModel {
        public function view_Catatan(){
            return $this->all_Catatan();
        }

        public function add_Catatan($Catatan, $Catatan_data){
            return $this->Catatan_add($Catatan, $Catatan_data);
        }

        public function update_Catatan($id, $topic, $Catatan){
            return $this->Catatan_update($id, $topic, $Catatan);
        }

        public function delete_Catatan($id){
            return $this->Catatan_delete($id);
        }
    }

