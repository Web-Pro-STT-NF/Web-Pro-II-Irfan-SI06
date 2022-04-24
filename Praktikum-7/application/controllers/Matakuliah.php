<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Matakuliah extends CI_Controller {
        public function index(){
            $this->load->model('Matakuliah_model','mtk1');
            $this->mtk1->nama='IRFAN';
            $this->mtk1->sks='3';
            $this->mtk1->kode='001';

            $this->load->model('Matakuliah_model','mtk2');

            $this->mtk2->nama='INSU';
            $this->mtk2->sks='3';
            $this->mtk2->kode='002';

            $this->load->model('Matakuliah_model','mtk3');

            $this->mtk3->nama='JULI';
            $this->mtk3->sks='4';
            $this->mtk3->kode='003';
            
            
            $list_mtk = [$this->mtk1, $this->mtk2, $this->mtk3];
            $data['list_mtk']=$list_mtk;
            $this->load->view('matakuliah/index', $data);
        }
    }
?>