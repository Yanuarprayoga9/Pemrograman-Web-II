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
        public function createMahasiswa($npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat){
            return $this->model->createMahasiswa($npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
        }
        function getMahasiswaById($id) {
            return $this->model->getMahasiswaById($id);
        }
        function updateMahasiswa($id, $npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat){
            return $this->model->updateMahasiswa($id, $npm, $program_study, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
        }
        public function deleteMahasiswa($id){
            return $this->model->deleteMahasiswa($id);
        }
    }


?>