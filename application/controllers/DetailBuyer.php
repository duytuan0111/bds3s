<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class DetailBuyer extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_DetailBuyer');
	}
	public function index() {
		$this->_data['page_title']   			= 'Chi tiết người mua bán';
		$this->_data['robots']					= 'noindex,nofollow';
		$this->_data['canonical']				= base_url();
		$this->load->view('site/DetailBuyer', $this->_data);
	}
}
?>