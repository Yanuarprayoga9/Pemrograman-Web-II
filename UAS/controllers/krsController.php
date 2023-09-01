<?php 
    include_once '../../models/KRS.php';
    class KrsController {
        private $model;
    
        public function __construct($db) {
            $this->model = new Krs($db);
        }
    
        public function getAllKrs() {
            return $this->model->getAllKrs();
        }
    
        public function createKrs($nim, $mata_kuliah, $pengampu, $jadwal_mata_kuliah) {
            return $this->model->createKrs($nim, $mata_kuliah, $pengampu, $jadwal_mata_kuliah);
        }
    
        public function getKrsById($id) {
            return $this->model->getKrsById($id);
        }
    
        public function updateKrs($id,$nim, $mata_kuliah, $pengampu, $jadwal_mata_kuliah) {
            return $this->model->updateKrs($id,$nim, $mata_kuliah, $pengampu, $jadwal_mata_kuliah);
        }
        
    
        public function deleteKrs($id) {
            return $this->model->deleteKrs($id);
        }
    }


?>