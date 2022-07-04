<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class ContactList extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_ContactList');
	}
	public function ContactList() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ContactList', $this->_data);
	}
	public function ContactListAgain() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ContactListAgain', $this->_data);
	}
}
?>