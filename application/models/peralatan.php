<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class peralatan extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    public function alat_new($data){
        $this->db->insert('daftar_alat',$data);
    }
    
    public function getalat(){
        $this->db->select("*");
        $this->db->from('daftar_alat');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getalatname($nama){
        $this->db->select("*");
        $this->db->from('daftar_alat');
        $this->db->where('Nama_alat',$nama);
        $query=$this->db->get();
        return $query->result();
    }
    public function getalatid($id_alat){
        $this->db->select("*");
        $this->db->from('daftar_alat');
        $this->db->where('Id_alat',$id_alat);
        $query=$this->db->get();
        return $query->result();
    }
    
    public function updtalat($id_alat,$data){
        $this->db->where('Id_alat',$id_alat);
        $this->db->update('daftar_alat',$data);
    }
    
    public function deletalat($id_alat) {
        $this->db->where('Id_alat', $id_alat);
        $this->db->delete('daftar_alat');
    }

}