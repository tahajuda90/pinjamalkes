<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class alat_dipinjam extends MY_controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('peminjaman');
        $this->load->model('peralatan');
    }
    
    public function index(){
        $query = $this->peminjaman->getpinjam(0);
        $data['pinjam']=null;
        if($query){
            $data['pinjam']=$query;
        }
        $this->load->view('template/Header_table');
        $this->load->view('template/sidebar');
        $this->load->view('template/top_nav');
        $this->load->view('pages/daftar_peminjaman',$data);
        $this->load->view('template/Footer_table');
    }
    public function arsip(){
        $query = $this->peminjaman->getpinjam(1);
        $data['pinjam']=null;
        if($query){
            $data['pinjam']=$query;
        }
        $this->load->view('template/Header_table');
        $this->load->view('template/sidebar');
        $this->load->view('template/top_nav');
        $this->load->view('pages/daftar_arsip',$data);
        $this->load->view('template/Footer_table');
    }
    
    public function riwayat(){
        $query = $this->peminjaman->getriwayat();
        $data['user']=null;
        if($query){
            $data['user']=$query;
        }
        $this->load->view('template/Header_table');
        $this->load->view('template/sidebar');
        $this->load->view('template/top_nav');
        $this->load->view('pages/daftar_riwayat',$data);
        $this->load->view('template/Footer_table');
    }
    
    public function kembali($id_pinjam){
        $rent = $this->peminjaman->getpinjamid($id_pinjam);
        $jmlh1 = $rent[0]->Jumlah;
        $ast = $this->peralatan->getalatid($rent[0]->Id_alat);
        $jmlh2 = $ast[0]->Tersedia;
        $pinjam=array('Status'=>1);
        $alat=array('Tersedia'=>$jmlh1+$jmlh2);
        $this->peminjaman->updtpinjam($id_pinjam,$pinjam);
        $this->peralatan->updtalat($rent[0]->Id_alat,$alat);
        redirect('alat_dipinjam', "refresh");
    }
    
        public function riwayat_user($nim){
        $query = $this->peminjaman->getpinjamnam($nim);
        $data['pinjam']=null;
        if($query){
            $data['pinjam']=$query;
        }
        $this->load->view('template/Header_table');
        $this->load->view('template/sidebar');
        $this->load->view('template/top_nav');
        $this->load->view('pages/daftar_arsip',$data);
        $this->load->view('template/Footer_table');
    }
}