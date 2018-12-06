<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class alat_baru extends MY_controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('peralatan');
    }

    public function index(){
        $this->load->view('template/Header_form');
        $this->load->view('template/sidebar');
        $this->load->view('template/top_nav');
        $this->load->view('pages/form_alatbaru');
        $this->load->view('template/Footer_form');
        if($this->input->post('tambah')=='benar'){
            $this->storing();
        }
    }
    public function storing(){
        $id_alat = $this->input->post('id_alat');
        if ($id_alat == NULL || $id_alat == "-") {
            $id_alat = uniqid();
        } else {
            $id_alat = $this->input->post('id_alat');
        }
        $data = array(
            'Id_alat' => $id_alat,
            'Nama_alat' => $this->input->post('nama_alat'),
            'Merk' => $this->input->post('merk_alat'),
            'Tahun' => $this->input->post('tahun_alat'),
            'Jumlah' => $this->input->post('jumlah_alat'),
            'Tersedia' => $this->input->post('jumlah_alat'),
            'Kondisi' => $this->input->post('kondisi_alat')
        );
        
        $cek = $this->peralatan->getalatname($data['Nama_alat']);
        if($cek){
            $this->session->set_flashdata('warning', 'Alat sudah ada sebelumnya');
            
            redirect('alat_baru/index', "refresh");
        } else {
            $cnfrm = $this->peralatan->alat_new($data);
            $this->session->set_flashdata('succes', 'Alat sudah ditambahkan');
            redirect('alat_baru/index', "refresh");
        }
        
    }
    
}
