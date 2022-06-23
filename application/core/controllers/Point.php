<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**viewNew
*/
class Point extends CI_Controller
{
	protected $_data;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_point');
		$this->load->model('M_account');
		$this->load->model('M_news');
	}
	public function checkPoint() {
		$user_id 	= $_POST['user_id'];
		$getPoint 	= $this->M_point->getPoint($user_id);
		echo json_encode($getPoint);
	}
	public function viewNew() {
		$user_id 		= $_POST['user_id'];
		$info_user_post = $this->M_account->getInfoPhone($user_post );
		$new_id 		= $_POST['new_id'];
		$info_new 		= $this->M_news->getInfoUserId($new_id);
		$user_post 		= $info_new['user_id'];
		$getPoint 		= $this->M_point->getPoint($user_id);
		$point 			= $getPoint['point_free'];
		$response 		= ['status' => 0, 'msg' => ''];
		if ($point >= 1) {
			$check_point_log 	= $this->M_point->checkPointLog($user_id, $new_id);
			if ($check_point_log == 0) {
				$update 		= $this->M_point->add(['user_id' => $user_id, 'new_id' => $new_id, 'viewed_date' => date('Y-m-d')], 'point_log');
				$update_point 	= $this->M_point->update($user_id,['point_free' => ($point-1), 'updated_at' => date('Y-m-d')]);
				if ($update) {
					$response 	= ['status' => 1, 'info_user_post' => $info_user_post, 'msg' => 'Xem thông tin thành công'];
				}
			}
		}
		echo json_encode($response);
	}
}
?>