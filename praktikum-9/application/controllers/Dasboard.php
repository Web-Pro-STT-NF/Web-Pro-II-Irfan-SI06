<?php
defined('BASEPATH') OR exit ('NO direct access allowed');

Class dashboard extends CI_Controller {

    public function index(){
        $this->load->view('layout/heder');
        $this->load->view('layout/sidebar');
        $this->load->view('Dasboard/index');
        $this->load->view('layout/foter');
    }
}