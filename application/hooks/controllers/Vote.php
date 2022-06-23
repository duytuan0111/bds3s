<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Vote extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_vote');
	}

	public function index() {
		$star_vote 		= $_POST['star_vote'];
		$user_id 		= $_POST['user_id'];
		$new_id 		= $_POST['new_id'];
		$check_vote 	= $this->M_vote->checkVote($user_id, $new_id);
		$response 		= ['status' => 0, 'msg' => ''];
		if ($check_vote > 0) {
			$update 	= $this->M_vote->update(['star_number' => $star_vote], $new_id, $user_id);
			if ($update) {
				$response['status'] = 1;
			}
		} else {
			$data 		= [
				'user_id' 		=> $user_id,
				'new_id'		=> $new_id,
				'star_number'	=> $star_vote
			];
			$insert 	= $this->M_vote->insert($data);
			if ($insert > 0) {
				$response['status'] = 1;
			}
		}
		echo json_encode($response);

	}
	public function getListVote() {
		$new_id 		= $_POST['new_id'];
		$user_id 		= $_POST['user_id'];
		$total_record 	= $this->M_vote->getListvote($new_id);
		$response 		= ['row' => $total_record, 'list' => '', 'user_vote' => ''];
		$check_use_vote = $this->M_vote->getUserVote($user_id, $new_id);
		if ($total_record > 0) {
			$list_vote	= $this->M_vote->listVote($new_id);
			$response['list'] = $list_vote;
		}
		if ($check_use_vote['star_number'] !== null) {
			$response['user_vote'] = $check_use_vote['star_number'];
		}
		echo json_encode($response);
	}
}
?>