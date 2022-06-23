<?php 
/**
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller
{
	protected $_data;
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin_account', 'Madmin');
		$this->load->model('M_account');
		$this->load->model('M_province');
		$this->load->model('M_news');
		$this->load->model('M_Posts');
		$this->load->model('M_tags');
		$this->load->helper('func_helper');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index() {
		$this->_data['head_title'] = 'Admin - home';
		$this->_data['page_title'] = 'Trang quản trị';
		$this->load->view('admin/index', $this->_data);
	}
	public function listAdmin() {
		$this->_data['head_title'] = 'Danh sách quản trị viên';
		$this->_data['page_title'] = 'Danh sách quản trị viên';
		$this->_data['sidebar']    = 1;
		$this->_data['sidebar_sm'] = 1.2;
		$this->_data['listAdmin']  = $this->Madmin->listAdmin();
		$this->load->view('admin/listAdmin', $this->_data);
	}
	public function ajax_list()
	{

		$list = $this->M_account->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $customers->id;
			$row[] = $customers->phone;
			$row[] = $customers->email;
			$row[] = '<a href="'.base_url().url_slug($customers->name).'-u'.$customers->id.'.html" target="_blank">'.$customers->name.'</a>';
      		// $row[] = $customers->password;
			$row[] = date('d-m-Y', strtotime($customers->created_at));
            //add html for action
			$row[] = '<a class="btn btn-sm btn-success" href="javascript:void(0)" title="Edit" onclick="edit_cus('."'".$customers->id."'".')"><i class="fas fa-edit"></i> Sửa </a>';
			/*<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_cus('."'".$customers->id."'".')"><i class="fas fa-trash-alt"></i> Xóa</a>*/

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_account->count_all(),
			"recordsFiltered" => $this->M_account->count_filtered(),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}
	public function ajax_list_news()
	{
		$list = $this->M_news->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $customers->id;
			$row[] = '<a href="'.base_url().$customers->alias.'-n'.$customers->id.'.html" target="_blank">'.$customers->new_title.'</a>';
			$row[] = $customers->address;
      // $row[] = $customers->password;
			$row[] = date('d-m-Y', strtotime($customers->created_at));
            //add html for action
			$row[] = '<a class="btn btn-sm btn-success" href="'.base_url().'admin/home/editNews/'.$customers->id.'" title="Edit" onclick="edit_new('."'".$customers->id."'".')"><i class="fas fa-edit"></i> Sửa </a>';
			/*<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_new('."'".$customers->id."'".')"><i class="fas fa-trash-alt"></i> Xóa</a>*/


			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_news->count_all(),
			"recordsFiltered" => $this->M_news->count_filtered(),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}
	public function ajaxCheckIndexTag() {
		$tag_id = $_POST['tag_id'];
		$check  = $this->M_tags->checkIndexTag($tag_id);
		if ($check == 0) {
			$this->M_tags->update(['index_tag' => 1], $tag_id);
		}
		return 1;
	}
	public function ajax_list_tags()
	{
		$list = $this->M_tags->get_datatables($new_type=1);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $customers->id;
			$url   = base_url().url_slug($customers->tag_name).'-g'.$customers->id.'.html';
			$row[] = '<a href="'.$url.'" target="_blank">'.$customers->tag_name.'</a>';
			switch ($customers->type) {
				case 1:
				$row[] = 'Tag diện tích';
				break;
				case 2:
				$row[] = 'Tag theo giá';
				break;
				case 3:
				$row[] = 'Tag theo từ khóa';
				break;
				default:
				$row[] = 'Tag theo từ khóa';
				break;
			}
			$row[] = $customers->room_acreage." m2";
			$row[] = ($customers->price > 0) ? $customers->price.' vnđ' : '';
      // $row[] = $customers->password;
			$row[] = date('d-m-Y', strtotime($customers->created_at));
			if ($customers->index_tag == 1) {
				$checked = 'checked';
			} else {
				$checked = '';
			}
			$row[] = '<div class="checkbox">
			<label>
			<input type="checkbox" '.$checked.' value="1" onclick="checkIndex('."'".$customers->id."'".')">
			</label>
			</div>';
            //add html for action
			$row[] = '<a class="btn btn-sm btn-success" href="'.base_url().'admin/home/editTag/'.$customers->id.'" title="Edit" onclick="edit_new('."'".$customers->id."'".')"><i class="fas fa-edit"></i></a>';
			/*<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_new('."'".$customers->id."'".')"><i class="fas fa-trash-alt"></i> Xóa</a>*/


			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_tags->count_all(),
			"recordsFiltered" => $this->M_tags->count_filtered($new_type=1),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}
	public function ajax_list_tags_apartment()
	{
		$list = $this->M_tags->get_datatables($new_type=2);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $customers->id;
			$url   = base_url().url_slug($customers->tag_name).'-g'.$customers->id.'.html';
			$row[] = '<a href="'.$url.'" target="_blank">'.$customers->tag_name.'</a>';
			$row[] = 'Tag theo từ khóa';
      // $row[] = $customers->password;
			$row[] = date('d-m-Y', strtotime($customers->created_at));
			if ($customers->index_tag == 1) {
				$checked = 'checked';
			} else {
				$checked = '';
			}
			$row[] = '<div class="checkbox">
			<label>
			<input type="checkbox" '.$checked.' value="1" onclick="checkIndex('."'".$customers->id."'".')">
			</label>
			</div>';
            //add html for action
			$row[] = '<a class="btn btn-sm btn-success" href="'.base_url().'admin/home/editTagApartment/'.$customers->id.'" title="Edit" onclick="edit_new('."'".$customers->id."'".')"><i class="fas fa-edit"></i></a>';
			/*<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_new('."'".$customers->id."'".')"><i class="fas fa-trash-alt"></i> Xóa</a>*/


			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_tags->count_all(),
			"recordsFiltered" => $this->M_tags->count_filtered($new_type=2),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}
	public function ajax_list_tags_homstay()
	{
		$list = $this->M_tags->get_datatables($new_type=4);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $customers->id;
			$url   = base_url().url_slug($customers->tag_name).'-g'.$customers->id.'.html';
			$row[] = '<a href="'.$url.'" target="_blank">'.$customers->tag_name.'</a>';
			$row[] = 'Tag theo từ khóa';
      // $row[] = $customers->password;
			$row[] = date('d-m-Y', strtotime($customers->created_at));
			if ($customers->index_tag == 1) {
				$checked = 'checked';
			} else {
				$checked = '';
			}
			$row[] = '<div class="checkbox">
			<label>
			<input type="checkbox" '.$checked.' value="1" onclick="checkIndex('."'".$customers->id."'".')">
			</label>
			</div>';
            //add html for action
			$row[] = '<a class="btn btn-sm btn-success" href="'.base_url().'admin/home/editTagHomestay/'.$customers->id.'" title="Edit" onclick="edit_new('."'".$customers->id."'".')"><i class="fas fa-edit"></i></a>';
			/*<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_new('."'".$customers->id."'".')"><i class="fas fa-trash-alt"></i> Xóa</a>*/


			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_tags->count_all(),
			"recordsFiltered" => $this->M_tags->count_filtered($new_type=4),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}
	public function ajax_list_tags_house()
	{
		$list = $this->M_tags->get_datatables($new_type=3);
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $customers->id;
			$url   = base_url().url_slug($customers->tag_name).'-g'.$customers->id.'.html';
			$row[] = '<a href="'.$url.'" target="_blank">'.$customers->tag_name.'</a>';
			switch ($customers->type) {
				case 1:
				$row[] = 'Tag diện tích';
				break;
				case 2:
				$row[] = 'Tag theo giá';
				break;
				case 3:
				$row[] = 'Tag theo từ khóa';
				break;
				default:
				$row[] = 'Tag theo từ khóa';
				break;
			}
			$row[] = ($customers->price > 0) ? $customers->price.' vnđ' : '';
      // $row[] = $customers->password;
			$row[] = date('d-m-Y', strtotime($customers->created_at));
			if ($customers->index_tag == 1) {
				$checked = 'checked';
			} else {
				$checked = '';
			}
			$row[] = '<div class="checkbox">
			<label>
			<input type="checkbox" '.$checked.' value="1" onclick="checkIndex('."'".$customers->id."'".')">
			</label>
			</div>';
            //add html for action
			$row[] = '<a class="btn btn-sm btn-success" href="'.base_url().'admin/home/editTagHouse/'.$customers->id.'" title="Edit" onclick="edit_new('."'".$customers->id."'".')"><i class="fas fa-edit"></i></a>';
			/*<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_new('."'".$customers->id."'".')"><i class="fas fa-trash-alt"></i> Xóa</a>*/


			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_tags->count_all(),
			"recordsFiltered" => $this->M_tags->count_filtered($new_type=3),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}
	public function ajax_list_posts()
	{
		/*
		1. Loại tin
		2. Loại tin tại tỉnh/ thành phố
		3. Loại tin tại quận huyện
		4. Loại tin tại đường phố
		 */
		$new_type 	= $this->input->post('new_type');
		$cit_id 	= $this->input->post('cit_id');
		$district_id= $this->input->post('district_id');
		$street_id	= $this->input->post('street_id');
		$list 		= $this->M_Posts->get_datatables($post_type=4,$new_type,$cit_id,$district_id,$street_id);
		$data 		= array();
		$no 		= $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row = array();
			$row[] = $customers->id;
			$detailStreet 	= $this->M_province->getStreetBy($customers->street_id);
			$detailDistrict = $this->M_province->getDistrictById($customers->district);
			$url 			= base_url().'tim-'.url_slug(getNewTypeNew($customers->new_type)).'-tai-'.url_slug($detailStreet['street_name']).'-'.url_slug($detailDistrict['cit_name']).'-'.url_slug(Getcitybyindex2($customers->city)).'-t'.$customers->new_type.'s'.$customers->street_id.'.html';
			$row[] = '<a href="'.$url.'" target="_blank">'.getNewTypeNew($customers->new_type).' tại '.$detailStreet['street_name'].' '.$detailDistrict['cit_name'].' '.Getcitybyindex2($customers->city).'</a>';
			$row[] = getNewTypeNew($customers->new_type);
      // $row[] = $customers->password;
			$row[] = date('d-m-Y', strtotime($customers->created_at));
            //add html for action
			$row[] = '<a class="btn btn-sm btn-success" href="'.base_url().'admin/home/editPostStreet/'.$customers->id.'" title="Edit" onclick="edit_new('."'".$customers->id."'".')"><i class="fas fa-edit"></i> Sửa </a>';
			/*<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_new('."'".$customers->id."'".')"><i class="fas fa-trash-alt"></i> Xóa</a>*/


			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_Posts->count_all(),
			"recordsFiltered" => $this->M_Posts->count_filtered($post_type=4,$new_type,$cit_id,$district_id,$street_id),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}
	public function ajax_list_posts_district()
	{
		/*
		1. Loại tin
		2. Loại tin tại tỉnh/ thành phố
		3. Loại tin tại quận huyện
		4. Loại tin tại đường phố
		 */
		$new_type 	= $this->input->post('new_type');
		$cit_id 	= $this->input->post('cit_id');
		$district_id= $this->input->post('district_id');
		$list 		= $this->M_Posts->get_datatables($post_type=3,$new_type,$cit_id,$district_id,$street_id=0);
		$data 		= array();
		$no 		= $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row 			= array();
			$row[] 			= $customers->id;
			$detailDistrict = $this->M_province->getDistrictById($customers->district);
			$url 			= base_url().'tim-'.url_slug(getNewTypeNew($customers->new_type)).'-tai-'.url_slug($detailDistrict['cit_name']).'-'.url_slug(Getcitybyindex2($customers->city)).'-t'.$customers->new_type.'d'.$customers->district.'.html';
			$row[] = '<a href="'.$url.'" target="_blank">'.getNewTypeNew($customers->new_type).' tại '.' '.$detailDistrict['cit_name'].' '.Getcitybyindex2($customers->city).'</a>';
			$row[] = getNewTypeNew($customers->new_type);
      // $row[] = $customers->password;
			$row[] = date('d-m-Y', strtotime($customers->created_at));
            //add html for action
			$row[] = '<a class="btn btn-sm btn-success" href="'.base_url().'admin/home/editPostDistrict/'.$customers->id.'" title="Edit" onclick="edit_new('."'".$customers->id."'".')"><i class="fas fa-edit"></i> Sửa </a>';
			/*<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_new('."'".$customers->id."'".')"><i class="fas fa-trash-alt"></i> Xóa</a>*/


			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_Posts->count_all(),
			"recordsFiltered" => $this->M_Posts->count_filtered($post_type=3,$new_type,$cit_id,$district_id,$street_id=0),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}
	public function ajax_list_posts_city()
	{
		/*
		1. Loại tin
		2. Loại tin tại tỉnh/ thành phố
		3. Loại tin tại quận huyện
		4. Loại tin tại đường phố
		 */
		$new_type 	= $this->input->post('new_type');
		$cit_id 	= $this->input->post('cit_id');
		$list 		= $this->M_Posts->get_datatables($post_type=2,$new_type,$cit_id,$district_id=0,$street_id=0);
		$data 		= array();
		$no 		= $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row 	= array();
			$row[] 	= $customers->id;
			$url 	= base_url().'tim-'.url_slug(getNewTypeNew($customers->new_type)).'-tai-'.url_slug(Getcitybyindex2($customers->city)).'-t'.$customers->new_type.'c'.$customers->city.'.html';
			$row[] 	= '<a href="'.$url.'" target="_blank">'.getNewTypeNew($customers->new_type).' tại '.' '.Getcitybyindex2($customers->city).'</a>';
			$row[] 	= getNewTypeNew($customers->new_type);
      // $row[] = $customers->password;
			$row[] 	= date('d-m-Y', strtotime($customers->created_at));
            //add html for action
			$row[] 	= '<a class="btn btn-sm btn-success" href="'.base_url().'admin/home/editPostCity/'.$customers->id.'" title="Edit" onclick="edit_new('."'".$customers->id."'".')"><i class="fas fa-edit"></i> Sửa </a>';
			/*<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_new('."'".$customers->id."'".')"><i class="fas fa-trash-alt"></i> Xóa</a>*/


			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_Posts->count_all(),
			"recordsFiltered" => $this->M_Posts->count_filtered($post_type=2,$new_type,$cit_id,$district_id=0,$street_id=0),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}
	public function ajax_list_posts_new_type()
	{
		$new_type 	= $this->input->post('new_type');
		$list 		= $this->M_Posts->get_datatables($post_type=1,$new_type,$cit_id=0,$district_id=0,$street_id=0);
		$data 		= array();
		$no 		= $_POST['start'];
		foreach ($list as $customers) {
			$no++;
			$row 	= array();
			$row[] 	= $customers->id;
			$url 	= base_url().'tim-'.url_slug(getNewTypeNew($customers->new_type)).'-t'.$customers->new_type.'.html';
			$row[] 	= '<a href="'.$url.'" target="_blank">'.getNewTypeNew($customers->new_type).'</a>';
			$row[] 	= getNewTypeNew($customers->new_type);
      // $row[] = $customers->password;
			$row[] 	= date('d-m-Y', strtotime($customers->created_at));
            //add html for action
			$row[] 	= '<a class="btn btn-sm btn-success" href="'.base_url().'admin/home/editPostNewType/'.$customers->id.'" title="Edit" onclick="edit_new('."'".$customers->id."'".')"><i class="fas fa-edit"></i> Sửa </a>';
			/*<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_new('."'".$customers->id."'".')"><i class="fas fa-trash-alt"></i> Xóa</a>*/


			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_Posts->count_all(),
			"recordsFiltered" => $this->M_Posts->count_filtered($post_type=1,$new_type,$cit_id=0,$district_id=0,$street_id=0),
			"data" => $data,
		);
        //output to json format
		echo json_encode($output);
	}
	public function ajaxGetListProvince() {
		$city_id 		= $_POST['city'];
		$list_proince 	= $this->M_province->listDistrictBy($city_id);
		echo json_encode($list_proince);
	}
	public function ajax_delete($id)
	{
		$this->M_account->deleteById($id);
		echo json_encode(array("status" => TRUE));
	}
	public function listUser() {
		$this->_data['head_title'] = 'Danh sách người dùng';
		$this->_data['page_title'] = 'Danh sách người dùng';
		$this->_data['sidebar']    = 1;
		$this->_data['sidebar_sm'] = 1.1;
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->load->view('admin/listUser', $this->_data);
	}
	public function listNews() {
		$this->_data['head_title'] = 'Danh sách tin đăng';
		$this->_data['page_title'] = 'Danh sách tin đăng';
		$this->_data['sidebar']    = 2;
		$this->_data['sidebar_sm'] = 2.1;
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->load->view('admin/listNews', $this->_data);
	}
	public function listTags() {
		$this->_data['head_title'] = 'Danh sách tags phòng trọ';
		$this->_data['page_title'] = 'Danh sách tags phòng trọ';
		$this->_data['sidebar']    = 4;
		$this->_data['sidebar_sm'] = 4.1;
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->load->view('admin/listTags', $this->_data);
	}
	public function listTagsHouse() {
		$this->_data['head_title'] = 'Danh sách tags nhà nguyên căn';
		$this->_data['page_title'] = 'Danh sách tags nhà nguyên căn';
		$this->_data['sidebar']    = 4;
		$this->_data['sidebar_sm'] = 4.3;
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->load->view('admin/listTagsHouse', $this->_data);
	}
	public function listTagsApartment() {
		$this->_data['head_title'] = 'Danh sách tags căn hộ';
		$this->_data['page_title'] = 'Danh sách tags căn hộ';
		$this->_data['sidebar']    = 4;
		$this->_data['sidebar_sm'] = 4.2;
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->load->view('admin/listTagsApartment', $this->_data);
	}
	public function listTagsHomestay() {
		$this->_data['head_title'] = 'Danh sách tags homestay';
		$this->_data['page_title'] = 'Danh sách tags homestay';
		$this->_data['sidebar']    = 4;
		$this->_data['sidebar_sm'] = 4.4;
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->load->view('admin/listTagsHomestay', $this->_data);
	}
	public function listPosts() {
		$this->_data['head_title'] = 'Danh sách bài viết tại đường phố';
		$this->_data['page_title'] = 'Danh sách bài viết tại đường phố';
		$this->_data['sidebar']    = 3;
		$this->_data['sidebar_sm'] = 3.1;
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->load->view('admin/listPosts', $this->_data);
	}
	public function listPostsDistrict() {
		$this->_data['head_title'] = 'Danh sách bài viết tại quận huyện';
		$this->_data['page_title'] = 'Danh sách bài viết tại quận huyện';
		$this->_data['sidebar']    = 3;
		$this->_data['sidebar_sm'] = 3.2;
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->load->view('admin/listPostsDistrict', $this->_data);
	}
	public function listPostsCity() {
		$this->_data['head_title'] = 'Danh sách bài viết tại tỉnh/thành';
		$this->_data['page_title'] = 'Danh sách bài viết tại tỉnh/thành';
		$this->_data['sidebar']    = 3;
		$this->_data['sidebar_sm'] = 3.3;
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->load->view('admin/listPostsCity', $this->_data);
	}
	public function listPostsNewType() {
		$this->_data['head_title'] = 'Danh sách bài viết theo loại tin';
		$this->_data['page_title'] = 'Danh sách bài viết theo loại tin';
		$this->_data['sidebar']    = 3;
		$this->_data['sidebar_sm'] = 3.4;
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->load->view('admin/listPostsNewType', $this->_data);
	}
	public function editPostStreet($id) {
		$this->_data['head_title'] = 'Chỉnh sửa bài viết theo đường/phố';
		$this->_data['page_title'] = 'Chỉnh sửa bài viết theo đường/phố';
		$this->_data['list_city']  = $this->M_province->listProvince();
		$detailPost 			   = $this->M_Posts->detailPost($id);
		$this->_data['detailPost'] = $detailPost;
		$this->_data['list_dist']  = $this->M_province->listDistrictBy($detailPost['city']);
		$this->_data['list_street']= $this->M_province->listStreetBy($detailPost['district']);
		$this->load->view('admin/editPostStreet', $this->_data);
	}
	public function editPostDistrict($id) {
		$this->_data['head_title'] = 'Chỉnh sửa bài viết theo quận/huyện';
		$this->_data['page_title'] = 'Chỉnh sửa bài viết theo quận/huyện';
		$this->_data['list_city']  = $this->M_province->listProvince();
		$detailPost 			   = $this->M_Posts->detailPost($id);
		$this->_data['detailPost'] = $detailPost;
		$this->_data['list_dist']  = $this->M_province->listDistrictBy($detailPost['city']);
		$this->_data['list_street']= $this->M_province->listStreetBy($detailPost['district']);
		$this->load->view('admin/editPostDistrict', $this->_data);
	}
	public function editPostCity($id) {
		$this->_data['head_title'] = 'Chỉnh sửa bài viết theo tỉnh/thành';
		$this->_data['page_title'] = 'Chỉnh sửa bài viết theo tỉnh/thành';
		$this->_data['list_city']  = $this->M_province->listProvince();
		$detailPost 			   = $this->M_Posts->detailPost($id);
		$this->_data['detailPost'] = $detailPost;
		$this->_data['list_dist']  = $this->M_province->listDistrictBy($detailPost['city']);
		$this->_data['list_street']= $this->M_province->listStreetBy($detailPost['district']);
		$this->load->view('admin/editPostCity', $this->_data);
	}
	public function editTag($id) {  
		$this->_data['head_title'] = 'Chỉnh sửa tag phòng trọ nhà trọ';
		$this->_data['page_title'] = 'Chỉnh sửa tag phòng trọ nhà trọ';
		$detailTag 			   	   = $this->M_tags->detailTag($id);
		$this->_data['detailTag']  = $detailTag;
		$this->load->view('admin/editTag', $this->_data);
	}
	public function editTagHouse($id) {  
		$this->_data['head_title'] = 'Chỉnh sửa tag nhà nguyên căn';
		$this->_data['page_title'] = 'Chỉnh sửa tag nhà nguyên căn';
		$detailTag 			   	   = $this->M_tags->detailTag($id);
		$this->_data['detailTag']  = $detailTag;
		$this->load->view('admin/editTagHouse', $this->_data);
	}
	public function editTagApartment($id) {  
		$this->_data['head_title'] = 'Chỉnh sửa tag chung cư';
		$this->_data['page_title'] = 'Chỉnh sửa tag chung cư';
		$detailTag 			   	   = $this->M_tags->detailTag($id);
		$this->_data['detailTag']  = $detailTag;
		$this->load->view('admin/editTagApartment', $this->_data);
	}
	public function editTagHomestay($id) {  
		$this->_data['head_title'] = 'Chỉnh sửa tag homestay';
		$this->_data['page_title'] = 'Chỉnh sửa tag homestay';
		$detailTag 			   	   = $this->M_tags->detailTag($id);
		$this->_data['detailTag']  = $detailTag;
		$this->load->view('admin/editTagHomestay', $this->_data);
	}
	public function editPostNewType($id) {
		$this->_data['head_title'] = 'Chỉnh sửa bài viết theo loại tin';
		$this->_data['page_title'] = 'Chỉnh sửa bài viết theo loại tin';
		$this->_data['list_city']  = $this->M_province->listProvince();
		$detailPost 			   = $this->M_Posts->detailPost($id);
		$this->_data['detailPost'] = $detailPost;
		$this->_data['list_dist']  = $this->M_province->listDistrictBy($detailPost['city']);
		$this->_data['list_street']= $this->M_province->listStreetBy($detailPost['district']);
		$this->load->view('admin/editPostNewType', $this->_data);
	}
	public function createPosts() {
		$this->_data['head_title'] = 'Thêm bài viết tại đường / phố';
		$this->_data['page_title'] = 'Thêm bài viết tại đường / phố';
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->load->view('admin/createPosts', $this->_data);
	}
	public function createPostsDistrict() {
		$this->_data['head_title'] = 'Thêm bài viết tại quận / huyện';
		$this->_data['page_title'] = 'Thêm bài viết tại quận / huyện';
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->load->view('admin/createPostsDistrict', $this->_data);
	}
	public function createPostCity() {
		$this->_data['head_title'] = 'Thêm bài viết tại tỉnh / thành';
		$this->_data['page_title'] = 'Thêm bài viết tại tỉnh / thành';
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->load->view('admin/createPostCity', $this->_data);
	}
	public function createPostNewType() {
		$this->_data['head_title'] = 'Thêm bài viết theo loại tin';
		$this->_data['page_title'] = 'Thêm bài viết theo loại tin';
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->load->view('admin/createPostNewType', $this->_data);
	}
	public function ajaxCreatePost() {
		/*
		1. Loại tin
		2. Loại tin tại tỉnh/ thành phố
		3. Loại tin tại quận huyện
		4. Loại tin tại đường phố
		 */
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('new_type')) {
			$data = [
				'new_type' 		=> $this->input->post('new_type'),
				'city'			=> $this->input->post('cit_id'),
				'district'		=> $this->input->post('district_id'),
				'street_id'		=> $this->input->post('street_id'),
				'h1'			=> $this->input->post('h1'),
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm'),
				'created_at' 	=> date('d-m-Y'),
				'post_type' 	=> 4 // Loại tin tại đường phố
			];
			$checkPost = $this->M_Posts->checkPostStreet($data['new_type'], $data['post_type'], $data['street_id']);
			if ($checkPost ==  0) {
				$insert = $this->M_Posts->insert($data);
				if ($insert > 0) {
					$result = ['status' => true, 'messages' => 'Thêm mới bài viết thành công'];
				}
			} else {
				$result = ['status' => false, 'messages' => 'Bạn đã thêm bài viết tại địa điểm này'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxCreatePostDistrict() {
		/*
		1. Loại tin
		2. Loại tin tại tỉnh/ thành phố
		3. Loại tin tại quận huyện
		4. Loại tin tại đường phố
		 */
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('new_type')) {
			$data = [
				'new_type' 		=> $this->input->post('new_type'),
				'city'			=> $this->input->post('cit_id'),
				'district'		=> $this->input->post('district_id'),
				'h1'			=> $this->input->post('h1'),
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm'),
				'created_at' 	=> date('d-m-Y'),
				'post_type' 	=> 3 // Loại tin tại đường phố
			];
			$checkPost = $this->M_Posts->checkPostDistrict($data['new_type'], $data['post_type'], $data['district']);
			if ($checkPost ==  0) {
				$insert = $this->M_Posts->insert($data);
				if ($insert > 0) {
					$result = ['status' => true, 'messages' => 'Thêm mới bài viết thành công'];
				}
			} else {
				$result = ['status' => false, 'messages' => 'Bạn đã thêm bài viết tại địa điểm này'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxCreateTag() {
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('tag_name')) {
			$data = [
				'new_type' 		=> 1,
				'tag_name'		=> $this->input->post('tag_name'),
				'room_acreage'	=> $this->input->post('room_acreage'),
				'price'			=> $this->input->post('price'),
				'type'			=> $this->input->post('tag_type'),
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm'),
				'created_at' 	=> date('d-m-Y'),
			];
			$insert = $this->M_tags->insert($data);
			if ($insert > 0) {
				$result = ['status' => true, 'messages' => 'Thêm mới thành công'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxCreateHouse() {
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('tag_name')) {
			$data = [
				'new_type' 		=> 3,
				'tag_name'		=> $this->input->post('tag_name'),
				'price'			=> $this->input->post('price'),
				'type'			=> $this->input->post('tag_type'),
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm'),
				'created_at' 	=> date('d-m-Y'),
			];
			$insert = $this->M_tags->insert($data);
			if ($insert > 0) {
				$result = ['status' => true, 'messages' => 'Thêm mới thành công'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxCreateTagApartment() {
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('tag_name')) {
			$data = [
				'new_type' 		=> 2,
				'tag_name'		=> $this->input->post('tag_name'),
				'type'			=> 3,
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm'),
				'created_at' 	=> date('d-m-Y'),
			];
			$insert = $this->M_tags->insert($data);
			if ($insert > 0) {
				$result = ['status' => true, 'messages' => 'Thêm mới thành công'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxCreateTagHomestay() {
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('tag_name')) {
			$data = [
				'new_type' 		=> 4,
				'tag_name'		=> $this->input->post('tag_name'),
				'type'			=> 3,
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm'),
				'created_at' 	=> date('d-m-Y'),
			];
			$insert = $this->M_tags->insert($data);
			if ($insert > 0) {
				$result = ['status' => true, 'messages' => 'Thêm mới thành công'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxCreatePostCity() {
		/*
		1. Loại tin
		2. Loại tin tại tỉnh/ thành phố
		3. Loại tin tại quận huyện
		4. Loại tin tại đường phố
		 */
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('new_type')) {
			$data = [
				'new_type' 		=> $this->input->post('new_type'),
				'city'			=> $this->input->post('cit_id'),
				'h1'			=> $this->input->post('h1'),
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm'),
				'created_at' 	=> date('d-m-Y'),
				'post_type' 	=> 2 // Loại tin tại đường phố
			];
			$checkPost = $this->M_Posts->checkPostCity($data['new_type'], $data['post_type'], $data['city']);
			if ($checkPost ==  0) {
				$insert = $this->M_Posts->insert($data);
				if ($insert > 0) {
					$result = ['status' => true, 'messages' => 'Thêm mới bài viết thành công'];
				}
			} else {
				$result = ['status' => false, 'messages' => 'Bạn đã thêm bài viết tại địa điểm này'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxCreatePostNewType() {
		/*
		1. Loại tin
		2. Loại tin tại tỉnh/ thành phố
		3. Loại tin tại quận huyện
		4. Loại tin tại đường phố
		 */
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('new_type')) {
			$data = [
				'new_type' 		=> $this->input->post('new_type'),
				'h1'			=> $this->input->post('h1'),
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm'),
				'created_at' 	=> date('d-m-Y'),
				'post_type' 	=> 1 // Loại tin tại đường phố
			];
			$checkPost = $this->M_Posts->checkPostNewType($data['new_type'], $data['post_type']);
			if ($checkPost ==  0) {
				$insert = $this->M_Posts->insert($data);
				if ($insert > 0) {
					$result = ['status' => true, 'messages' => 'Thêm mới bài viết thành công'];
				}
			} else {
				$result = ['status' => false, 'messages' => 'Bạn đã thêm bài viết tại địa điểm này'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxUpdatePost() {
		/*
		1. Loại tin
		2. Loại tin tại tỉnh/ thành phố
		3. Loại tin tại quận huyện
		4. Loại tin tại đường phố
		 */
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('post_id')) {
			$post_id = $this->input->post('post_id');
			$data = [
				'new_type' 		=> $this->input->post('new_type'),
				'city'			=> $this->input->post('cit_id'),
				'district'		=> $this->input->post('district_id'),
				'street_id'		=> $this->input->post('street_id'),
				'h1'			=> $this->input->post('h1'),
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm'),
				'created_at' 	=> date('d-m-Y'),
				'post_type' 	=> 4 // Loại tin tại đường phố
			];
			$checkPost = $this->M_Posts->checkUpdateStreet($post_id,$data['new_type'], $data['post_type'], $data['street_id']);
			if ($checkPost ==  0) {
				$insert = $this->M_Posts->update($data,$post_id);
				if ($insert > 0) {
					$result = ['status' => true, 'messages' => 'Cập nhật bài viết thành công'];
				}
			} else {
				$result = ['status' => false, 'messages' => 'Bạn đã thêm bài viết tại địa điểm này'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxUpdateTag() {
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('tag_id')) {
			$tag_id = $this->input->post('tag_id');
			$data = [
				'tag_name'		=> $this->input->post('tag_name'),
				'type'			=> $this->input->post('tag_type'),
				'room_acreage'	=> $this->input->post('room_acreage'),
				'price'			=> $this->input->post('price'),
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm'),
			];
			$update = $this->M_tags->update($data, $tag_id);
			if ($update) {
				$result = ['status' => true, 'messages' => 'Cập nhật thành công'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxUpdateHouse() {
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('tag_id')) {
			$tag_id = $this->input->post('tag_id');
			$data = [
				'tag_name'		=> $this->input->post('tag_name'),
				'type'			=> $this->input->post('tag_type'),
				'price'			=> $this->input->post('price'),
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm')
			];
			$update = $this->M_tags->update($data, $tag_id);
			if ($update) {
				$result = ['status' => true, 'messages' => 'Cập nhật thành công'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxUpdateTagApartment() {
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('tag_id')) {
			$tag_id = $this->input->post('tag_id');
			$data = [
				'tag_name'		=> $this->input->post('tag_name'),
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm')
			];
			$update = $this->M_tags->update($data, $tag_id);
			if ($update) {
				$result = ['status' => true, 'messages' => 'Cập nhật thành công'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxUpdateTagHomestay() {
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('tag_id')) {
			$tag_id = $this->input->post('tag_id');
			$data = [
				'tag_name'		=> $this->input->post('tag_name'),
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm')
			];
			$update = $this->M_tags->update($data, $tag_id);
			if ($update) {
				$result = ['status' => true, 'messages' => 'Cập nhật thành công'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxUpdatePostDistrict() {
		/*
		1. Loại tin
		2. Loại tin tại tỉnh/ thành phố
		3. Loại tin tại quận huyện
		4. Loại tin tại đường phố
		 */
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('post_id')) {
			$post_id = $this->input->post('post_id');
			$data = [
				'new_type' 		=> $this->input->post('new_type'),
				'city'			=> $this->input->post('cit_id'),
				'district'		=> $this->input->post('district_id'),
				'h1'			=> $this->input->post('h1'),
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm'),
				'created_at' 	=> date('d-m-Y'),
				'post_type' 	=> 3 // Loại tin tại đường phố
			];
			$checkPost = $this->M_Posts->checkUpdateDistrict($post_id,$data['new_type'], $data['post_type'], $data['district']);
			if ($checkPost ==  0) {
				$insert = $this->M_Posts->update($data,$post_id);
				if ($insert > 0) {
					$result = ['status' => true, 'messages' => 'Cập nhật bài viết thành công'];
				}
			} else {
				$result = ['status' => false, 'messages' => 'Bạn đã thêm bài viết tại địa điểm này'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxUpdatePostCity() {
		/*
		1. Loại tin
		2. Loại tin tại tỉnh/ thành phố
		3. Loại tin tại quận huyện
		4. Loại tin tại đường phố
		 */
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('post_id')) {
			$post_id = $this->input->post('post_id');
			$data = [
				'new_type' 		=> $this->input->post('new_type'),
				'city'			=> $this->input->post('cit_id'),
				'h1'			=> $this->input->post('h1'),
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm'),
				'created_at' 	=> date('d-m-Y'),
				'post_type' 	=> 2 // Loại tin tại đường phố
			];
			$checkPost = $this->M_Posts->checkUpdateCity($post_id,$data['new_type'], $data['post_type'], $data['city']);
			if ($checkPost ==  0) {
				$insert = $this->M_Posts->update($data,$post_id);
				if ($insert > 0) {
					$result = ['status' => true, 'messages' => 'Cập nhật bài viết thành công'];
				}
			} else {
				$result = ['status' => false, 'messages' => 'Bạn đã thêm bài viết tại địa điểm này'];
			}
		}
		echo json_encode($result);
	}
	public function ajaxUpdatePostNewType() {
		/*
		1. Loại tin
		2. Loại tin tại tỉnh/ thành phố
		3. Loại tin tại quận huyện
		4. Loại tin tại đường phố
		 */
		$result = ['status' => false, 'messages' => 'Không thành công'];
		if ($this->input->post('post_id')) {
			$post_id = $this->input->post('post_id');
			$data = [
				'new_type' 		=> $this->input->post('new_type'),
				'h1'			=> $this->input->post('h1'),
				'content'		=> $this->input->post('content'),
				'seo_title'		=> $this->input->post('seo_title'),
				'seo_keyword'	=> $this->input->post('seo_key'),
				'seo_desc'		=> $this->input->post('seo_desc'),
				'title_crm'		=> $this->input->post('title_rcm'),
				'content_crm'	=> $this->input->post('content_rcm'),
				'created_at' 	=> date('d-m-Y'),
				'post_type' 	=> 1 // Loại tin tại đường phố
			];
			$checkPost = $this->M_Posts->checkUpdateNewType($post_id,$data['new_type'], $data['post_type']);
			if ($checkPost ==  0) {
				$insert = $this->M_Posts->update($data,$post_id);
				if ($insert > 0) {
					$result = ['status' => true, 'messages' => 'Cập nhật bài viết thành công'];
				}
			} else {
				$result = ['status' => false, 'messages' => 'Bạn đã thêm bài viết tại địa điểm này'];
			}
		}
		echo json_encode($result);
	}
	public function postNews() {
		$this->_data['head_title'] = 'Đăng tin';
		$this->_data['page_title'] = 'Đăng tin';
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->_data['list_user']  = $this->M_account->listUser();
		$this->load->view('admin/postNews', $this->_data);
	}
	public function postTag() { 
		$this->_data['head_title'] = 'Thêm tag phòng trọ';
		$this->_data['page_title'] = 'Thêm tag phòng trọ';
		$this->load->view('admin/postTag', $this->_data);
	}
	public function postTagHouse() { 
		$this->_data['head_title'] = 'Thêm tag nhà nguyên căn';
		$this->_data['page_title'] = 'Thêm tag nhà nguyên căn';
		$this->load->view('admin/postTagHouse', $this->_data);
	}
	public function postTagApartment() { 
		$this->_data['head_title'] = 'Thêm tag chung cư';
		$this->_data['page_title'] = 'Thêm tag chung cư';
		$this->load->view('admin/postTagApartment', $this->_data);
	}
	public function postTagHomeStay() { 
		$this->_data['head_title'] = 'Thêm tag homestay';
		$this->_data['page_title'] = 'Thêm tag homestay';
		$this->load->view('admin/postTagHomeStay', $this->_data);
	}
	public function editNews($id) {
		$this->_data['head_title'] = 'Cập nhật tin đăng';
		$this->_data['page_title'] = 'Cập nhật tin đăng';
		$this->_data['list_city']  = $this->M_province->listProvince();
		$this->_data['list_user']  = $this->M_account->listUser();
		$info_job 				   = $this->M_news->getInfoBy($id);
		$this->_data['info_job']   = $info_job;
		$this->load->view('admin/editNews', $this->_data);
	}
}
?>