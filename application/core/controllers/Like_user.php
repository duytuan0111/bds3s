<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* 
*/
class Like_user extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_like_user');
	}
	public function index() {
		$user_id 			= $_POST['user_id']; 
		$user_id_liked 		= $_POST['user_id_liked']; 
		$check 				= $this->M_like_user->checkLike($user_id, $user_id_liked);
		$response 			= ['status' => 0, 'msg' => ''];
		if ($check == 0) {
			$insert = $this->M_like_user->add(['user_id' => $user_id, 'user_id_liked' => $user_id_liked]);
			$response['status'] = 1;
		} else {
			$delete = $this->M_like_user->delete($user_id, $user_id_liked);
			$response['status'] = 2;
		}
		echo json_encode($response);
	}
}
?>