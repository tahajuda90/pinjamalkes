<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class peminjaman_full extends MY_controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('peralatan');
        $this->load->model('user');
        $this->load->model('peminjaman');
    }
    public function index(){
        $query = $this->peralatan->getalat();
        $data['sedia']=null;
        if($query){
            $data['sedia']=$query;
        }
        $this->load->view('template/Header_table');
        $this->load->view('template/sidebar');
        $this->load->view('template/top_nav');
        $this->load->view('pages/daftar_altersedia',$data);
        $this->load->view('template/Footer_table');
    }
    
    public function pinjam($id_alat){
        $query1 = $this->peralatan->getalatid($id_alat);
        $data['alat']=null;
        if($query1){
            $data['alat']=$query1;
        }
        if($this->input->post('tambah')=='benar'){
            $this->storing($id_alat);
        }
        $this->load->view('template/Header_form');
        $this->load->view('template/sidebar');
        $this->load->view('template/top_nav');
        $this->load->view('pages/form_pinjam',$data);
        $this->load->view('template/Footer_form');
    }
    
    public function storing($id_Alat){
        $row = $this->user->getuserid($this->input->post('nim_user')); 
        $data = array(
            'Id_pinjaman'=> uniqid(),
            'Nim'=> $this->input->post('nim_user'),
            'Nama'=> $row[0]->Nama,
            'Id_alat'=>$id_Alat,
            'Nama_alat'=> $this->input->post('nama_alat'),
            'Jumlah'=> $this->input->post('jumlah_alat'),
            'Pinjam'=>$this->input->post('pinjam_alat'),
            'Kembali'=> $this->input->post('kembali_alat'),
            'Tujuan'=> $this->input->post('tujuan_pinjam'),
        );
        
        if($row == null ){
            $this->session->set_flashdata('warning', 'Peminjam belum teregistrasi didalam sistem');
            redirect('peminjaman_full/pinjam/'.$id_Alat, "refresh");
        }else if($this->input->post('jumlah_alat')>=$this->input->post('jumlah_tersedia')){
            $this->session->set_flashdata('warning', 'Alat yang tersedia kurang dari jumlah yang akan dipinjamkan');
            redirect('peminjaman_full/pinjam/'.$id_Alat, "refresh");
        }else{
            $this->peminjaman->peminjaman_new($data);
            $avaib = array('Tersedia'=>$this->input->post('jumlah_tersedia')-$this->input->post('jumlah_alat'));
            $this->peralatan->updtalat($id_Alat,$avaib);
            $this->session->set_flashdata('succes', 'Data sudah dimasukan pada logbook');
            redirect('peminjaman_full/pinjam/'.$id_Alat, "refresh");
        }
    }
}