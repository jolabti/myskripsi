<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Indekscontroller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login_v');
	}

	public function loginc()
	{
		//$this->load->view('login_v');
		$this->load->library('form_validation');

					$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
					$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

					if($this->form_validation->run() == FALSE)
					{
						//Field validation failed.  User redirected to login page
						$this->load->view('login_view');
					}
					else
					{
						//Go to private area
						redirect('home', 'refresh');
					}

	}

	function check_database($password)
  {
   //Field validation succeeded.  Validate against database
	 $this->load->model('user');	
   $username = $this->input->post('username');

   //query the database
   $result = $this->user->login($username, $password);

   if($result)
   {
       $sess_array = array();
       foreach($result as $row)
     {
        $sess_array = array(
           'id' => $row->id,
           'username' => $row->username
         );
       $this->session->set_userdata('logged_in', $sess_array);
       }
       return TRUE;

		}

		 else
     {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
     }
 }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
