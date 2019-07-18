<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->model('M_login');
    }

    public function index()
    {
       $this->load->view('V_home');
    
    }


    
}