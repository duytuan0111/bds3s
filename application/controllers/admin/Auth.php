<?php 
/**
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	protected $_data;
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin_account', 'Madmin');
		$this->load->model('M_account');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function login() {
		$this->_data['head_title'] = 'Admin - đăng nhập';
		if ($this->input->post('username')) {
			$result = ['status' => false, 'messages' => ''];
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$check 	  = $this->Madmin->checkLogin($username, md5($password));
			if ($check > 0) {
				$info = $this->Madmin->getInfoBy($username,md5($password));
				$userdata = [
					'username' => $info['username'],
					'type' 	   => $info['type'],
					'role' 	   => $info['role']
				];
				$this->session->set_userdata('user_admin', $userdata);
				$result = ['status' => true, 'messages' => 'Đăng nhập thành công'];
			}
			echo json_encode($result);

		} else {
			$this->load->view('admin/login', $this->_data);
		}
	}
	public function insertAdmin() {
		$result = ['status' => false, 'messages' => ''];
		$username 	= $this->input->post('username');
		$type 		= $this->input->post('type');
		$password 	= $this->input->post('password');
		if ($username !== '' && $password !== '') {
			$data 	= [
				'username' 	=> $username,
				'password' 	=> md5($password),
				'type' 	   	=> $type,
				'created_at'=> date('d-m-Y'),
				'role' 	 	=> 3
			];
			$insert = $this->Madmin->insert($data);
			if ($insert > 0) {
				$result = ['status' => true, 'messages' => 'Thêm mới thành công'];
			}
		}
		echo json_encode($result);
	}
	public function insertUser() {
		$result 	= ['status' => false, 'messages' => ''];
		$name 		= $this->input->post('name');
		$phone 		= $this->input->post('phone');
		$city 		= $this->input->post('city');
		$district 	= $this->input->post('district');
		$email 		= $this->input->post('email');
		$password 	= $this->input->post('password');
		if ($email !== '' && $password !== '') {
			$data = [
				'email' 		=> $email,
				'phone'			=> $phone,
				'name'			=> $name,
				'cit_id'		=> $city,
				'district_id'	=> $district,
				'password'		=> md5($password),
				'created_at'	=> date('Y-m-d')
			];
			$insert_id = $this->M_account->insert($data);
			if ($insert_id > 0) {
				$result = ['status' => true, 'messages' => 'Thêm mới thành công'];
			}
		}
		echo json_encode($result);
	}
	public function infoUser() {
		$id 		= $this->input->post('id');
		$result 	= ['status' => false, 'messages' => ''];
		$infoUser 	= $this->M_account->getInfoUserBy($id);
		if (count($infoUser) > 0) {
			$result 		= ['status' => true, 'messages' => 'Chi tiết người dùng', 'result' => $infoUser];
		}
		echo json_encode($result);
	}
	public function updateUser() {
		$result 	= ['status' => false, 'messages' => ''];
		$userID 	= $this->input->post('userID');
		$name 		= $this->input->post('name');
		$city 		= $this->input->post('city');
		$district 	= $this->input->post('district');
		$address 	= $this->input->post('address');
		$password 	= $this->input->post('password');
		$data 		= [
			'name' 			=> $name,
			'cit_id'		=> $city,
			'district_id'	=> $district,
			'address' 		=> $address
		];
		if ($password !== '') {
			$data['password'] = $password;
		}
		$update = $this->M_account->update($data, $userID);
		if ($update) {
			$result 	= ['status' => true, 'messages' => 'Cập nhật thành công'];
		}
		echo json_encode($result);

	}
	public function updatePass() {
		$result 	= ['status' => false, 'messages' => ''];
		$user_id 	= $this->input->post('id');
		$password 	= $this->input->post('password');
		$update 	= $this->Madmin->update(['password' => md5($password)], $user_id);
		if ($update) {
			$result 	= ['status' => true, 'messages' => 'Cập nhật thành công'];
		}
		echo json_encode($result);
	}
	public function deleteUser() {
		$id = $this->input->post('id');
		$result = ['status' => false, 'messages' => ''];
		$delete = $this->Madmin->delete($id);
		if ($delete) {
			$result = ['status' => true, 'messages' => 'Xóa thành công'];
		}
		echo json_encode($result);
	}
	public function checkUsername() {
		$username 	= $this->input->post('username');
		$result 	= ['status' => false, 'messages' => ''];
		$check 		= $this->Madmin->checkUsername($username);
		if ($check  == 0) {
			$result 	= ['status' => true, 'messages' => ''];
		}
		echo json_encode($result);
	}
	public function logout() {
		$this->session->unset_userdata('user_admin');
		redirect('admin/auth/login');
	}
}
 ?>