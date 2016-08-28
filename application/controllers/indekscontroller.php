<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Indekscontroller extends CI_Controller {


	public function index()
	{
		$this->load->view('login_v');
	}

	public function validasi(){
		$this->load->model('user');

		$cek = $this->user->ambil_login();

		if ($cek==TRUE){

			redirect('Calonsiswacontroller');
		}
		else{
				$this->index();
		}

	}

	public function infoapps(){

			$this->load->view('infoview');

	}

	public function logout(){

		        $this->session->sess_destroy();
		        $this->load->view('login_v');;

	}









}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
