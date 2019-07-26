<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_dashboard extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->helper('utils');
    }
    public function index()
    {
        $this->load->view('V_dashboard');
    }
}