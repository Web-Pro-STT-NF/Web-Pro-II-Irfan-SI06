<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HOME extends CI_Controller {

    public function index(){
        $this->load->model('mahasiswa_model', 'mahasiswa');
        $list_mahasiswa=$this->mahasiswa->getAll();
        $data ['list_mahasiswa'] = $list_mahasiswa;

        // $data['list_mahasiswa']=$this->mahasiswa->getAll();
        $this->load->view('Home/index',$data);
    }


}