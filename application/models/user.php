<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class user extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    public function user_new($data){
        $this->db->insert('user',$data);
    }
    public function getuser(){
        $this->db->select("*");
        $this->db->from('User');
        $this->db->where('Admin','user');
        $query = $this->db->get();
        return $query->result();
    }
    public function getuserid($nim){
        $this->db->select("*");
        $this->db->from('user');
        $this->db->where('NIM',$nim);
        $query = $this->db->get();
        return $query->result();
    }
    
      public function updtuser($nim,$data){
        $this->db->where('Nim',$nim);
        $this->db->update('user',$data);
    }
    public function deletuser($nim) {
        $this->db->where('Nim', $nim);
        $this->db->delete('user');
    }

}
