<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class RecentRealEstate extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_RecentRealEstate');
	}
	public function index() {
		$this->_data['page_title']   			= 'Bất động sản gần đây';
		$this->_data['robots']					= 'noindex,nofollow';
		$this->_data['canonical']				= base_url();
		$this->load->view('site/RecentRealEstate', $this->_data);
	}
}
?>