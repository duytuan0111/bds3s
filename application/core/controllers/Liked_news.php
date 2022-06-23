<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Liked_news extends CI_Controller
{
	protected $_data;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_liked_new');
		$this->load->model('M_saved_new');
		$this->load->model('M_news');
		$this->load->model('M_account');
		$this->load->helper('images_helper');
		$this->load->library('pagination');
	}
	public function like() {
		$id 		= $_POST['id'];
		$user_id 	= $_POST['user_id'];
		$response 	= ['status' => 0, 'msg' => ''];
		$check 		= $this->M_liked_new->checkSaved($id, $user_id);
		if ($check > 0) {
			$delete = $this->M_liked_new->deleteRecord($user_id, $id);
			if ($delete) {
				$response['status'] = 1;
				$response['msg'] = 'Bỏ thích thành công';
			}
		} else {
			$insert = $this->M_liked_new->insert(['new_id' => $id, 'user_id' => $user_id]);
			if ($insert > 0) {
				$response['status'] = 2;
				$response['msg'] = 'Thành công';
			}
		}
		echo json_encode($response);
	}
	public function checkLiked() {
		$id 		= $_POST['id'];
		$user_id 	= $_POST['user_id'];
		$check 		= $this->M_liked_new->checkSaved($id, $user_id);
		if ($check > 0) {
			echo 1;
		} else {
			echo 0;
		}
	}

	public function checkListNews() {
		$id 		= $_POST['id'];
		$user_id 	= $_POST['user_id'];
		$check 		= $this->M_liked_new->checkSaved($id, $user_id);
		$check_save = $this->M_saved_new->checkSaved($id, $user_id);
		$response   = ['check_like' => 0, 'check_save' => 0];
		if ($check > 0) {
			$response['check_like'] = 1;
		}
		if ($check_save  > 0) {
			$response['check_save'] = 1;
		}
		echo json_encode($response);
	}
}
?>