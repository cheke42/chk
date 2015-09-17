<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); 

class Login extends CI_Controller{

	public function __constructor(){
		parent::__constructor();
	}

	public function index(){
		
		if($this->session->userdata('username')){
			redirect(panel);
		}

		if(isset($_POST['password'])){		
			$this->load->model('usuario_model');
			if($this->usuario_model->login($_POST['username'], $_POST['password'])){
				$this->session->set_userdata('username',$_POST[username]);
				redirect('panel');

			}else{
				echo ('password-mal');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome');
	}

	public function update(){
		$this->load->model('usuario_model');
		$this->usuario_model->update($_POST['nuevo-nombre'], $_POST['nuevo-apellido']);
	}	




	}
?>