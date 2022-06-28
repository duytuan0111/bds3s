<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class UtilitiesInterest extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_UtilitiesInterest');
	}
	public function index() {
		$this->_data['page_title']   			= 'Tiện ích lãi suất';
		$this->_data['robots']					= 'noindex,nofollow';
		$this->_data['canonical']				= base_url();
		$this->load->view('site/UtilitiesInterest', $this->_data);
	}
}
?>