<?php 
    include_once '../../models/Mahasiswa.php';
    class MahasiswaController{
        private $model;
        public function __construct($db){
            $this->model=new Mahasiswa($db);
        }
        public function getAllMahasiswa(){
            return $this->model->getAllMahasiswa();
        }
        public function createMahasiswa($nim, $nama, $jenis_kelamin, $alamat){
            return $this->model->createMahasiswa($nim, $nama, $jenis_kelamin, $alamat);
        }
        function getMahasiswaByNIM($id) {
            return $this->model->getMahasiswaByNIM($id);
        }
        function updateMahasiswa($id,$nim, $nama, $jenis_kelamin,  $alamat){
            return $this->model->updateMahasiswa($id,$nim, $nama, $jenis_kelamin,  $alamat);
        }
        public function deleteMahasiswa($nim){
            return $this->model->deleteMahasiswa($nim);
        }
    }


?>