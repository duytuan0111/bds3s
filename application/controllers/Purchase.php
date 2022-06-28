<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Purchase extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_Purchase');
	}
	public function PurchaseBeforeLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PurchaseBeforeLogin', $this->_data);
	}
	public function DetailPurchaseBeforeLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/DetailPurchaseBeforeLogin', $this->_data);
	}
}
?>