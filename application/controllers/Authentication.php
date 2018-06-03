<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * Authentication Controller 
 *
 * Handles the Client signup and login actions 
 * Form validation and sanitization are done 
 * Session data are populated and redirections 
 *
 *@ver: 1.0
 *@author: Rabiu Mustapha
 *@package: CodeIgniter 
 *@category: Controller 
 *
 */
class Authentication extends CI_Controller{
	
	/**
	 * Constructor 
	 *
	 * Call CI_Controller constructors and load libraries, database and helpers 
	 *
	 */
	public function __construct(){
		parent::__construct();

		$this->load->library(['form_validation']);
		$this->load->database();
	}

	/**
	 * Handles login to the app
	 *
	 * Authentication and authorisation is done, redirection and errors are setup here
	 *
	 */
	public function login()
	{
		
		$this->form_validation->set_rules('client_email_or_username', 'Username or Email', 'required');
		$this->form_validation->set_rules('client_password', 'Password', 'required');

		//if there are errors in the validation, add flash errors  and redirect back to the form //
		if(!$this->form_validation->run()){
			$this->session->set_flashdata('validation_errors', validation_errors());
			redirect($this->input->post("return_url")); 
		} 

		$username_email = 	$this->input->post('client_email_or_username');

		$user_password = 	password_hash($this->input->post('client_password'), PASSWORD_BCRYPT );

		print_r(['username' => $username_email, 'password' => $user_password, "r" => $this->input->post("return_url")]);

	}

	public function signup()
	{
		print_r($this->input->post());
	}
}