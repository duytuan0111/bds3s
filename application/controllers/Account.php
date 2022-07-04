<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Account extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_Account');
	}
	public function AccountLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/Login', $this->_data);
	}
    public function AccountRegister() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegister', $this->_data);
	}
    public function AccountRegisterBroker() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegisterBroker', $this->_data);
	}
    public function AccountRegisterBuyer() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegisterBuyer', $this->_data);
	}
    public function AccountRegisterSeller() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegisterSeller', $this->_data);
	}
    public function PageOTP() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PageOTP', $this->_data);
	}
    public function Login() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/Login', $this->_data);
	}
    public function AccountRegisterEnterprise() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegisterEnterprise', $this->_data);
	}
	public function UpdatePassword() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/UpdatePassword', $this->_data);
	}
    public function ForgotPasswordOTP() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ForgotPasswordOTP', $this->_data);
	}
    public function ForgotPasswordEmail() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ForgotPasswordEmail', $this->_data);
	}
	public function ProfileManagement() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ProfileManagement', $this->_data);
	}
	public function DetailBuyer() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/DetailBuyer', $this->_data);
	}
	public function TenantInformation() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/TenantInformation', $this->_data);
	}
	public function Profile() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/Profile', $this->_data);
	}
}
?>