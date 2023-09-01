<?php 
    include_once '../models/Book.php';
    class BookController{
        private $model;
        public function __construct($db){
            $this->model=new Book($db);
        }
        public function getAllBook(){
            return $this->model->getAllBook();
        }
        public function createBook($nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat){
            return $this->model->createBook($nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
        }
        // function getBookById($id) {
        //     return $this->model->getBookById($id);
        // }
        // function updateBook($id, $nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat){
        //     return $this->model->updateBook($id, $nip, $nama, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $agama, $alamat);
        // }
        // public function deleteBook($id){
        //     return $this->model->deleteBook($id);
        // }
    }


?>