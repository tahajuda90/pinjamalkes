<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class peminjaman extends CI_Model{
    public function __construct() {
        parent::__construct();
    }

    public function peminjaman_new($data) {
        $this->db->insert('peminjaman', $data);
    }
    
    public function getpinjam($stts){
        $this->db->select("*");
        $this->db->from('peminjaman');
        $this->db->where('Status',$stts);
        $query=$this->db->get();
        return $query->result();
    }
    
    public function getriwayat(){
        $query = $this->db->query('SELECT DISTINCT peminjaman.Nim, user.Nama, user.Jurusan, user.Alamat, user.Nomor_HP FROM peminjaman INNER JOIN user ON peminjaman.Nim = user.Nim');
        return $query->result();
    }
    
     public function getpinjamnam($nim){
        $this->db->select("*");
        $this->db->from('peminjaman');
        $this->db->where('Nim',$nim);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getpinjamid($id_pinjam) {
        $this->db->select("*");
        $this->db->from('peminjaman');
        $this->db->where('Id_pinjaman', $id_pinjam);
        $query = $this->db->get();
        return $query->result();
    }

    public function updtpinjam($id_pinjam,$data){
        $this->db->where('Id_pinjaman',$id_pinjam);
        $this->db->update('peminjaman',$data);
    }
    
    public function deletpinjam($id_pinjam) {
        $this->db->where('Id_pinjaman',$id_pinjam);
        $this->db->delete('peminjaman');
    }

}
