<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class News extends CI_Controller
{
	protected $_data;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_province');
		$this->load->model('M_account');
		$this->load->model('M_news');
		$this->load->model('M_point');
		$this->load->model('M_saved_new');
		$this->load->model('M_liked_new');
		$this->load->model('M_count_view');
		$this->load->model('M_vote');
		$this->load->model('M_comment');
		$this->load->model('M_notification');
		$this->load->model('M_follow_user');
		$this->load->helper('images_helper');
		$this->load->helper('captcha');
		$this->load->helper('cookie');
		$this->load->library('session');
		$this->load->library('pagination');

	}
	public function index() {
		$this->_data['page_title'] 	= 'Đăng tin';
		$this->_data['list_city']	= $this->M_province->listProvince();
		$user_id 	 				= $_COOKIE['user_id'];
		if ($this->input->post('new_type')) {
			$data_insert = [
				'new_type' 				=> $this->input->post('new_type'),
				'new_title'				=> $this->input->post('new_title'),
				'alias'					=> url_slug($this->input->post('new_title')),
				'cit_id'				=> $this->input->post('cit_id'),
				'district_id'			=> $this->input->post('district_id'),
				'ward_id'				=> $this->input->post('ward_id'),
				'street_id'				=> $this->input->post('street_id'),
				'address'				=> $this->input->post('address'),
				'room_acreage'			=> $this->input->post('room_acreage'),
				'deposit'				=> $this->input->post('deposit'),
				'bathroom_num'			=> $this->input->post('bathroom_num'),
				'bedroom_num'			=> $this->input->post('bedroom_num'),
				'number_of_people'		=> $this->input->post('number_of_people'),
				'date_expire'			=> $this->input->post('date_expire'),
				'room_rates'			=> $this->input->post('room_rates'),
				'room_rates_per'		=> $this->input->post('room_rates_per'),
				'electricity_price'		=> $this->input->post('electricity_price'),
				'water_price'			=> $this->input->post('water_price'),
				'water_price_per'		=> $this->input->post('water_price_per'),
				'wifi_price'			=> $this->input->post('wifi_price'),
				'wifi_price_per'		=> $this->input->post('wifi_price_per'),
				'desciption'			=> $this->input->post('desciption'),
				'utilities'				=> $this->input->post('list_utilities'),
				'another_utilities'		=> $this->input->post('another_utilities'),
				'user_id'				=> $user_id,
				'created_at'			=> date('Y-m-d'),
				'new_status'			=> 1,
			];
			$response 		= ['status' => 0, 'msg' => ''];
			$check_alias 	= $this->M_news->checkAlias($user_id,$data_insert['alias']);
			if ($check_alias > 0) {
				$response['status'] = 2;
				$response['msg'] 	= 'Bạn đã đăng tin cho thuê phòng với tiêu đề này, vui lòng chọn tiêu đề khác!';
			} else {
				$check_new_add  = $this->M_news->checkNewAddress($user_id,$data_insert['street_id']);
				if ($check_new_add > 0) {
					$getNewAddress 		= $this->M_news->getNewAddress($user_id,$data_insert['street_id']);
					$response['status'] = 3;
					$response['msg'] 	= 'Bạn đã đăng tin cho thuê phòng tại đường/phố này, vui lòng chọn địa điểm khác hoặc cập nhật tin đã đăng';
					$response['link']	= base_url().$getNewAddress['alias'].'-n'.$getNewAddress['id'].'.html';
				} else {
					$list_name 		= []; 	
					$count_files 	= count($_FILES['list_images']['name']);
					if(!is_dir('upload/new_images/'.date("Y",time()).'/'.date("m",time()).'/'.date("d",time())))
					{
						mkdir('upload/new_images/'.date("Y",time())."/".date("m",time())."/".date("d",time()), 0755, TRUE);
					}
					for ($i=0; $i < $count_files; $i++) { 
						$file_image	= $_FILES['list_images']['name'][$i];
						$filename 	= $_FILES['list_images']['name'][$i];
						$filedata 	= $_FILES['list_images']['tmp_name'][$i];
						$temp		= explode('.',$filename);
						$imageThumb = new Image($filedata);    
						$thumb_path = "new_images".date("YmdHis",time()).rand(10000,99999);
						$imageThumb->save($thumb_path, 'upload/new_images/'.date("Y",time())."/".date("m",time())."/".date("d",time()), $temp[1]);
						$imageThumb->resize(300,300,'crop');	
						$imguser	= $thumb_path.".".$temp[1];
						array_push($list_name, $imguser);
					}
					$data_insert['new_images'] = implode(',', $list_name);
					$insert = $this->M_news->insert($data_insert);
					// Gửi thông báo
					$list_follow = $this->M_follow_user->listFollow($user_id);
					if (count($list_follow) > 0) {
						foreach ($list_follow as $key => $value) {
							$insert_nofi = $this->M_notification->insert(['follow_id' => $value['user_id_followed'], 'user_id' => $user_id, 'nofi_type' => 2, 'new_id' => $insert, 'created_at' => date('Y-m-d')]);	
						}
					}
					//
					if ($insert > 0) {
						$response['status'] = 1;
						$response['msg'] 	= 'Đăng tin thành công';
					}
				}
			}
			echo json_encode($response);
		} else {
			$this->load->view('site/home/post_new', $this->_data);
		}
	}
	public function updateImage() {
		$new_id 		= $_POST['new_id'];
		$info_new 		= $this->M_news->getInfoBy($new_id);
		$date_created	= $info_new['created_at'];
		$arr_date 		= explode('-',$date_created);
		$new_images 	= $info_new['new_images'];
		$arr_images 	= explode(',',$new_images);
		$count_img_base = count($arr_images);
		$response 		= ['status' => 0, 'msg' => ''];
		if (isset($_FILES['list_file']['name']) && $_FILES['list_file']['name'] !== '') {
			$count_files 	= count($_FILES['list_file']['name']);
			for ($i=0; $i < $count_files; $i++) { 
				$file_image	= $_FILES['list_file']['name'][$i];
				$filename 	= $_FILES['list_file']['name'][$i];
				$filedata 	= $_FILES['list_file']['tmp_name'][$i];
				$temp		= explode('.',$filename);
				$imageThumb = new Image($filedata);    
				$thumb_path = "new_images".date("YmdHis",time()).rand(10000,99999);
				$imageThumb->save($thumb_path, 'upload/new_images/'.$arr_date[0]."/".$arr_date[1]."/".$arr_date[2], $temp[1]);
				$imageThumb->resize(300,300,'crop');	
				$imguser	= $thumb_path.".".$temp[1];
				array_push($arr_images, $imguser);
			}
			if (count($arr_images) > 6) {
				$splice = count($arr_images) - 6;
				array_splice($arr_images, 0,$splice);
			}
			$data_update = [
				'new_images'  	=> implode(',', $arr_images),
				'updated_at' 	=> date('Y-m-d')
			];
			$update 	= $this->M_news->update($data_update, $new_id);
			if ($update) {
				$response['status'] = 1;
				$response['msg'] 	= 'Cập nhật thành công';
			}
		}
		echo json_encode($response); 
		
	}
	public function postedNew() {
		$this->_data['page_title'] 	= 'Quản lý tin đã đăng';
		$this->load->view('site/home/postedNews', $this->_data);
	}
	public function loadRecord($rowno=0){

		$rowperpage = 5;
		if($rowno 	!= 0){
			$rowno 	= ($rowno-1) * $rowperpage;
		}
		$user_id 	= $_COOKIE['user_id'];
		$allcount 	= $this->M_news->countAll($user_id);

		$users_record = $this->M_news->getListOrder($rowno,$rowperpage,$user_id);

		$config['base_url'] 		= base_url().'tin-da-dang.html';
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
	public function loadRecordBy($rowno=0){

		$rowperpage					= 6;
		if ($rowno != 0) {
			$rowno 					= ($rowno-1) * $rowperpage;
		}
		$user_id 					= $_POST['user_id'];
		$info_user 					= $this->M_account->getInfoUser($user_id);
		$new_type 					= $_POST['new_type'];
		$allcount 					= $this->M_news->countAllByNewType($user_id,$new_type);

		$users_record 				= $this->M_news->getListOrderBy($rowno,$rowperpage,$user_id,$new_type);

		$config['base_url'] 		= base_url().url_slug($info_user['name'].'-u'.$user_id.'.html');
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] 		= $allcount;
		$config['per_page'] 		= $rowperpage;
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
	public function newDetail($slug, $id) {
		$this->_data['page_title'] 			= 'Chi tiết tin đăng';
		$this->_data['robots']				= 'noindex,nofollow';
		$this->_data['page_ct'] 			= 1;
		$this->_data['page_ds'] 			= 1;
		$this->_data['list_city']			= $this->M_province->listProvince();
		$user_ip 							= getUserIpAddr(); // count view
		$new_id 							= $id;
		$check_ip 							= $this->M_count_view->checkIpUser($user_ip, $new_id);
		if ($check_ip == 0) {
			$insert_view 					= $this->M_count_view->add(['user_ip' => $user_ip, 'new_id' => $new_id]);
		}
		$all_view  							= $this->M_count_view->countView($new_id);
		$this->_data['all_view'] 			= $all_view;
		$get_star 							= $this->M_vote->getAvgStar($id); // count star
		$star_number 						= $get_star['star_number'];
		$total_vote 						= $this->M_vote->getListvote($id);
		$this->_data['star_number'] 		= $star_number;
		$this->_data['total_vote'] 			= $total_vote;
		$new_detail 						=  $this->M_news->getInfoBy($id);
		$this->_data['new_detail'] 			= $new_detail;
		$this->_data['canonical'] 			= base_url().$new_detail['alias'].'-n'.$id.'.html';
		$cit_name 							= Getcitybyindex2($new_detail['cit_id']);
		$districtBy 						= $this->M_province->getDistrictById($new_detail['district_id']);
		$streetBy							= $this->M_province->getStreetBy($new_detail['street_id']);
		$district_name 						= $districtBy['cit_name'];
		$street_name 						= $streetBy['street_name'];
		$this->_data['news_street']			= $this->M_province->getNewsByDistrict($new_detail['district_id']);
		$this->_data['address_map']			= $street_name.', '.$district_name.', '.$cit_name;
		$list_new_involve 					= $this->M_news->getNewInvolve($new_detail['new_type'], $new_id);
		$this->_data['list_new_involve']	= $list_new_involve;
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

			'colors'        => array(
				'background' => array(171, 194, 177),
                'border' => array(10, 51, 11),
                'text' => array(0, 0, 0),
                'grid' => array(185, 234, 237)
			)
		);
		$captcha 		= create_captcha($config_capcha);
		$this->session->unset_userdata('captchaCode');
		$this->session->set_userdata('captchaCode', $captcha['word']);
		$this->_data['captchaImg'] = $captcha['image'];
		$listComment = $this->M_comment->getListBy($new_id);
		$this->_data['listComment'] = $listComment;
		// facebook, goole
		$this->_data['facebook_login_url'] 	= $this->facebookLogin(3);
		$this->_data['google_login_url']	= $this->googleLogin();
		$this->load->view('site/home/newDetail', $this->_data);
	}
	// refresh capcha
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
		echo $captcha['image'];
	}
	public function editNew($id) {
		$this->_data['page_title'] 	= 'Cập nhật tin đã đăng';
		$this->_data['list_city']	= $this->M_province->listProvince();
		$info_job 					= $this->M_news->getInfoBy($id);
		$this->_data['info_job']	= $info_job;
		$user_post 					= $info_job['user_id'];
		if (isset($_COOKIE['user_id']) && $_COOKIE['user_id'] !== '' && $user_post == $_COOKIE['user_id']) {
			$user_id = $_COOKIE['user_id'];
			if ($this->input->post('new_type')) {
				$data_update = [
					'new_type' 				=> $this->input->post('new_type'),
					'new_title'				=> $this->input->post('new_title'),
					'cit_id'				=> $this->input->post('cit_id'),
					'district_id'			=> $this->input->post('district_id'),
					'ward_id'				=> $this->input->post('ward_id'),
					'street_id'				=> $this->input->post('street_id'),
					'address'				=> $this->input->post('address'),
					'room_acreage'			=> $this->input->post('room_acreage'),
					'deposit'				=> $this->input->post('deposit'),
					'bathroom_num'			=> $this->input->post('bathroom_num'),
					'bedroom_num'			=> $this->input->post('bedroom_num'),
					'number_of_people'		=> $this->input->post('number_of_people'),
					'date_expire'			=> $this->input->post('date_expire'),
					'room_rates'			=> $this->input->post('room_rates'),
					'room_rates_per'		=> $this->input->post('room_rates_per'),
					'electricity_price'		=> $this->input->post('electricity_price'),
					'water_price'			=> $this->input->post('water_price'),
					'water_price_per'		=> $this->input->post('water_price_per'),
					'wifi_price'			=> $this->input->post('wifi_price'),
					'wifi_price_per'		=> $this->input->post('wifi_price_per'),
					'desciption'			=> $this->input->post('desciption'),
					'utilities'				=> $this->input->post('list_utilities'),
					'another_utilities' 	=> $this->input->post('another_utilities'),
					'updated_at'			=> date('Y-m-d')
				];
				$response 					= ['status' => 0, 'msg' => ''];
				$check_new_add  = $this->M_news->checkNewAddressId($user_id,$id,$data_update['street_id']);
				if ($check_new_add > 0) {
					$getNewAddress 		= $this->M_news->getNewAddressId($user_id,$id,$data_update['street_id']);
					$response['status'] = 2;
					$response['msg'] 	= 'Bạn đã đăng tin cho thuê phòng tại đường/phố này, vui lòng chọn địa điểm khác hoặc cập nhật tin đã đăng';
					$response['link']	= base_url().$getNewAddress['alias'].'-n'.$getNewAddress['id'].'.html';
				} else {
					$update  					= $this->M_news->update($data_update, $id);
					if ($update) {
						$response 				= ['status' => 1, 'msg' => 'Cập nhật thành công'];
					}
				}
				echo json_encode($response);
			} else {
				$this->load->view('site/home/editNew', $this->_data);
			}
		} else {
			redirect('/');
		}
	}
	public function refreshNew() {
		$id = $_POST['id'];
		$update = $this->M_news->update(['updated_at' => date('Y-m-d')], $id);
		if ($update) {
			echo 1;
		} else {
			echo 0;
		}
	}

	public function listSearchNewByCity($slug,$id) {
		$infoCity 						= $this->M_province->getCity2By('cit_id',$id);
		if ($id > 63) {
			$this->_data['canonical'] 	= base_url().'tim-phong-tro-tai-'.url_slug($infoCity['cit_name']).'-'.url_slug(Getcitybyindex2($infoCity['cit_parent'])).'-d'.$id.'.html';
			$this->_data['cit_id'] 		= $infoCity['cit_parent'];
			$this->_data['district_id'] = $id;
			$this->_data['page_title'] 	= 'Tìm phòng trọ tại '.$infoCity['cit_name'].', '.Getcitybyindex2($infoCity['cit_parent']);
			$this->_data['breadcrumb'] 	= 'phòng trọ tại '.$infoCity['cit_name'].', '.Getcitybyindex2($infoCity['cit_parent']);

		} else {
			$this->_data['cit_id'] 		= $id;
			$this->_data['canonical'] 	= base_url().'tim-phong-tro-tai-'.url_slug($infoCity['cit_name']).'-c'.$id.'.html';
			$this->_data['breadcrumb'] 	= 'phòng trọ tại '.$infoCity['cit_name'];
			$this->_data['page_title'] 	= 'Tìm phòng trọ tại '.$infoCity['cit_name'];
		}
		$this->_data['robots']			= 'noindex,nofollow';
		$this->_data['list_city']		= $this->M_province->listProvince();
		$this->_data['page_ct'] 		= 2;
		$this->_data['page_ds'] 		= 1;
		$this->load->view('site/home/allNewBy', $this->_data);	
	}
	public function listSearchNewByStreet($slug,$id) {
		$infoStreet 					= $this->M_province->getInfoCity4By($id);
		$this->_data['page_title'] 		= 'Tìm phòng trọ tại '.$infoStreet['street_name'].', '.$infoStreet['cit_name'].', '.Getcitybyindex2($infoStreet['cit_parent']);
		$this->_data['robots']			= 'noindex,nofollow';
		$this->_data['list_city']		= $this->M_province->listProvince();
		$this->_data['page_ct'] 		= 2;
		$this->_data['page_ds'] 		= 1;
		$this->_data['breadcrumb'] 		= 'phòng trọ tại '.$infoStreet['street_name'].', '.$infoStreet['cit_name'].', '.Getcitybyindex2($infoStreet['cit_parent']);
		$this->_data['canonical']		= base_url().'tim-phong-tro-tai-'.url_slug($infoStreet['street_name']).'-'.url_slug($infoStreet['cit_name']).'-'.url_slug(Getcitybyindex2($infoStreet['cit_parent'])).'.html';
		$this->_data['cit_id']			= $infoStreet['cit_parent'];
		$this->_data['district_id']		= $infoStreet['cit_id'];
		$this->_data['street_id'] 		= $id;
		$this->load->view('site/home/allNewBy', $this->_data);	
	}
	public function listSearchNewByNewType($slug,$id) {
		if ($id > 5) {
			redirect('/');
		} else {
			$this->_data['page_title'] 	= 'Tìm '.getNewTypeNew($id);
			$this->_data['robots']		= 'noindex,nofollow';
			$this->_data['list_city']	= $this->M_province->listProvince();
			$this->_data['page_ct'] 	= 2;
			$this->_data['page_ds'] 	= 1;
			$this->_data['canonical'] 	= base_url().'tim-'.url_slug(getNewTypeNew($id)).'-t'.$id.'.html';
			$this->_data['breadcrumb'] 	= getNewTypeNew($id);
			$this->_data['new_type'] 	= $id;
			$this->load->view('site/home/allNewBy', $this->_data);
		}
	}
	public function listSearchNewByNewTypeCity($new_type,$cit_id) {
		if ($new_type > 5) {
			redirect('/');
		} else {
			$infoCity 						= $this->M_province->getCity2By('cit_id',$cit_id);
			if ($cit_id > 63) {
				$this->_data['canonical'] 	= base_url().'tim-'.url_slug(getNewTypeNew($new_type)).'-tai-'.url_slug($infoCity['cit_name']).'-'.url_slug(Getcitybyindex2($infoCity['cit_parent'])).'-t'.$new_type.'d'.$cit_id.'.html';
				$this->_data['cit_id'] 		= $infoCity['cit_parent'];
				$this->_data['district_id'] = $cit_id;
				$this->_data['page_title'] 	= 'Tìm '.getNewTypeNew($new_type).' tại '.$infoCity['cit_name'].', '.Getcitybyindex2($infoCity['cit_parent']);
				$this->_data['breadcrumb'] 	= getNewTypeNew($new_type).' tại '.$infoCity['cit_name'].', '.Getcitybyindex2($infoCity['cit_parent']);

			} else {
				$this->_data['cit_id'] 		= $cit_id;
				$this->_data['canonical'] 	= base_url().'tim-'.url_slug(getNewTypeNew($new_type)).'-tai-'.url_slug($infoCity['cit_name']).'-t'.$new_type.'c'.$cit_id.'.html';
				$this->_data['breadcrumb'] 	= getNewTypeNew($new_type).' tại '.$infoCity['cit_name'];
				$this->_data['page_title'] 	= 'Tìm '.getNewTypeNew($new_type).' tại '.$infoCity['cit_name'];
			}
			$this->_data['robots']		= 'noindex,nofollow';
			$this->_data['list_city']	= $this->M_province->listProvince();
			$this->_data['page_ct'] 	= 2;
			$this->_data['page_ds'] 	= 1;
			$this->_data['new_type'] 	= $new_type;
			$this->load->view('site/home/allNewBy', $this->_data);
		}
	}
	public function listSearchNewByNewTypeStreet($new_type,$street_id) {
		if ($new_type > 5) {
			redirect('/');
		} else {
			$infoStreet 				= $this->M_province->getInfoCity4By($street_id);
			$this->_data['page_title'] 	= base_url().'tim-'.url_slug(getNewTypeNew($new_type)).'-tai-'.$infoStreet['street_name'].', '.$infoStreet['cit_name'].', '.Getcitybyindex2($infoStreet['cit_parent']);
			$this->_data['breadcrumb'] 	= 'phòng trọ tại '.$infoStreet['street_name'].', '.$infoStreet['cit_name'].', '.Getcitybyindex2($infoStreet['cit_parent']);
			$this->_data['canonical']	= base_url().'tim-phong-tro-tai-'.url_slug($infoStreet['street_name']).'-'.url_slug($infoStreet['cit_name']).'-'.url_slug(Getcitybyindex2($infoStreet['cit_parent'])).'.html';
			$this->_data['robots']		= 'noindex,nofollow';
			$this->_data['list_city']	= $this->M_province->listProvince();
			$this->_data['page_ct'] 	= 2;
			$this->_data['page_ds'] 	= 1;
			$this->_data['new_type'] 	= $new_type;
			$this->_data['cit_id']		= $infoStreet['cit_parent'];
			$this->_data['district_id']	= $infoStreet['cit_id'];
			$this->_data['street_id'] 	= $street_id;
			$this->load->view('site/home/allNewBy', $this->_data);
		}
	}
	public function allNews() {
		$kg = $dt = '';
		$this->_data['breadcrumb'] 	= 'tất cả phòng trọ';
		$this->_data['page_title'] 	= 'Tất cả phòng trọ';
		$this->_data['canonical'] 	= base_url().'tat-ca-phong-tro.html';
		$this->_data['robots']		= 'noindex,nofollow';
		$this->_data['list_city']	= $this->M_province->listProvince();
		$this->_data['page_ct'] 	= 2;
		$this->_data['page_ds'] 	= 1;
		$tk = $tp = '';
		if (isset($_GET['tk'])) {
			$tk 					= str_replace('%20', ' ', $_GET['tk']);
		}
		if (isset($_GET['tp'])) {
			$tp 					= $_GET['tp'];
		}
		$this->_data['tk'] 			= $tk;
		$this->_data['tp'] 			= $tp;
		$this->load->view('site/home/allNewBy', $this->_data);
	}
	public function paginationAllNewsBy($rowno=0) {
		$sort 						= $_POST['sort'];
		$cit_id 					= $district_id = $new_type = $street_id = $price_range = $acreage = $tk = $tp = 0;
		$cit_id 					= $_POST['cit_id']; 
		$district_id 				= $_POST['district_id']; 
		$new_type 					= $_POST['new_type'];
		$street_id 					= $_POST['street_id'];
		$price_range 				= $_POST['price_range'];
		$acreage 	 				= $_POST['acreage'];
		$tk 						= $_POST['tk'];
		$tp 						= $_POST['tp'];
		$rowperpage					= 10;
		if ($rowno != 0) {
			$rowno 					= ($rowno-1) * $rowperpage;
		}
		$allcount 					= $this->M_news->countAllByNewTypeByFilter($new_type,$cit_id,$district_id,$street_id,$price_range,$acreage,$tk,$tp);
		$users_record 				= $this->M_news->getAllByNewTypeByFilter($rowno,$rowperpage,$sort,$new_type,$cit_id,$district_id,$street_id,$price_range,$acreage,$tk,$tp);

		$config['base_url'] 		= base_url().'tat-ca-phong-tro.html';
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] 		= $allcount;
		$config['per_page'] 		= $rowperpage;
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
	public function newsMap() {
		$this->_data['page_title'] 	= 'Nhà trọ quanh đây';
		$this->_data['robots']		= 'noindex,nofollow';
		$this->_data['canonical']	= base_url().'phong-tro-quanh-day.html';
		$this->_data['list_new']	= $this->M_news->getListMap();
		$this->_data['list_city']	= $this->M_province->listProvince();
		$this->load->view('site/home/newsMap', $this->_data);
	}
	public function makerMap() {
		// Tren 2 vai ta doi vang nhat nguyet
		$dom 			= new DOMDocument('1.0', 'UTF-8');
		$node 			= $dom->createElement("markers");
		$parnode 		= $dom->appendChild($node);
		$lat 			= $_GET['lat'];
		$long 			= $_GET['long'];
		$new_type 		= $_GET['new_type'];
		$cit_id 		= $_GET['cit_id'];
		$district_id 	= $_GET['district_id'];
		$street_id 		= $_GET['street_id'];
		$price_range 	= $_GET['kg'];
		$acreage 		= $_GET['dt'];
		$gettime 		= time();
		$list_new_by 	= $this->M_news->getAllByNewTypeByFilterMap($new_type,$cit_id,$district_id,$street_id,$price_range,$acreage);
		header ("Content-Type: application/xml; charset=utf-8");
		if (count($list_new_by) > 0) {
			foreach ($list_new_by as $key => $value) {
				$link 		= base_url().$value['alias'].'-n'.$value['id'].'.html'; 
				$images 	= explode(',',$value['new_images']);
				$arr_date 	= explode('-',$value['created_at']);
				$img 		= base_url().'upload/new_images/'.$arr_date[0].'/'.$arr_date[1].'/'.$arr_date[2].'/'.$images[0];
				$viewed  	= $this->M_count_view->countView($value['id']);
				$node 		= $dom->createElement("marker");
				$newnode 	= $parnode->appendChild($node);
				$newnode->setAttribute("new_title",parseToXML($value['new_title']));
				$newnode->setAttribute("room_acreage",parseToXML($value['room_acreage']));
				$newnode->setAttribute("room_rates",parseToXML($value['room_rates']));
				$newnode->setAttribute("address",parseToXML($value['address']));
				$newnode->setAttribute("link",parseToXML($link));
				$newnode->setAttribute("img",parseToXML($img));
				$newnode->setAttribute("viewed",parseToXML($viewed));
			}
		}
		echo $dom->saveXML();
	}
	// Facebook login.
	public function facebookLogin($login_type) {
		$data = [];
		$data_fb = [];
		require_once APPPATH.'libraries/vendor/autoload.php';
		$facebook = new \Facebook\Facebook([
			'app_id'      => '287534049566168',
			'app_secret'     => '884faaa05acbef1d491649735026a488',
			'default_graph_version'  => 'v2.3'
		]);
		$facebook_helper = $facebook->getRedirectLoginHelper();
		// 
		if (isset($_GET['state'])) {
			$facebook_helper->getPersistentDataHandler()->set('state', $_GET['state']);
		}
		if (isset($_GET['code'])) {
			try {
				$access_token 				= $facebook_helper->getAccessToken('');
				$graph_response 			= $facebook->get("/me?fields=name,email", $access_token);
				$facebook_user_info 		= $graph_response->getGraphUser();
				if(!empty($facebook_user_info['id']))
				{
					$data_fb['user_image'] 	= $image_url  ='http://graph.facebook.com/'.$facebook_user_info['id'].'/picture';
				}
				if(!empty($facebook_user_info['name']))
				{
					$data_fb['name'] 		= $facebook_user_info['name'];
				}
				if(!empty($facebook_user_info['email']))
				{
					$data_fb['email'] 		= $facebook_user_info['email'];
				}
				$check = $this->M_account->checkAuth($facebook_user_info['id'],1);
				if ($check == 0) {
					// Xử lý lấy ảnh facebook.
					if(!is_dir('upload/avt_user/'.date("Y",time()).'/'.date("m",time()).'/'.date("d",time())))
					{
						mkdir('upload/avt_user/'.date("Y",time())."/".date("m",time())."/".date("d",time()), 0777, TRUE);
					}
					$img_name   = "new_images".date("YmdHis",time()).rand(10000,99999).".jpg";
					$img 		= 'upload/avt_user/'.date("Y",time())."/".date("m",time())."/".date("d",time()).'/'.$img_name;
					file_put_contents($img, file_get_contents($image_url));
					$data_insert = [
						'name' 				=> $facebook_user_info['name'],
						'email'	 			=> $facebook_user_info['email'],
						'oauth_uid'			=> $facebook_user_info['id'],
						'oauth_provider' 	=> 1,
						'created_at'		=> date('Y-m-d'),
						'avatar'			=> $img_name
					];
					$insert_user 	= $this->M_account->insert($data_insert);
					$user_id 		= $insert_user;
				} else {
					$info_user_auth = $this->M_account->getAuth($facebook_user_info['id'],1);
					$user_id = $info_user_auth['id'];
				}
				// set cookie
				if (isset($_COOKIE['user_id'])) {
					delete_cookie('user_id');
				}
				set_cookie('user_id', $user_id,time() + 7*6000);
				if ($login_type == 3) {
					echo '<script> window.location.href = history.back(); </script>';
				} else {
					redirect('/');
				}
				//
			} catch (Exception $e) {
				redirect('/');
			}
			if (isset($_SESSION['userInfo']) && $_SESSION['userInfo'] !== '') {
				redirect('/');
			}
			$this->session->set_userdata('userInfo',$data_fb);
		} else {
			// Get login url
   			$facebook_permissions 		= ['email']; // Optional permissions
   			$facebook_login_url 		= $facebook_helper->getLoginUrl('https://nhatro.timviec365.com/news/facebookLogin/3', $facebook_permissions);
   			$data['facebook_login_url'] = $facebook_login_url;
   			return $facebook_login_url;
   		}
   	}
	// google login
   	public function googleLogin() {
   		include_once APPPATH."libraries/google/vendor/autoload.php";
   		$google_client = new Google_Client();

  		$google_client->setClientId('907430839075-1vultr5lg3avh8ucf8b66d0u0t82gf2j.apps.googleusercontent.com'); //Define your ClientID

  		$google_client->setClientSecret('msLFRlZf4b7mnk7Z3y7bdG8h'); //Define your Client Secret Key

  		$google_client->setRedirectUri('https://nhatro.timviec365.com/news/googleLogin'); //Define your Redirect Uri

  		$google_client->addScope('email');

  		$google_client->addScope('profile');
  		if(isset($_GET["code"]))
  		{
  			$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

  			if(!isset($token["error"]))
  			{
  				$google_client->setAccessToken($token['access_token']);

  				$this->session->set_userdata('access_token', $token['access_token']);

  				$google_service  	= new Google_Service_Oauth2($google_client);

  				$data 				= $google_service->userinfo->get();
  				$current_datetime 	= date('Y-m-d');
  				$check_auth 		= $this->M_account->checkAuth($data['id'],2);
  				if($check_auth == 0) {
				// Xử lý lấy ảnh facebook.
  					if(!is_dir('upload/avt_user/'.date("Y",time()).'/'.date("m",time()).'/'.date("d",time())))
  					{
  						mkdir('upload/avt_user/'.date("Y",time())."/".date("m",time())."/".date("d",time()), 0777, TRUE);
  					}
  					$img_name   = "new_images".date("YmdHis",time()).rand(10000,99999).".jpg";
  					$img 		= 'upload/avt_user/'.date("Y",time())."/".date("m",time())."/".date("d",time()).'/'.$img_name;
  					file_put_contents($img, file_get_contents($data['picture']));
	     		//insert
  					$user_data = array(
  						'name' 				=> $data['name'],
  						'email'  			=> $data['email'],
  						'oauth_uid' 		=> $data['id'],
  						'avatar'			=> $img_name,
  						'created_at'		=> date('Y-m-d'),
  						'oauth_provider' 	=> 2,
  					);
  					$insert_user 	= $this->M_account->insert($user_data);
  					$user_id 		= $insert_user;
  				} else {
  					$info_user_auth = $this->M_account->getAuth($data['id'],2);
  					$user_id = $info_user_auth['id'];
  				}
  				// set cookie
  				if (isset($_COOKIE['user_id'])) {
  					delete_cookie('user_id');
  				}
  				set_cookie('user_id', $user_id,time() + 7*6000);
  				echo '<script> window.location.href = history.go(-2); </script>';
  			}
  		}
  		$login_button = '';
  		if(!$this->session->userdata('access_token'))
  		{
  			$data['login_button'] = $google_client->createAuthUrl();
  			return $data['login_button'];
  		} 
  	}
}
?>