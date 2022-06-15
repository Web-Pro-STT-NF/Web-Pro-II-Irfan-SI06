<?php
class Matakuliah extends CI_Controller{
    public function index(){
        // method Matakuliah 1
        $this->load->model('matakuliah_model', 'matkul1');

        $this->matkul1->nama="Pemrograman WEB 2";
        $this->matkul1->sks='3';
        $this->matkul1->kode="PW2";

        // method Matakuliah 2
        $this->load->model('matakuliah_model', 'matkul2');

        $this->matkul2->nama="Jaringan Komputer";
        $this->matkul2->sks='3';
        $this->matkul2->kode="JARKOM";

        // method Matakuliah 3
        $this->load->model('matakuliah_model', 'matkul3');

        $this->matkul3->nama="Basis Data";
        $this->matkul3->sks='4';
        $this->matkul3->kode="BASDAT";

        // method Matakuliah 4
        $this->load->model('matakuliah_model', 'matkul4');

        $this->matkul4->nama="Statistik Probabilitas";
        $this->matkul4->sks='2';
        $this->matkul4->kode="STAPRO";

        // method Matakuliah 5
        $this->load->model('matakuliah_model', 'matkul5');

        $this->matkul5->nama="PPKn";
        $this->matkul5->sks='2';
        $this->matkul5->kode="PKN";

        // method Matakuliah 6
        $this->load->model('matakuliah_model', 'matkul6');

        $this->matkul6->nama="Bahasa Inggris";
        $this->matkul6->sks='2';
        $this->matkul6->kode="B-ING";

        // method Matakuliah 7
        $this->load->model('matakuliah_model', 'matkul7');

        $this->matkul7->nama="User Interface & User Experience";
        $this->matkul7->sks='3';
        $this->matkul7->kode="UI/UX";

        // method Matakuliah 8
        $this->load->model('matakuliah_model', 'matkul8');

        $this->matkul8->nama="Komunikasi Efektif";
        $this->matkul8->sks='2';
        $this->matkul8->kode="KE";

        // simpan objek yang kita buat tadi ke dalam array
        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3, $this->matkul4, $this->matkul5, $this->matkul6, $this->matkul7, $this->matkul8];
        // siapkan data untuk dikirim ke dalam view, dimana datanya diambil dari objek yang kita simpan ke dalam array
        $data['list_matkul'] = $list_matkul;
        // render data dan kirim data ke dalam view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layout/footer');

        }

        public function create(){
            $this->load->model('matakuliah_model', 'matkul9');
            $this->matkul9->nama = $this->input->post('nama');
            $this->matkul9->sks = $this->input->post('sks');
            $this->matkul9->kode = $this->input->post('kode');

            $data1['matkul9'] = $this->matkul9;
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('matakuliah/create', $data1);
            $this->load->view('layout/footer');
        }    

}