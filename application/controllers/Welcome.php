<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * Default Controller for our app
 *
 * Handles all requests to the root of the app including the homepage 
 *
 *@package: codeigniter
 *@since: v1.0
 *@author: Rabiu Mustapha
 *@category: Controller 
 *
 */
class Welcome extends CI_Controller {

	private $allowed_urls = array();

	public function __construct()
	{
		parent::__construct();

		//setup the allowed urls for our controller //
		$this->setup_urls();
	}
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//load the homepage view //
		$this->load->view('welcome_message');
	}

	/**
	 * This method loads the different views that come to this controller
	 * e.g. /login, /signup etc
	 * each view is routed and the view template is selected 
	 */
	public function view($url)
	{
		// show 404 error page if the url is not in the whitelist //
		if(empty($this->allowed_urls[$url])) show_404();

		$this->load->view($this->allowed_urls[$url]);
	}

	/**
	 * Setup urls allowed to be loaded by this controller 
	 * kindof a whitelist to make sure allowed urls has a view 
	 *
	 */
	private function setup_urls()
	{
		$this->allowed_urls = ['login' => 'login_page', 'signup' => 'signup_page'];
	}


}
