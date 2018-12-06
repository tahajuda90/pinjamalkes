<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class pengguna_baru extends MY_controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('user');
    }
    
    
    public function index() {
        $this->load->view('template/Header_form');
        $this->load->view('template/sidebar');
        $this->load->view('template/top_nav');
        $this->load->view('pages/form_penggunabaru');
        $this->load->view('template/Footer_form');
        if ($this->input->post('tambah') == 'benar') {
            $this->storing();
        }
    }

    public function storing() {
        $data = array(
            'Nim' => $this->input->post('nim_user'),
            'Nama'=>$this->input->post('nama_user'),
            'Jurusan'=>$this->input->post('jurusan_user'),
            'Alamat'=>$this->input->post('alamat_user'),
            'Nomor_Hp'=>$this->input->post('nomor_user'),
            'Gender'=>$this->input->post('gender_user'),
        );
        $cek = $this->user->getuserid($data['Nim']);
        if($cek){
            $this->session->set_flashdata('warning', 'Peminjam sudah ada sebelumnya');
            
            redirect('pengguna_baru/index', "refresh");
        } else {
            $this->user->user_new($data);
            $this->session->set_flashdata('succes', 'Peminjam sudah didaftarkan');
            redirect('pengguna_baru/index', "refresh");
        }
        
    }

}