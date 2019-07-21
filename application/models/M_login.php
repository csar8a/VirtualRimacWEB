<?php

class M_login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function login($user,$pass) {

        //$sql = 'SELECT * FROM "MDB_SEG"."SEG_LOGIN"(?,?) ';
        //$this->db->where('usuario', $user);
        //$this->db->where('contraseña', $pass);

        $consulta="select * from usuario where `usuario`='$user' and contrasena='$pass'";
       
        $resultado = $this->db->query($consulta);
        log_message('error',print_r($resultado,true));

        log_message('error',print_r($consulta,true));
        if($resultado->num_rows() == 1)
        {   
            $r = $resultado->row();

            return array('error'=> EXIT_SUCCESS);

        } else { return array('error'=> EXIT_ERROR);}
    }  
}