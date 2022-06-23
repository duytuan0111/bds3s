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
		$this->load->model('M_account');
		$this->load->model('M_otp');
		$this->load->model('M_province');
		$this->load->model('M_point');
		$this->load->model('M_count_view_user');
		$this->load->model('M_news');
		$this->load->model('M_follow_user');
		$this->load->model('M_like_user');
		$this->load->model('M_liked_new');
		$this->load->model('M_notification');
		$this->load->helper('cookie');
		$this->load->helper('images_helper');
		$this->load->library('Globals');
	}

	public function index() {
		$this->_data['list_city'] 			= $this->M_province->listProvince();
		$this->_data['page_title'] 			= 'Đăng ký tài khoản';
		$this->_data['facebook_login_url'] 	= $this->facebookLogin(1);
		$this->_data['google_login_url']	= $this->googleLogin();
		$this->load->view('site/home/register', $this->_data);
	}
	
	public function ajaxRegister() {
		$email 						= $_POST['email'];
		$response 					= ['status' => 0, 'msg' => 'Đăng ký'];
		if ($email !== '') {
			$data = [
				'email' 		=> $email,
				'phone'			=> $_POST['phone'],
				'name'			=> $_POST['name'],
				'cit_id'		=> $_POST['city'],
				'district_id'	=> $_POST['district'],
				'password'		=> md5($_POST['password']),
				'created_at'	=> date('Y-m-d')
			];
			$insert_id = $this->M_account->insert($data);
			if ($insert_id > 0) {
				$info_user 	= [
					'user_id' 	=> $insert_id,
					'name'		=> $data['name'],
					'email'		=> $data['email'],
				];
				if (isset($_COOKIE['user_login'])) {
					delete_cookie('user_login');
				}
				set_cookie('user_id', $insert_id ,time() + 7*6000);
				$response 		= ['status' => 1, 'msg' => 'Đăng ký thành công'];
				// cộng điểm user
				// $insert_point 	= $this->M_point->add(['user_id' => $insert_id, 'point_free' => 5, 'reset_date' => date('Y-m-d')], 'point');
			} else {
				$response 		= ['status' => 0, 'msg' => 'Đăng ký không thành công'];
			}
		}
		echo json_encode($response);
	}

	public function login() {
		$this->_data['page_title'] 	= 'Đăng nhập';
		$array_response 			= ['status' => 0, 'msg' => ''];
		if (isset($_POST['email']) && isset($_POST['password'])) {
			$email 					= $_POST['email'];
			$password				= $_POST['password'];
			$check_login 			= $this->M_account->checkLogin($email, md5($password));
			if ($check_login > 0) {
				$info_user 			= $this->M_account->getInfoBy($email, md5($password));
				if (isset($_COOKIE['user_id'])) {
					delete_cookie('user_id');
				}
				set_cookie('user_id', $info_user['id'] ,time() + 7*6000);
				$array_response 	= ['status' => 1, 'msg' => 'Đăng nhập thành công'];
				/*Check Cộng điểm*/
				// $check_point 		= $this->M_point->checkPoint($info_user['id']);
				// if ($check_point > 0) {
				// 	$point_info 	= $this->M_point->getInfo($info_user['id']);
				// 	$reset_date 	= $point_info['reset_date'];
				// 	$user_reset_day = new DateTime(date('Y-m-d H:i:s', strtotime($reset_date)));
				// 	$time           = new DateTime(date('Y-m-d H:i:s'));
				// 	$diff 			= $user_reset_day->diff($time);
				// 	if ($diff->format('%d') >= 1) {
				// 		$add_point  = $this->M_point->update($info_user['id'],['point_free' => 5, 'reset_date' => date('Y-m-d')]);
				// 	}
				// } else {
				// 	$insert_point 	= $this->M_point->add(['user_id' => $info_user['id'], 'point_free' => 5, 'reset_date' => date('Y-m-d')], 'point');
				// }
				/**/
			}
			echo json_encode($array_response);
		} else {
			$this->_data['facebook_login_url'] 	= $this->facebookLogin(1);
			$this->_data['google_login_url']	= $this->googleLogin();
			$this->load->view('site/home/login', $this->_data);
		}
	}

	public function logout() {
		if (isset($_COOKIE['user_id'])) {
			delete_cookie('user_id');
		} 
		if (isset($_SESSION['userInfo'])) {
			unset($_SESSION['userInfo']);
		}
		if (isset($_SESSION['access_token'])) {
			unset($_SESSION['access_token']);
		}
		redirect('/');
	}

	public function checkEmail() {
		$email = $_POST['email'];
		$check = $this->M_account->checkBy('email', $email);
		if ($check > 0) {
			echo 1;
		} else {
			echo 0;
		}
	}

	public function ajaxGetListProvince() {
		$city_id 		= $_POST['city'];
		$list_proince 	= $this->M_province->listDistrictBy($city_id);
		echo json_encode($list_proince);
	}
	public function ajaxGetListWard() {
		$district_id 	= $_POST['district_id'];
		$list_proince 	= $this->M_province->listWardBy($district_id);
		echo json_encode($list_proince);
	}
	public function ajaxGetListStreet() {
		$district_id 	= $_POST['district_id'];
		$street 		= $this->M_province->listStreetBy($district_id);
		echo json_encode($street);
	}
	public function checkPhone() {
		$phone 		= $_POST['phone'];
		$check 		= $this->M_account->checkBy('phone',$phone);
		echo $check;
	}

	public function sendOTP() {
		$email 			= $_POST['email'];
		if ($email !== '') {
			$otp_code 	=	mt_rand(100000,999999); 
			$subject	=	'[Nhatro365] Kích hoạt tài khoản đăng ký';
			$body 		=	'Mã xác nhận OTP của bạn là: '.$otp_code;
			$send_email	=	$this->globals->sendEmail($email, $subject, $body);
			// $send_email = true;
			if ($send_email) {
				$check 	= $this->M_otp->checkEmail($email);
				if ($check > 0) {
					$update	= $this->M_otp->update($email, ['otp' => $otp_code, 'updated_at' => date('Y-m-d')]);
				} else {
					$insert = $this->M_otp->insert(['email'=> $email, 'otp' => $otp_code, 'created_at' => date('Y-m-d')]);
				}
				return 1;
			}
		} else {
			return 0;
		}
	}

	public function checkOTP() {
		$email 	= $_POST['email'];
		$otp 	= $_POST['otp'];
		if ($email !== '' && $otp !== '') {
			$check 	= $this->M_otp->checkOTP($email, $otp);
			if ($check > 0) {
				echo 1; 
			} else {
				echo 0;
			}
		}
		
	}
	public function updateInfo() {
		if (isset($_COOKIE['user_id']) && $_COOKIE['user_id'] !== '') {
			$this->_data['page_title']  = 'Cập nhật thông tin';
			$this->_data['list_city'] 	= $this->M_province->listProvince();
			$user_id 					= $_COOKIE['user_id'];
			if ($this->input->post('name')) {
				$response 	 	= ['status' => 0, 'msg' => ''];
				$data_update 	= [
					'name' 	 		=> $this->input->post('name'),
					'cit_id'		=> $this->input->post('cit_id'),
					'district_id'	=> $this->input->post('district_id'),
					'address' 		=> $this->input->post('address')
				];
				$date_create 	= $this->input->post('date_create');
				$arr_date 		= explode('-', $date_create);
				if (isset($_FILES['avatar']) && $_FILES['avatar'] !== '') {
					if(!is_dir('upload/avt_user/'.$arr_date[0].'/'.$arr_date[1].'/'.$arr_date[2]))
					{
						mkdir('upload/avt_user/'.$arr_date[0]."/".$arr_date[1]."/".$arr_date[2], 0755, TRUE);
					}
					$file_image	= $_FILES['avatar']['name'];
					$filename 	= $_FILES['avatar']['name'];
					$filedata 	= $_FILES['avatar']['tmp_name'];
					$temp		= explode('.',$filename);
					$imageThumb = new Image($filedata);    
					$thumb_path = "new_images".date("YmdHis",time()).rand(10000,99999);
					$imageThumb->save($thumb_path, 'upload/avt_user/'.$arr_date[0]."/".$arr_date[1]."/".$arr_date[2], $temp[1]);
					$imageThumb->resize(300,300,'crop');	
					$imguser	= $thumb_path.".".$temp[1];
					$data_update['avatar'] = $imguser;
				}
				$update = $this->M_account->update($data_update, $user_id);
				if ($update) {
					$response = ['status' => 1, 'msg' => 'Cập nhật thành công'];
				}
				echo json_encode($response);
			} else {
				$this->_data['user_info']	= $this->M_account->getInfoUser($user_id);
				$this->load->view('site/home/updateInfo', $this->_data);
			}
		} else {
			redirect('/');
		}
		
	}
	public function checkPassBy() {
		$user_id 	= $_POST['user_id'];
		$password	= $_POST['password'];
		$check 		= $this->M_account->checkPassBy($user_id, md5($password));
		if ($check > 0) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function updatePassword() {
		if ($this->input->post('password')) {
			$new_pass 	= $_POST['password'];
			$update 	= $this->M_account->update(['password'=> md5($new_pass)], $_COOKIE['user_id']);
			if ($update) {
				echo 1;
			} else {
				echo 0;
			}
		} else {
			$this->_data['page_title'] = 'Đổi mật khẩu';
			$this->load->view('site/home/updatePassword', $this->_data);
		}
		
	}
	public function updateUserInfo() {
		if ($this->input->post('password')) {
			$new_pass 	= $_POST['password'];
			$update 	= $this->M_account->update(['password'=> md5($new_pass), 'phone' => $_POST['phone']], $_COOKIE['user_id']);
			if ($update) {
				echo 1;
			} else {
				echo 0;
			}
		} 
		
	}
	public function detailUserPost($name, $id) {
		$info_user = $this->M_account->getInfoUserPost($id);
		$this->_data['page_title'] 			= 'Thông tin người đăng - '.$info_user['name'];
		$this->_data['robots']				= 'noindex,nofollow';
		$this->_data['canonical']			= base_url().url_slug($info_user['name']).'-u'.$info_user['id'].'.html';
		$this->_data['info_user_post']		= $info_user;
		$this->_data['page_user_post'] 		= 1;
		// đếm ngày, tháng truy cập
		$date_create 						= $info_user['created_at'];
		$date_1 							= new DateTime($date_create);
		$date_2 							= new DateTime(date('Y-m-d'));
		$count_date_create					= $date_1->diff($date_2);
		$this->_data['date_join']			= $count_date_create->format('%d');
		$this->_data['month_join']			= $count_date_create->format('%m');
		// đếm lượt truy cập
		$user_ip 							= getUserIpAddr();
		$check_ip 							= $this->M_count_view_user->checkIpUser($user_ip, $id);
		if ($check_ip == 0) {
			$insert_view 					= $this->M_count_view_user->add(['user_ip' => $user_ip, 'user_id' => $id]);
		}
		$all_view  							= $this->M_count_view_user->countView($id);
		$this->_data['all_view']			= $all_view;
		$this->_data['all_new']				= $this->M_news->countAllBy($id);
		// check follow, like
		$this->_data['followed']			= 0;
		$this->_data['liked'] 				= 0;
		if (isset($_COOKIE['user_id'])) {
			$check_follow 	= $this->M_follow_user->checkFollow($_COOKIE['user_id'],$id);
			$check_like		= $this->M_like_user->checkLike($_COOKIE['user_id'],$id);
			if ($check_follow > 0) {
				$this->_data['followed'] 	= 1;
			}
			if ($check_like > 0) {
				$this->_data['liked'] 		= 1;
			}

		}
		$this->_data['all_followed'] 		= $this->M_follow_user->countFollow($id);
		$this->_data['all_liked']			= $this->M_like_user->countLike($id);
		$this->_data['facebook_login_url'] 	= $this->facebookLoginRel(3);
		$this->_data['google_login_url']	= $this->googleLoginRel();
		$this->load->view('site/home/detailUserPost', $this->_data);
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
   			$facebook_login_url 		= $facebook_helper->getLoginUrl('https://nhatro.timviec365.com/account/facebookLogin', $facebook_permissions);
   			$data['facebook_login_url'] = $facebook_login_url;
   			return $facebook_login_url;
		}
	}
	// google login
	public function googleLogin() {
		include_once APPPATH."libraries/google/vendor/autoload.php";
		$google_client = new Google_Client();

  		$google_client->setClientId('380832296141-5hsuekrrk9sqmmafosjo095rls7dk473.apps.googleusercontent.com'); //Define your ClientID

  		$google_client->setClientSecret('JjT2yMYYsaFkuMHUKpKuXUyh'); //Define your Client Secret Key

  		$google_client->setRedirectUri('https://nhatro.timviec365.com/account/googleLogin'); //Define your Redirect Uri

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
				redirect('/');
  			}
  		}
  		$login_button = '';
  		if(!$this->session->userdata('access_token'))
  		{
  			$data['login_button'] = $google_client->createAuthUrl();
  			return $data['login_button'];
  		} else {
  			redirect('/');
  		}
  	}
  	// Facebook login.
	public function facebookLoginRel($login_type) {
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
   	public function googleLoginRel() {
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
	public function logoutFB() {
		unset($_SESSION['userInfo']);
		redirect('/');
	}
}
?>