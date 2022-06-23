<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Saved_news extends CI_Controller
{
	protected $_data;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_saved_new');
		$this->load->model('M_news');
		$this->load->model('M_account');
		$this->load->model('M_notification');
		$this->load->helper('images_helper');
		$this->load->library('pagination');
	}
	public function index() {
		$this->_data['page_title'] 	= 'Quản lý tin đã lưu';
		$this->_data['list_saved']	= $this->M_saved_new->getList();
		$this->load->view('site/home/savedNews', $this->_data);
	}
	public function loadRecord($rowno=0){

		$rowperpage 	= 5;
		if($rowno 		!= 0){
			$rowno 		= ($rowno-1) * $rowperpage;
		}
		$id 			= $_COOKIE['user_id'];
		$allcount 		= $this->M_saved_new->countAll($id);

		$users_record 	= $this->M_saved_new->getListOrder($rowno,$rowperpage,$id);

		$config['base_url'] 		= base_url().'tin-da-luu.html';
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] 		= $allcount;
		$config['per_page'] 		= $rowperpage;
		//
		$config['first_link'] 		= 'Đầu'; 
		$config['last_link'] 		= 'Cuối';
		$config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
		$config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close'] 	= '</span></li>';
		$config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] 	= '</span></li>';
		$config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close'] 	= '</span></li>';

   	 	// Initialize
		$this->pagination->initialize($config);

    	// Initialize $data Array
		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;

		echo json_encode($data);

	}
	public function getInfoBy() {
		$id 	 	= $_POST['job_id'];
		$info_new 	= $this->M_news->getInfoBy($id);
		echo json_encode($info_new);
	}
	public function delete() {
		$id 	= $_POST['id'];
		$delete = $this->M_saved_new->delete($id);
		if ($delete) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function save() {
		$id 		= $_POST['id'];
		$user_id 	= $_POST['user_id'];
		$response 	= ['status' => 0, 'msg' => ''];
		$check 		= $this->M_saved_new->checkSaved($id, $user_id);
		if ($check > 0) {
			$delete = $this->M_saved_new->deleteRecord($user_id, $id);
			if ($delete) {
				$response['status'] = 1;
				$response['msg'] = 'Xóa lưu tin thành công';
			}
		} else {
			$insert = $this->M_saved_new->insert(['job_id' => $id, 'user_id' => $user_id]);
			if ($insert > 0) {
				$response['status'] = 2;
				$response['msg'] = 'Lưu tin thành công';
			}
		}
		echo json_encode($response);
	}
	public function checkSaved() {
		$id 		= $_POST['id'];
		$user_id 	= $_POST['user_id'];
		$check 		= $this->M_saved_new->checkSaved($id, $user_id);
		if ($check > 0) {
			echo 1;
		} else {
			echo 0;
		}
	}
}
?>