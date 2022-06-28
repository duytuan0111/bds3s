<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Lease extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_Lease');
	}
	public function LeaseBeforeLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/LeaseBeforeLogin', $this->_data);
	}
	public function DetailLeaseBeforeLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/DetailLeaseBeforeLogin', $this->_data);
	}
}
?>