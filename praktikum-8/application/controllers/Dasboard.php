<?php
defined('BASEPATH') OR exit ('NO direct access allowed');

Class dashboard extends CI_Controller {

    public function index(){
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/content');
		$this->load->view('layout/footer');
    }
}