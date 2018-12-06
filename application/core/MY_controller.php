<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class MY_controller extends CI_Controller{
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('user_logged') == FALSE) {
            $this->session->set_flashdata("error", "Silahkan login Terlebih dahulu");
            redirect("main_control/login", "refresh");
        }
    }
}
