<?php

class M_dashboard extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function insertLugar($datos_lugar){
       $nombre     = $datos_lugar['TXTNORMA'];
       $descripcion= $datos_lugar['TXTDESCNORMA'];
       $archivo = $datos_lugar['TXTARCHIVOURL'];

$query=('INSERT INTO `resources` (`title`, `description`,`image_url`) VALUES ('.$nombre.', '.$descripcion.', '.$archivo.');');
 $this->db->query($query);

 /*
if($resultado->result()[0]->INT_INSERTARDOCUMENTO == 'OK'){
return array('error'=> EXIT_SUCCESS);
} else {
return array('error'=> EXIT_ERROR,
'msj'=> 'No se pudo registrar el documento');
}*/

/*      if($resultado->num_rows() == 1)
        {   
            $r = $resultado->row();

            return array('error'=> EXIT_SUCCESS);

        } else { return array('error'=> EXIT_ERROR);}
    */}  
}