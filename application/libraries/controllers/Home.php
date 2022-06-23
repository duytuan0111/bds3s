<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Home extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_province');
		$this->load->model('M_account');
		$this->load->model('M_news');
		$this->load->helper('cookie');
	}
	public function index() {
		$this->_data['page_title']   			= 'Trang chủ';
		$this->_data['robots']					= 'noindex,nofollow';
		$this->_data['canonical']				= base_url();
		$this->_data['page_home']				= 1;
		$this->_data['list_city']				= $this->M_province->listProvince();
		// facebook, goole
		$this->_data['facebook_login_url'] 		= $this->facebookLogin(3);
		$this->_data['google_login_url']		= $this->googleLogin();
		$this->load->view('site/home/home', $this->_data);
	}
	public function ajaxGetListNewHot() {
		$order_by 	= $_POST['order_by'];
		$response 	= ['status' => 0, 'list_new' => ''];
		if ($order_by == 1) {
			$order 	= 'id';
			$desc  	= 'DESC';
		} else {
			$order 	= 'room_rates';
			$desc 	= 'ASC';
		}
		$list_new	= $this->M_news->getListTop($order, $desc);
		if (!empty($list_new)) {
			$response = ['status' => 1, 'list_new' => $list_new, 'created_at' => date('Y-m-d')];
		}
		echo json_encode($response);
	}
	public function getAddressVietNam() {
		$all 		= glob(APPPATH.'libraries/vietnam_dataset/data-14/*.json');
		var_dump($all); die();
		foreach ($all as $key12 => $value12) {
			$file 		= file_get_contents($value12);
			$result		= json_decode($file);
			$ma_tp 		= $result->code;
			$ten_tp 	= $result->name;
			$district 	= $result->district;
			var_dump($district); die();
			foreach ($district as $key => $value) {
				$ma_qh 	= $value->name;
				$re_qh 	= $value->pre;
				$name_qh= $re_qh.' '.$ma_qh;
				$check_qh = $this->M_province->checkDistrict($name_qh);
				if ($check_qh > 0) {
					$info_qh 	= $this->M_province->getDistrict($name_qh);
					$id_qh 	 	= $info_qh['cit_id'];
					$ward 		= $value->ward;
					foreach ($ward as $ward1 => $ward2) {
						$name_ward 	=  $ward2->name;
						$re_ward   	=  $ward2->pre;
						$ward_name 	= $re_ward.' '.$name_ward;
						$data_insert= [
							'ward_name' 	=> $ward_name,
							'district_id'	=> $id_qh
						];
						$this->M_province->add($data_insert);
						$data_insert = [];
					}
					$street = $value->street;
					foreach ($street as $key1 => $value1) {
						$street_name = $value1;
						$data_inser1 = [
							'street_name' => $street_name,
							'district_id' => $id_qh
						];
						$this->M_province->add1($data_inser1);
						$data_inser1 = [];
					}
				}
			}
			if ($key12 == 4) {
				echo 'end';
				die();
			}
		}
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
					echo '<script> window.location.href = "https://nhatro.timviec365.com/dang-tin.html"; </script>';
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
   			$facebook_login_url 		= $facebook_helper->getLoginUrl('https://nhatro.timviec365.com/home/facebookLogin/3', $facebook_permissions);
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

  		$google_client->setRedirectUri('https://nhatro.timviec365.com/home/googleLogin'); //Define your Redirect Uri

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
  				echo '<script> window.location.href = "https://nhatro.timviec365.com/dang-tin.html"; </script>';
  			}
  		}
  		$login_button = '';
  		if(!$this->session->userdata('access_token'))
  		{
  			$data['login_button'] = $google_client->createAuthUrl();
  			return $data['login_button'];
  		} 
  	}
	public function privacry() {
		echo 'Nhatro365.com';
	}
}
?>