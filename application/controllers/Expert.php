<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Expert extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_Expert');
	}
	public function BrokerExpert() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/BrokerExpert', $this->_data);
	}
	public function BusinessExpert() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/BusinessExpert', $this->_data);
	}
	public function DetailBroker() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/DetailBroker', $this->_data);
	}
	public function DetailBusiness() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/DetailBusiness', $this->_data);
	}
}
?>