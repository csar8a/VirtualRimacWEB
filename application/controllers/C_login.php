<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_login extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
       // $sesionU = $this->session->userdata('s_nombreUsuario');
       // if (empty($sesionU)) {
            $this->load->view('V_login');
       // } else {
          //  redirect('main');
       // }
    }

    public function login() 
    {
        $data['error'] = EXIT_ERROR;

        try 
        {
            $user = $this->input->post('usuario');
            $pass = $this->input->post('password');
           // $pass = sha1($this->input->post('password'));
            log_message('error',print_r($user,true));
            log_message('error',print_r($pass,true));
            

            $data = $this->M_login->login($user,$pass);
            
            echo json_encode($data);

        } catch (\Throwable $th) {throw $th;}
    }

    
}