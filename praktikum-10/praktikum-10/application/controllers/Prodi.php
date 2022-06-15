<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Prodi extends CI_Controller{

    public function index(){
        $this->load->model('prodi_model', 'prodi');
        $list_prodi = $this->prodi->getAll();
        $data ['list_prodi'] = $list_prodi;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/index', $data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $_kode = $this->input->get('id');
        $this->load->model('prodi_model','prodi');
        $data['prd']=$this->prodi->findById($_kode);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul']='Form Kelola Prodi';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('prodi_model', 'prodi');

        $_kode = $this->input->post('kode');
        $_nama = $this->input->post('nama');
        $_kaprodi = $this->input->post('kaprodi');
        $_idedit = $this->input->post('idedit');

        $data_prd[]=$_kode;
        $data_prd[]=$_nama;
        $data_prd[]=$_kaprodi;

        if(isset($_idedit)){
            $data_prd[]=$_idedit;
            $this->prodi->update($data_prd);
        }

        else{
            $this->prodi->save($data_prd);
        }

        redirect(base_url().'index.php/prodi/view?id='.$_kode, 'refresh');
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('prodi_model', 'prodi');
        $prdedit = $this->prodi->findById($_id);
        $data['judul']='Form Kelola Prodi';
        $data['prdedit'] = $prdedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('prodi_model','prodi');
        $this->prodi->delete($_id);
        redirect(base_url().'index.php/prodi', 'refresh');
    }
}
?>