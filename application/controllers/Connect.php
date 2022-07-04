<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Connect extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_Connect');
	}
	public function ContactPage() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ContactPage', $this->_data);
	}
	public function Introduction() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/Introduction', $this->_data);
	}
	public function DiagramWebsite() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/DiagramWebsite', $this->_data);
	}
	public function NecessaryInformation() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/NecessaryInformation', $this->_data);
	}
	public function UsageAgreement() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/UsageAgreement', $this->_data);
	}
	public function PrivacyPolicy() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PrivacyPolicy', $this->_data);
	}
	public function DisputeResolutionProcess() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/DisputeResolutionProcess', $this->_data);
	}
	public function Feedback() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/Feedback', $this->_data);
	}
}
?>