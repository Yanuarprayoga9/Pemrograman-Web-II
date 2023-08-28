<?php 
    include_once '../../models/Dosen.php';
    class DosenController{
        private $model;
        public function __construct($db){
            $this->model=new Dosen($db);
        }
        public function getAllDosen(){
            return $this->model->getAllDosen();
        }
        public function createDosen($nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat){
            return $this->model->createDosen($nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
        }
        function getDosenById($id) {
            return $this->model->getDosenById($id);
        }
        function updateDosen($id, $nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat){
            return $this->model->updateDosen($id, $nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
        }
        public function deleteDosen($id){
            return $this->model->deleteDosen($id);
        }
    }


?>