<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class News extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_News');
	}
	public function DetailsNews() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/DetailsNews', $this->_data);
	}
	public function News() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/News', $this->_data);
	}
}
?>