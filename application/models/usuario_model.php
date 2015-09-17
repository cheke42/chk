<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model{
	public $variable;

	public function __constructor(){
		parent::__constructor();
	}

	public function login($username, $password){
		/* nos devuelve una fila si el password es correcto*/	
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$q = $this->db->get('usuarios');
		if ($q->num_rows()>0){
			return true;
		}else{
			return false;
		}
	}

	public function update($nombre,$apellido){
		echo ($nombre . ' - ' . $apellido . ' DESDE MODELO');

		$data = array(
               'nombre' => $nombre,
               'apellido' => $apellido,
            );
		$this->db->where('username', $this->session->userdata('username'));
		$this->db->update('usuarios', $data);
		redirect('panel/perfil'); 
	}

	public function getUsuario($usuario){

		$this->db->where('username',$usuario);
		return $query = $this->db->get('usuarios');
	}
}

?>