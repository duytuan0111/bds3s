<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class TutorialAfterLogin extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_TutorialAfterLogin');
	}
	public function index() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/TutorialAfterLogin', $this->_data);
	}
}
?>