<?php
class blog extends CI_Controller{
    // buat method index untuk menampilkan data blog
    public function index(){
        $data ['nama'] = "CodeIgniter 3";
        $this->load->view("blog/index", $data);
    }
    // buat method add untuk menambahkan data blog
    public function add(){
        $this->load->view("blog/add");
    }
}
?>