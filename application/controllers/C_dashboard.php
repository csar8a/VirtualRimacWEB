<?php
defined('BASEPATH') or exit('No direct script access allowed');
class C_dashboard extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        //$this->load->helper('utils');
        $this->load->model('M_dashboard');
    }
    public function index()
    {
        $this->load->view('V_dashboard');
       
    }

    public function insertarNorma()
    {
        $data['error'] = EXIT_ERROR;
        try {
            // VALIDACION DE USUARIO
            
            $config['upload_path']='../server_files';
            $config['allowed_types']='gif|jpg|png';
            $config['max_size']='20048';
            $search = explode(",","ç,æ,œ,á,é,í,ó,ú,à,è,ì,ò,ù,ä,ë,ï,ö,ü,ÿ,â,ê,î,ô,û,å,e,i,ø,u");
            $replace = explode(",","c,ae,oe,a,e,i,o,u,a,e,i,o,u,a,e,i,o,u,y,a,e,i,o,u,a,e,i,o,u");
            $nuevo = str_replace($search, $replace,$_FILES["archivo"]['name']);    
            $config['file_name'] = preg_replace('/[^a-z0-9.]/i', '', $nuevo);
            $this->load->library('upload',$config); 
            
            if (!$this->upload->do_upload("archivo")) {
               //log_message('error',$this->upload->display_errors());
               $data['msj'] = strip_tags($this->upload->display_errors());
            } else {
                
                $nombre         =  $this->input->post('nombre');
                $descripcion    =  $this->input->post('descripcion');
                $file_info = $this->upload->data();
                $archivo   = $file_info['file_name'];
                
                $datos_lugar= array(
                    'TXTNORMA'          => $nombre,
                    'TXTDESCNORMA'      => $descripcion,
                    'FLGESTADO'         => 1,
                    'TXTARCHIVOURL'     => $archivo
                );

                $data = $this->M_dashboard->insertLugar($datos_lugar);
                log_message('error',print_r($datos_lugar,true));
            }
            echo json_encode($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}