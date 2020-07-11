<?php

class Login extends CI_Controller {
	
	function index() {
		$this->session->sess_destroy();
		$this->load->view('LoginPage/login');
		
	}


	
	function validate_credentials() 
	{
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();

		if($query)
		{	

			$data = array(
       						 'username' => $this->input->post('username'),
       						 'is_logged_in'  => true
       						 
						);

			
			$this->session->set_userdata($data);

			if($query == 'Admin')
			{
				redirect('hms/admin');
			}
			elseif ($query == 'Doctor') {
				redirect('hms/doctor');
			}
			elseif ($query == 'Registration') {
				redirect('hms/registration');
			}
			else
			{
				redirect('hms/pharmacy');
			}
		}

		else
		{
			$this->load->view('LoginPage/login');
		}
			
		

	}


}