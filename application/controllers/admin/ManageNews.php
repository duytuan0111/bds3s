<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class ManageNews extends CI_Controller
{
	protected $_data;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('cookie');
        $this->load->model('M_ManageNews');
		$this->load->helper('func_fomatNumber');
		$this->load->library('pagination');
		$this->load->helper('func_fomatMonney');
		$this->load->model('M_PostNews');
	}
	public function ManageNewsPurchase() {

		$rowperpage  = 10;
		if ($this->uri->segment(2)) {
			$page = $this->uri->segment(2);
		} else {
			$page = 0;
		}
		if ($page != 0) {
			$page        = ($page - 1) * $rowperpage;
		}
		$keyword = isset($_GET['key']) ? $_GET['key'] : ''; //tìm kiếm
		$cit_id = isset($_GET['id_cit']) ? $_GET['id_cit'] : ''; //tìm kiếm
		$stt = isset($_GET['stt']) ? $_GET['stt'] : ''; //tìm kiếm
		$this->_data['count_AllSave'] 			=   $this->M_ManageNews->count_AllSave();
		$this->_data['newsPurchase']			=	$this->M_ManageNews->getNewsPurchase($page, $rowperpage,$keyword,$stt,$cit_id);
		$this->_data['count_save_purchase'] 	= 	$this->M_ManageNews->countSavePurchase();
		$this->_data['count_all_purchase'] 		= 	$this->M_ManageNews->countAllPurchase();
		$this->_data['count_all_lease'] 		= 	$this->M_ManageNews->countAllLease();
		$this->_data['count_all_design'] 		=   $this->M_ManageNews->count_All_Design();
		$this->_data['countAllProject'] 		=   $this->M_ManageNews->countAllProject();
		$countAll = $this->M_ManageNews->countAll_getNewsPurchase($keyword,$stt,$cit_id);
		$config['base_url']             = base_url() . 'quan-ly-tin-dang-mua-ban.html';
		$config["total_rows"] 			= $countAll;
		$config["per_page"] 			= $rowperpage;
		$config['num_links'] 			= 2;
		$config['use_page_numbers'] 	= TRUE;

		$config['first_link'] 		= 'Đầu';
		$config['last_link'] 		= 'Cuối';
		$config['full_tag_open']    = '<div class="body_phantrang_img flex juss_tify_end"><nav><ul class="pagination body_phantrang_number flex">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item phantrang_number mr_r8px page_active"><span class="page-link">';
		$config['cur_tag_close']    = '</span></li>';
		$config['next_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['prev_tag_close'] 	= '</span></li>';
		$config['first_tag_open']   = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['first_tag_close'] 	= '</span></li>';
		$config['last_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['last_tag_close'] 	= '</span></li>';
		// Initialize
		$this->pagination->initialize($config);
		$this->_data['pagination'] = $this->pagination->create_links();
		$this->_data['canonical']				= base_url();
		$this->_data['listcity'] 				= $this->M_ManageNews->getCity(0);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsPurchase', $this->_data);
	}
	public function deleteNews() {
		
		$id_news = $this->input->post('id_news');
		$delete = $this->M_ManageNews->deleteNews($id_news);
		if ($delete > 0) {
			$response['status'] = 1;
		}	
		echo json_encode($response);
	}
    public function ManageNewsLease() {
		$rowperpage  = 10;
		if ($this->uri->segment(2)) {
			$page = $this->uri->segment(2);
		} else {
			$page = 0;
		}
		if ($page != 0) {
			$page        = ($page - 1) * $rowperpage;
		}
		$keyword = isset($_GET['key']) ? $_GET['key'] : ''; //tìm kiếm
		$cit_id = isset($_GET['id_cit']) ? $_GET['id_cit'] : ''; //tìm kiếm
		$stt = isset($_GET['stt']) ? $_GET['stt'] : 0; //tìm kiếm
		$this->_data['newsPurchase']			=	$this->M_ManageNews->getNewsLease($page, $rowperpage,$keyword,$stt,$cit_id);
		$this->_data['count_save_lease'] 		= 	$this->M_ManageNews->countSaveLease();
		$this->_data['count_all_purchase'] 		= 	$this->M_ManageNews->countAllPurchase();
		$this->_data['count_all_lease'] 		= 	$this->M_ManageNews->countAllLease();
		$this->_data['count_all_design'] 		=   $this->M_ManageNews->count_All_Design();
		$this->_data['count_AllSave'] 			=   $this->M_ManageNews->count_AllSave();
		$this->_data['countAllProject'] 		=   $this->M_ManageNews->countAllProject();
		$countAll = $this->M_ManageNews->countAll_getNewsLease($keyword,$stt,$cit_id);
		$config['base_url']             = base_url() . 'quan-ly-tin-dang-cho-thue.html';
		$config["total_rows"] 			= $countAll;
		$config["per_page"] 			= $rowperpage;
		$config['num_links'] 			= 2;
		$config['use_page_numbers'] 	= TRUE;

		$config['first_link'] 		= 'Đầu';
		$config['last_link'] 		= 'Cuối';
		$config['full_tag_open']    = '<div class="body_phantrang_img flex juss_tify_end"><nav><ul class="pagination body_phantrang_number flex">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item phantrang_number mr_r8px page_active"><span class="page-link">';
		$config['cur_tag_close']    = '</span></li>';
		$config['next_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['prev_tag_close'] 	= '</span></li>';
		$config['first_tag_open']   = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['first_tag_close'] 	= '</span></li>';
		$config['last_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['last_tag_close'] 	= '</span></li>';
		// Initialize
		$this->pagination->initialize($config);
		$this->_data['pagination'] = $this->pagination->create_links();
		$this->_data['canonical']				= base_url();
		$this->_data['listcity'] 				= $this->M_ManageNews->getCity(0);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsLease', $this->_data);
	}
	public function ManageNewsProject() {
		$rowperpage  = 10;
		if ($this->uri->segment(2)) {
			$page = $this->uri->segment(2);
		} else {
			$page = 0;
		}
		if ($page != 0) {
			$page        = ($page - 1) * $rowperpage;
		}
		$keyword = isset($_GET['key']) ? $_GET['key'] : ''; //tìm kiếm
		$cit_id = isset($_GET['id_cit']) ? $_GET['id_cit'] : ''; //tìm kiếm
		$stt = isset($_GET['stt']) ? $_GET['stt'] : 0; //tìm kiếm
		$this->_data['newsProject']				=   $this->M_ManageNews->getNewsProject($page, $rowperpage,$keyword,$stt,$cit_id);
		$this->_data['count_save_project'] 		=   $this->M_ManageNews->countSaveProject();
		$this->_data['count_save_lease'] 		= 	$this->M_ManageNews->countSaveLease();
		$this->_data['count_all_purchase'] 		= 	$this->M_ManageNews->countAllPurchase();
		$this->_data['count_all_lease'] 		= 	$this->M_ManageNews->countAllLease();
		$this->_data['count_all_design'] 		=   $this->M_ManageNews->count_All_Design();
		$this->_data['count_AllSave'] 			=   $this->M_ManageNews->count_AllSave();
		$this->_data['countAllProject'] 		=   $this->M_ManageNews->countAllProject();
		$countAll = $this->M_ManageNews->countAll_getNewsProject($keyword,$stt,$cit_id);
		$config['base_url']             = base_url() . 'quan-ly-tin-dang-cho-thue.html';
		$config["total_rows"] 			= $countAll;
		$config["per_page"] 			= $rowperpage;
		$config['num_links'] 			= 2;
		$config['use_page_numbers'] 	= TRUE;

		$config['first_link'] 		= 'Đầu';
		$config['last_link'] 		= 'Cuối';
		$config['full_tag_open']    = '<div class="body_phantrang_img flex juss_tify_end"><nav><ul class="pagination body_phantrang_number flex">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item phantrang_number mr_r8px page_active"><span class="page-link">';
		$config['cur_tag_close']    = '</span></li>';
		$config['next_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['prev_tag_close'] 	= '</span></li>';
		$config['first_tag_open']   = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['first_tag_close'] 	= '</span></li>';
		$config['last_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['last_tag_close'] 	= '</span></li>';
		// Initialize
		$this->pagination->initialize($config);
		$this->_data['pagination'] = $this->pagination->create_links();
		$this->_data['canonical']				= base_url();
		$this->_data['listcity'] 				= $this->M_ManageNews->getCity(0);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsProject', $this->_data);
	}
	public function ManageNewsDesign() {
		$rowperpage  = 10;
		if ($this->uri->segment(2)) {
			$page = $this->uri->segment(2);
		} else {
			$page = 0;
		}
		if ($page != 0) {
			$page        = ($page - 1) * $rowperpage;
		}
		$keyword = isset($_GET['key']) ? $_GET['key'] : ''; //tìm kiếm
		$cit_id = isset($_GET['id_cit']) ? $_GET['id_cit'] : ''; //tìm kiếm
		$stt = isset($_GET['style']) ? $_GET['style'] : ''; //tìm kiếm
		$time = isset($_GET['time']) ? strtotime($_GET['time']) : ''; //tìm kiếm
		$type = isset($_GET['type']) ? $_GET['type'] : ''; //tìm kiếm

		$this->_data['newsDesign']=	$this->M_ManageNews->getNewsDesign($page, $rowperpage,$keyword,$stt,$cit_id,$time,$type);

		$count_alls								= $this->M_ManageNews->countAll_getNewsDesign($keyword,$stt,$cit_id,$time,$type);
		$this->_data['countNewsHome'] 			= $this->M_ManageNews->count_NewsHome();
		$this->_data['countNewsRoom'] 			= $this->M_ManageNews->count_NewsRoom();
		$this->_data['count_all'] 				= $this->M_ManageNews->count_All_Design();
		$this->_data['count_AllSave'] 			= $this->M_ManageNews->count_AllSave();
		$this->_data['count_all_purchase'] 		= $this->M_ManageNews->countAllPurchase();
		$this->_data['count_all_lease'] 		= $this->M_ManageNews->countAllLease();
		$this->_data['countAllProject'] 		= $this->M_ManageNews->countAllProject();
		$config['base_url']             = base_url() . 'quan-ly-tin-dang-thiet-ke.html';
		$config["total_rows"] 			= $count_alls;
		$config["per_page"] 			= $rowperpage;
		$config['num_links'] 			= 2;
		$config['use_page_numbers'] 	= TRUE;

		$config['first_link'] 		= 'Đầu';
		$config['last_link'] 		= 'Cuối';
		$config['full_tag_open']    = '<div class="body_phantrang_img mr_t24px w100pt flex juss_tify_end"><nav><ul class="pagination body_phantrang_number flex">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item phantrang_number mr_r8px page_active"><span class="page-link">';
		$config['cur_tag_close']    = '</span></li>';
		$config['next_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['prev_tag_close'] 	= '</span></li>';
		$config['first_tag_open']   = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['first_tag_close'] 	= '</span></li>';
		$config['last_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['last_tag_close'] 	= '</span></li>';
		// Initialize
		$this->pagination->initialize($config);
		$this->_data['pagination'] = $this->pagination->create_links();
		$this->_data['canonical']				= base_url();
		$this->_data['listcity'] 				= $this->M_ManageNews->getCity(0);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsDesign', $this->_data);
	}
    public function ManageNewsSave() {

		$rowperpage  = 10;
		if ($this->uri->segment(2)) {
			$page = $this->uri->segment(2);
		} else {
			$page = 0;
		}
		if ($page != 0) {
			$page        = ($page - 1) * $rowperpage;
		}
		$keyword 	= isset($_GET['key']) ? $_GET['key'] : ''; //tìm kiếm
		$cit_id		= isset($_GET['id_cit']) ? $_GET['id_cit'] : ''; //tìm kiếm
		$stt 		= isset($_GET['style']) ? $_GET['style'] : ''; //tìm kiếm
		$time 		= isset($_GET['time']) ? $_GET['time'] : ''; //tìm 
		if($time != '')
		{
			$time		= explode('-',$time);
			$time_st	= strtotime(str_replace('/','-',$time[0]));
			$time_end	= strtotime(str_replace('/','-',$time[1]));
		}
		else
		{
			$time_end = '';
			$time_st = '';
		}
		$type = isset($_GET['type']) ? $_GET['type'] : ''; //tìm kiếm

		$this->_data['newsSave']=	$this->M_ManageNews->getNewsSave($page, $rowperpage,$keyword,$stt,$cit_id,$time_st,$time_end,$type);
		$count_alls								= $this->M_ManageNews->countAll_getNewsSave($keyword,$stt,$cit_id,$time_st,$time_end,$type);
		$this->_data['count_NewsDesignSave'] 	= $this->M_ManageNews->count_NewsDesignSave();
		$this->_data['count_NewsProjectSave'] 	= $this->M_ManageNews->count_NewsProjectSave();
		$this->_data['count_AllSave'] 			= $this->M_ManageNews->count_AllSave();
		$this->_data['count_NewsSave'] 			= $this->M_ManageNews->count_NewsSave();
		$this->_data['countLease'] 				= $this->M_ManageNews->countAllLease();
		$this->_data['countPurchase'] 			= $this->M_ManageNews->countAllPurchase();
		$this->_data['count_all_design'] 		= $this->M_ManageNews->count_All_Design();
		$this->_data['countAllProject'] 		= $this->M_ManageNews->countAllProject();
		$this->_data['type_news'] 				= ['1'=>'Dự án','2'=>'Phòng đẹp','3'=>'Nhà đẹp','4'=>'Mua, thuê'];
		$config['base_url']             = base_url() . 'quan-ly-tin-dang-tin-luu.html';
		$config["total_rows"] 			= $count_alls;
		$config["per_page"] 			= $rowperpage;
		$config['num_links'] 			= 2;
		$config['use_page_numbers'] 	= TRUE;

		$config['first_link'] 		= 'Đầu';
		$config['last_link'] 		= 'Cuối';
		$config['full_tag_open']    = '<div class="body_phantrang_img mr_t24px w100pt flex juss_tify_end"><nav><ul class="pagination body_phantrang_number flex">';
		$config['full_tag_close']   = '</ul></nav></div>';
		$config['num_tag_open']     = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['num_tag_close']    = '</span></li>';
		$config['cur_tag_open']     = '<li class="page-item phantrang_number mr_r8px page_active"><span class="page-link">';
		$config['cur_tag_close']    = '</span></li>';
		$config['next_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['next_tag_close']  	= '<span aria-hidden="true"></span></span></li>';
		$config['prev_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['prev_tag_close'] 	= '</span></li>';
		$config['first_tag_open']   = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['first_tag_close'] 	= '</span></li>';
		$config['last_tag_open']    = '<li class="page-item phantrang_number mr_r8px"><span class="page-link">';
		$config['last_tag_close'] 	= '</span></li>';
		// Initialize
		$this->pagination->initialize($config);
		$this->_data['pagination'] = $this->pagination->create_links();
		$this->_data['canonical']				= base_url();
		$this->_data['listcity'] 				= $this->M_ManageNews->getCity(0);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/ManageNewsSave', $this->_data);
	}

	//--------------------------------------update news 
	public function updateNewsSave() {
		$type = $this->input->post('type');
		$id_news = $this->input->post('id_news');
		$remove_news_sv = 0;	
		if($type == 0)
		{
			$remove_news_sv = $this->M_ManageNews->RemoveNewsSave($id_news);
		}
		else
		{
			$data_insert = [
				'newID' => $id_news,
				'userID' => 30,
				'sv_time_create' => time(),
			];
			$insert_news_sv = $this->M_ManageNews->SaveNews($data_insert);
		}

		if ($remove_news_sv > 0) {
			$response['status'] = 1;
		}	
		else
		{
			$response['status'] = 2;
		}
		echo json_encode($response);
	}
	//---------------------update tin đăng sau đăng nhập
	public function UpdateNewsAfterLogin($id_news) {
		$this->_data['city'] 					= $this->M_PostNews->listProvince();
		$this->_data['canonical']				= base_url();
		$this->_data['newsDetail'] 				= $this->M_ManageNews->NewsDetail($id_news);
		$this->_data['listDistricts'] 			= $this->M_PostNews->listDistricts($this->_data['newsDetail']['select_city']);
		$this->_data['listWards'] 				= $this->M_PostNews->listWards($this->_data['newsDetail']['districts']);
		$this->_data['streets'] 					= $this->M_PostNews->getStreetBy($this->_data['newsDetail']['wards']);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/UpdateNewsAfterLogin', $this->_data);
	}
	//---------------------update tin đăng dự án
	public function UpdateNewsProject($id_news) {
		$this->_data['city'] 					= $this->M_PostNews->listProvince();
		$this->_data['canonical']				= base_url();
		$this->_data['newsDetail'] 				= $this->M_ManageNews->NewsDetail($id_news);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/UpdateNewsProject', $this->_data);
	}
	//---------------------update tin đăng nhà đẹp
	public function UpdateNewsHome($id_news) {
		$this->_data['city'] 					= $this->M_PostNews->listProvince();
		$this->_data['canonical']				= base_url();
		$this->_data['newsDetail'] 				= $this->M_ManageNews->NewsDetail($id_news);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/UpdateNewsHome', $this->_data);
	}
	//---------------------update tin đăng phòng đẹp
	public function UpdateNewsRoom($id_news) {

		$this->_data['city'] 					= $this->M_PostNews->listProvince();
		$this->_data['canonical']				= base_url();
		$this->_data['newsDetail'] 				= $this->M_ManageNews->NewsDetail($id_news);
		$this->load->helper(array('lich','lich2','lich3'));
		$this->load->view('site/UpdateNewsRoom', $this->_data);
	}
}
?>