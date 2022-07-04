<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class GroupManagement extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_GroupManagement');
	}
	public function GroupManagement() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/GroupManagement', $this->_data);
	}
}
?>