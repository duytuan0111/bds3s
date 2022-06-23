<?php 
/**
* 
*/
class Comment extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_comment');
		$this->load->helper('captcha');
	}

	public function index() {
		$response = ['status' => 0, 'data' => '', 'img' => ''];
		if ($this->input->post('captcha')) {
			$captcha 			= $this->input->post('captcha');
			$content_comment	= $this->input->post('content_comment');
			$name_comment 		= $this->input->post('name_comment');
			$new_id 			= $this->input->post('new_id');
			$sessCaptcha 		= $this->session->userdata('captchaCode');
			if ($captcha == $sessCaptcha) {
				$data = [
					'user_name' 	=> $name_comment,
					'content'		=> $content_comment,
					'new_id'		=> $new_id,
					'created_at'	=> date('H:i:s A d-m-Y')
				];
				$insert = $this->M_comment->add($data);
				if ($insert > 0) {
					$data['id'] 		= $insert;
					$response['status'] = 1;
					$response['data'] 	= $data;
					$response['img']  	= $this->refreshCaptcha();
				}
			} 
		}
		echo json_encode($response);
	}
	public function refreshCaptcha(){
        // Captcha configuration
		$config_capcha = array(
			'img_path'      => './upload/captcha_images/',
			'img_url'       => './upload/captcha_images/',
			'font_path'     => './system/fonts/texb.ttf',
			'img_width'     => '170',
			'img_height'    => 40,
			'expiration'    => 7200,
			'word_length'   => 6,
			'font_size'     => 16,
			'img_id'        => 'Imageid',
			'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

        // White background and border, black text and red grid
			'colors'        => array(
				'background' => array(171, 194, 177),
				'border' => array(10, 51, 11),
				'text' => array(0, 0, 0),
				'grid' => array(185, 234, 237)
			)
		);
		$captcha = create_captcha($config_capcha);
        // Unset previous captcha and set new captcha word
		$this->session->unset_userdata('captchaCode');
		$this->session->set_userdata('captchaCode',$captcha['word']);
        // Display captcha image
		return $captcha['image'];
	}
	public function repComment() {
		$response = ['status' => 0, 'data' => ''];
		if ($this->input->post('captcha')) {
			$captcha 			= $this->input->post('captcha');
			$content_comment	= $this->input->post('content_comment');
			$name_comment 		= $this->input->post('name_comment');
			$comment_id 		= $this->input->post('comment_id');
			$sessCaptcha 		= $this->session->userdata('captchaCode');
			if ($captcha == $sessCaptcha) {
				$data = [
					'comment_id'	=> $comment_id,
					'user_name' 	=> $name_comment,
					'content'		=> $content_comment,
					'created_at'	=> date('H:i:s A d-m-Y')
				];
				$insert = $this->M_comment->addRep($data);
				if ($insert > 0) {
					$data['id'] = $insert;
					$response['status'] = 1;
					$response['data'] = $data;
				}
			} 
		}
		echo json_encode($response);
	}
	public function ajaxLoadMoreComment() {
		$new_id 		= $_POST['new_id'];
		$page 			= $_POST['page'];
		$limit  		= 5;
		$start 			= ($limit*$page) - $limit;
		$list_comment 	= $this->M_comment->getListLimitBy($limit, $start, $new_id);
		$response 		= ['status' => 0, 'data' => ''];
		if (count($list_comment ) > 0) {
		 	$response['status'] = 1;
		 	$response['data'] 	= $list_comment;
		 	$response['img']  	= $this->refreshCaptcha();
		}
		echo json_encode($response); 
	}
	public function getRepBy() {
		$comment_id = $_POST['comment_id'];
		$response 	= ['status' => 0, 'data' => ''];
		$list_rep 	= $this->M_comment->getRepBy($comment_id);
		if (count($list_rep) > 0) {
			$response['status'] = 1;
			$response['data']	= $list_rep;
		}
		echo json_encode($response);
	}
}
?>