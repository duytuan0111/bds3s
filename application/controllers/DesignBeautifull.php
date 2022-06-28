<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class DesignBeautifull extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_DesignBeautifull');
	}
	public function HomeDesign() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/HomeDesign', $this->_data);
	}
	public function DetailHomeDesign() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/DetailHomeDesign', $this->_data);
	}
	public function BeautifulListRooms() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/BeautifulListRooms', $this->_data);
	}
}
?>