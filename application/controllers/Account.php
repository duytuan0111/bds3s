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
		$this->load->model('M_otp');
		$this->load->model('M_City');
		$this->load->library('Globals');
	}
	public function AccountLogin() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/Login', $this->_data);
	}
    public function AccountRegister() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegister', $this->_data);
	}
	public function checkEmail() {
		$email = $_POST['email'];
		$check = $this->M_Account->checkBy($email);
		if ($check > 0) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function sendOTP() {
		$email = $_POST['email'];
		if ($email !== '') {
			$otp_code	= mt_rand(100000,999999); 
			$subject	= '[batdongsan3s] Kích hoạt tài khoản đăng ký';
			$body		= 'Mã xác nhận OTP của bạn là: '.$otp_code;
			$send_email	= $this->globals->sendEmail($email, $subject, $body);

			if ($send_email) {
				$check	= $this->M_otp->checkEmail($email);
				if ($check > 0) {
					$update = $this->M_otp->update($email, ['code' => $otp_code, 'updatedDate' => date('Y-m-d')]);
				} else {
					$insert = $this->M_otp->insert(['email' => $email, 'code' => $otp_code, 'createdDate' => date('Y-m-d')]);
				}
				return 1;
				echo 1;
			}
		} else {
			return 0;
			echo 0;
		}
	}
	public function ajaxRegister() {
		$data = [
			'email'				=> $_POST['email'],
			'password'			=> md5($_POST['password']),
			'phone'				=> $_POST['phone'],
			'name'				=> $_POST['name'],
			'newTypeInterest'	=> $_POST['type_interest'],
			'newType'			=> $_POST['type_real_estate'],
			'cityID'			=> $_POST['city'],
			'districtID'		=> $_POST['district'],
			'wardID'			=> $_POST['ward'],
			'address'			=> $_POST['address'],
			'gender'			=> $_POST['gender'],
			'userType'			=> $_POST['usertype'],
			'createdDate'		=> date('Y-m-d')
		];
		$insert_id = $this->M_Account->insert_id($data);
		echo $insert_id;
	}
    public function AccountRegisterBroker() {
		$this->_data['list_city']				= $this->M_Account->listProvince();
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegisterBroker', $this->_data);
	}
	public function ajaxRegisterBroker() {
		$data = [
			'email'				=> $_POST['email'],
			'password'			=> md5($_POST['password']),
			'phone'				=> $_POST['phone'],
			'name'				=> $_POST['name'],
			'cityID'			=> $_POST['city'],
			'districtID'		=> $_POST['district'],
			'wardID'			=> $_POST['ward'],
			'address'			=> $_POST['address'],
			'gender'			=> $_POST['gender'],
			'userType'			=> $_POST['usertype'],
			'createdDate'		=> date('Y-m-d')
		];
		$insert_id = $this->M_Account->insert_id($data);
		echo $insert_id;
	}
    public function AccountRegisterBuyer() {
		$this->_data['list_city']				= $this->M_Account->listProvince();
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegisterBuyer', $this->_data);
	}
	public function getListDistrict() {
		$id										= $_POST['id'];
		$list_districts							= $this->M_Account->listDistrictBy($id);
		echo json_encode($list_districts);
	}
	public function getListWard() {
		$id										= $_POST['id'];
		$list_wards								= $this->M_Account->listWardBy($id);
		echo json_encode($list_wards);
	}
    public function AccountRegisterSeller() {
		$this->_data['list_city']				= $this->M_Account->listProvince();
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegisterSeller', $this->_data);
	}
	public function getEmailRegister() {
		$id_user								= $_POST['id_user'];
		$otp									= $_POST['otp'];
		$email									= $this->M_Account->getEmailby($id_user);
		$getOTP									= $this->M_otp->checkOTP($email['email']);
		if ($otp != $getOTP['code']) {
			echo 1;
		} else {
			$active								= $this->M_Account->activeUser(['active' => 1],$id_user);
			echo 2;
		}
	}
    public function PageOTP($id) {
		$this->_data['id_user']					= $id;
		$this->_data['canonical']				= base_url();
		$this->load->view('site/PageOTP', $this->_data);
	}
    public function Login() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/Login', $this->_data);
	}
    public function AccountRegisterEnterprise() {
		$this->_data['list_city']				= $this->M_Account->listProvince();
		$this->_data['canonical']				= base_url();
		$this->load->view('site/AccountRegisterEnterprise', $this->_data);
	}
	public function ajaxRegisterEnterprise() {
		$data = [
			'email'				=> $_POST['email'],
			'password'			=> md5($_POST['password']),
			'phone'				=> $_POST['phone'],
			'companyName'		=> $_POST['com'],
			'cityID'			=> $_POST['city'],
			'field'				=> $_POST['field'],
			'districtID'		=> $_POST['district'],
			'wardID'			=> $_POST['ward'],
			'taxCode'			=> $_POST['taxCode'],
			'address'			=> $_POST['address'],
			'userType'			=> $_POST['usertype'],
			'createdDate'		=> date('Y-m-d')
		];
		$insert_id = $this->M_Account->insert_id($data);
		echo $insert_id;
	}
	public function UpdatePassword($id) {
		$this->_data['id']						= $id;
		$this->_data['canonical']				= base_url();
		$this->load->view('site/UpdatePassword', $this->_data);
	}
    public function ForgotPasswordOTP($id) {
		$this->_data['id_user']					= $id;
		$getEmail = $this->M_Account->getEmailby($id);
		$this->_data['email']					= $getEmail['email'];
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ForgotPasswordOTP', $this->_data);
	}
	public function sendForgotPasswordOTP() {
		$email									= $_POST['email'];
		if ($email != '') {
			$otp_code	= mt_rand(100000,999999); 
			$subject	= '[batdongsan3s] Kích hoạt tài khoản đăng ký';
			$body		= 'Mã xác nhận OTP của bạn là: '.$otp_code;
			$send_email	= $this->globals->sendEmail($email, $subject, $body);

			if ($send_email) {
				$update = $this->M_otp->update($email, ['code' => $otp_code, 'updatedDate' => date('Y-m-d')]);
				$getID	= $this->M_Account->getIdForgot($email);
				echo $getID['id'];
			}
		} else {
			echo 0;
		}
	}
	public function checkEmailForgot() {
		$email									= $_POST['email'];
		$check = $this->M_Account->checkEmailForgot($email);
		echo $check;
	}
    public function ForgotPasswordEmail() {
		$this->_data['canonical']				= base_url();
		$this->load->view('site/ForgotPasswordEmail', $this->_data);
	}
	public function ForgotPasswordUpdate() {
		$id										= $_POST['id'];
		$password								= md5($_POST['password']);
		$update = $this->M_Account->ForgotPasswordUpdate($id, ['password' => $password, 'updatedDate' => date('Y-m-d')]);
	}
	public function checkOTPforgotPW() {
		$id										= $_POST['id'];
		$otp									= $_POST['otp'];
		$email									= $this->M_Account->getEmailby($id);
		$getOTP									= $this->M_otp->checkOTP($email['email']);

		if ($otp != $getOTP['code']) {
			echo 1;
		} else {
			echo $email['id'];
		}
	}
}
?>
