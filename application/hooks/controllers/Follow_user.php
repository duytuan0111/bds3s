<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
/**
* 
*/
class Follow_user extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_follow_user');
		$this->load->model('M_notification', 'M_nofi');
	}
	public function index() {
		$user_id 			= $_POST['user_id']; 
		$user_id_followed 	= $_POST['user_id_followed']; 
		$check 				= $this->M_follow_user->checkFollow($user_id, $user_id_followed);
		$response 			= ['status' => 0, 'msg' => ''];
		$checkNofi 			= $this->M_nofi->checkNofi($user_id, $user_id_followed);
		if ($check == 0) {
			$insert 		= $this->M_follow_user->add(['user_id' => $user_id, 'user_id_followed' => $user_id_followed]);
			if ($checkNofi == 0 && $user_id !== $user_id_followed) {
			 	$insert_nofi 	= $this->M_nofi->insert(['user_id' => $user_id, 'follow_id' => $user_id_followed, 'nofi_type' => 1, 'created_at' => date('Y-m-d')]);
			}
			$response['status'] = 1;
		} else {
			$delete = $this->M_follow_user->delete($user_id, $user_id_followed);
			if ($checkNofi > 0) {
				$delete_nofi 	=  $this->M_nofi->delete($user_id, $user_id_followed);
			}
			$response['status'] = 2;
		}
		echo json_encode($response);
	}
}
?>