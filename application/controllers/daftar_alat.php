<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class daftar_alat extends MY_controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('peralatan');
    }
    public function index() {
        $query = $this->peralatan->getalat();
        $data['alat']=null;
        if($query){
            $data['alat']=$query;
        }
        $this->load->view('template/Header_table');
        $this->load->view('template/sidebar');
        $this->load->view('template/top_nav');
        $this->load->view('pages/daftar_alat',$data);
        $this->load->view('template/Footer_table');
    }
    
    public function editalat($id_alat){
        $query = $this->peralatan->getalatid($id_alat);
        $data['alat']=null;
        if($query){
            $data['alat']=$query;
        }
        $this->load->view('template/Header_form');
        $this->load->view('template/sidebar');
        $this->load->view('template/top_nav');
        $this->load->view('pages/form_editalat',$data);
        $this->load->view('template/Footer_form');
        if($this->input->post('tambah')=='benar'){
            $this->updatealat();
        }
    }
    
    public function updatealat(){
        $query = $this->peralatan->getalatid($this->input->post('id_alat'));
        $jumlah = $query[0]->Jumlah;
        $Tersedia = $query[0]->Tersedia;
        $tersedia2 = ($this->input->post('jumlah_alat')-$jumlah)+$Tersedia;
        $baru = array(
            'Nama_alat' => $this->input->post('nama_alat'),
            'Merk' => $this->input->post('merk_alat'),
            'Tahun' => $this->input->post('tahun_alat'),
            'Jumlah' => $this->input->post('jumlah_alat'),
            'Tersedia' => $tersedia2,
            'Kondisi' => $this->input->post('kondisi_alat')
        );
        $this->peralatan->updtalat($this->input->post('id_alat'),$baru);
        redirect('daftar_alat/index', "refresh");
    }
    
    public function deletealat($id_alat){
        $this->peralatan->deletalat($id_alat);
        redirect('daftar_alat/index', "refresh");
    }
}