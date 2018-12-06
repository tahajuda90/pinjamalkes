<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class daftar_pengguna extends MY_controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('user');
    }
    public function index(){
        $query = $this->user->getuser();
        $data['user']=null;
        if($query){
            $data['user']=$query;
        }
        $this->load->view('template/Header_table');
        $this->load->view('template/sidebar');
        $this->load->view('template/top_nav');
        $this->load->view('pages/daftar_pengguna',$data);
        $this->load->view('template/Footer_table');
    }
    
    public function editpengguna($Nim){
        $query = $this->user->getuserid($Nim);
        $data['user']=null;
        if($query){
            $data['user']=$query;
        }
        $this->load->view('template/Header_form');
        $this->load->view('template/sidebar');
        $this->load->view('template/top_nav');
        $this->load->view('pages/form_editpengguna',$data);
        $this->load->view('template/Footer_form');
        if ($this->input->post('tambah') == 'benar') {
            $this->updatepengguna();
        }
    }
    
    public function updatepengguna(){
        $data = array(
            'Nim' => $this->input->post('nim_user'),
            'Nama'=>$this->input->post('nama_user'),
            'Jurusan'=>$this->input->post('jurusan_user'),
            'Alamat'=>$this->input->post('alamat_user'),
            'Nomor_Hp'=>$this->input->post('nomor_user'),
            'Gender'=>$this->input->post('gender_user'),
        );
        $this->user->updtuser($this->input->post('nim_user'),$data);
        redirect('daftar_pengguna/index', "refresh");
    }
    
    public function deleteuser($Nim){
        $this->user->deletuser($Nim);
        redirect('daftar_pengguna/index', "refresh");
    }
}