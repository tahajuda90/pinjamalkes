<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class main_control extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
    }
    public function login(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run()==TRUE){
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where(array('Nama' => $username , 'Password' => $password));
            $query = $this->db->get();
            
            $user = $query->row();
            if($user->Admin == "admin"){
                $data = array('user_logged'=>TRUE,'level'=>$user->Admin);
                $this->session->set_userdata($data);
                redirect(base_url(),"refresh");
                
            }else{
                $this->session->set_flashdata("error", "No Such account exists");
                redirect("main_control/login","refresh");
            }
        }
        $this->load->view('login');
        //echo var_dump($_SESSION);
        //echo 'login page';
    }
    
    public function logout(){
        $this->session->unset_userdata('user_loged','level');
        session_destroy();
        redirect("main_control/login","refresh");
    }
    
    public function register(){
        echo 'register page';
    }
    
}
