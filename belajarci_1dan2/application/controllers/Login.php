<?php

defined('BASEPATH') or exit('No direct script allowed');

class Login extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->load->model('MLogin');
     }

     public function index()
     {
        if(isset($_POST['btn_login'])){
            $username = $_POST['txt_user'];
            $password = $_POST['txt_pass'];
            $notif = $this->MLogin->Gologin($username, $password);
            if($notif){
                $this->load->library('session');
                $this->session->set_userdata('Login', 'Onlogin');
                redirect(site_url('Login'));
            }
        }
        $this->load->view('VLogin');
     }
}

?>