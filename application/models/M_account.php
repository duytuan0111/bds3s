<?php
/**
* 
*/
class M_Account extends CI_Model
{
	
	protected $_table	= 'users';
	protected $_table1	= 'city';
	protected $_table2	= 'city2';
	protected $_table3	= 'ward';
	protected $_table4	= 'street';
	protected $_table5	= 'followed_user';
	protected $column_order = array('id','name','phone','email','gender','cityID','districtID','wardID','address','userType','newTypeInterest','newType','password','active','createdDate');
    protected $order = array('id' => 'desc');
	
    public function checkBy($email)
    {
		$this->db->select(['id']);
        $this->db->where('email', $email);
		return $this->db->get($this->_table)->num_rows();
    }
	public function insert_id($data) {
		$this->db->insert($this->_table, $data);
		return $this->db->insert_id();
	}
	public function getEmailby($id) {
		$this->db->select(['id','email']);
		$this->db->where('id', $id);
		return $this->db->get($this->_table)->row_array();
	}
	public function activeUser($data, $id) {
		$this->db->where('id', $id);
		return $this->db->update($this->_table, $data);
	}
	public function checkLogin($email, $pw, $userType) {
		$this->db->select('id');
		$this->db->where('email', $email);
		$this->db->where('password', $pw);
		$this->db->where('userType', $userType);
		$this->db->where('active', 1);
		return $this->db->get($this->_table)->num_rows();
	}
	public function getInfoBy($email, $pw) {
		$this->db->select('*');
		$this->db->where('email', $email);
		$this->db->where('password', $pw);
		return $this->db->get($this->_table)->row_array();
	}
	// tinh thanh
	public function listProvince() {
		$this->db->select(['cit_id', 'cit_name']);
		return $this->db->get($this->_table1)->result_array();
	}
	// quan huyen
	public function listDistrictBy($id) {
		$this->db->select(['cit_id', 'cit_name']);
		$this->db->where('cit_parent', $id);
		return $this->db->get($this->_table2)->result_array();
	}
	public function getDistrictById($id) {
		$this->db->select('cit_name');
		$this->db->where('cit_id', $id);
		return $this->db->get($this->_table2)->row_array();
	}
	// phuong xa
	public function listWardBy($id) {
		$this->db->select(['ward_id', 'ward_name']);
		$this->db->where('district_id', $id);
		return $this->db->get($this->_table3)->result_array();
	}

	public function checkEmailForgot($data) {
		$this->db->select('id');
		$this->db->where('email', $data);
		return $this->db->get($this->_table)->num_rows();
	}
	public function getIdForgot($data) {
		$this->db->select(['id']);
		$this->db->where('email', $data);
		return $this->db->get($this->_table)->row_array();
	}

	public function ForgotPasswordUpdate($id, $data) {
		$this->db->where('id', $id);
		return $this->db->update($this->_table, $data);
	}
	public function checkTypeUser($id) {
		$this->db->select('*');
		$this->db->where('id', $id);
		return $this->db->get($this->_table)->row_array();
	}

	public function updateAccount($data, $id) {
		$this->db->set($data);
		$this->db->where('id', $id);
		return $this->db->update($this->_table);
	}

	public function checkOldPW($id, $pw) {
		$this->db->select('id');
		$this->db->where('id', $id);
		$this->db->where('password', $pw);
		return $this->db->get($this->_table)->num_rows();
	}
	public function UpdatePassword($id, $pw) {
		$this->db->set('password', $pw);
		$this->db->where('id', $id);
		return $this->db->update($this->_table);
	}
	public function updateAVT($id, $data) {
		$this->db->set($data);
		$this->db->where('id', $id);
		return $this->db->update($this->_table);
	}
	public function updateImage($id, $data) {
		$this->db->set($data);
		$this->db->where('id', $id);
		return $this->db->update($this->_table);
	}
	public function getAVTInfo($id) {
		$this->db->select(['user_avt', 'avtDate']);
		$this->db->where('id', $id);
		return $this->db->get($this->_table)->row_array();
	}
	public function getImgInfo($id) {
		$this->db->select(['coverImage', 'coverImageDate']);
		$this->db->where('id', $id);
		return $this->db->get($this->_table)->row_array();
	}
	public function Investor() {
		$this->db->select(['userID', 'UserFollowed', 'companyName']);
		$this->db->join('users', 'followed_user.userID = users.id');
		$this->db->order_by('UserFollowed', 'DESC');
		return $this->db->get($this->_table5)->result_array();
	}
	public function checkRole($id) {
		$this->db->select('TeamRole');
		$this->db->where('id', $id);
		return $this->db->get($this->_table)->row_array();
	}
	public function updateRole($id) {
		$this->db->set('TeamRole', 1);
		$this->db->where('id', $id);
		return $this->db->update($this->_table);
	}
	public function checkEmailTeamManagement($email) {
		$this->db->select('id');
		$this->db->where('email', $email);
		return $this->db->get($this->_table)->num_rows();
	}
	public function getInfoByEmail($email) {
		$this->db->select(['id', 'avtDate', 'user_avt', 'name', 'email', 'phone']);
		$this->db->where('email', $email);
		return $this->db->get($this->_table)->row_array();
	}
	public function checkPhoneTeamManagement($phone) {
		$this->db->select('id');
		$this->db->where('phone', $phone);
		return $this->db->get($this->_table)->num_rows();
	}
	public function getInfoByPhone($phone) {
		$this->db->select(['id', 'avtDate', 'user_avt', 'name', 'email', 'phone']);
		$this->db->where('phone', $phone);
		return $this->db->get($this->_table)->row_array();
	}
	public function getInfoByID($id) {
		$this->db->select(['id', 'avtDate', 'user_avt', 'name', 'email', 'phone', 'money']);
		$this->db->join('wallet', 'users.id = wallet.userID');
		$this->db->where('id', $id);
		return $this->db->get($this->_table)->row_array();
	}
	public function GetListUsers($offset, $perpage,$keyword,$type_news,$cit_id,$district,$follow,$user_id) {
		if ($type_news != '') {
            $this->db->where('newType',$type_news);
        }
        if ($cit_id != '' && $cit_id != 0) {
            $this->db->where('cityID', $cit_id);
        }
		if ($district != '') {
            $this->db->where('districtID', $district);
        }
        if ($keyword != '') {
            $this->db->like('name', $keyword);
        }
		if($follow == 1)
		{
			$this->db->join('followed_user','followed_user.UserFollowed = users.id');
			$this->db->where('followed_user.UserID',$user_id);
		}
		elseif($follow == 0)
		{
			$this->db->join('followed_user','followed_user.UserID = users.id');
			$this->db->where('followed_user.UserFollowed',$user_id);
		}
		$this->db->select('*');
		$this->db->join('city2','city2.cit_id = users.cityID');
		$this->db->where('userType',0);
		$this->db->limit($perpage, $offset);
        $this->db->order_by('users.id', 'desc');
		return $this->db->get($this->_table)->result_array();
	}

	public function GetPotential($offset, $perpage,$keyword,$type_news,$cit_id,$district,$user_id) {
		if ($type_news != '') {
            $this->db->where('newType',$type_news);
        }
        if ($cit_id != '' && $cit_id != 0) {
            $this->db->where('cityID', $cit_id);
        }
		if ($district != '') {
            $this->db->where('districtID', $district);
        }
        if ($keyword != '') {
            $this->db->like('name', $keyword);
        }
		$this->db->select('*');
		$this->db->join('city2','city2.cit_id = users.cityID');
		$this->db->where('userType',0);
		$this->db->limit($perpage, $offset);
        $this->db->order_by('users.id', 'desc');
		return $this->db->get($this->_table)->result_array();
	}
	public function count_Potential($keyword,$type_news,$cit_id,$district,$user_id) {
        if ($type_news != '') {
            $this->db->where('newType',$type_news);
        }  
		if ($district != '') {
            $this->db->where('districtID', $district);
        } 
        if ($keyword != '') {
            $this->db->like('name', $keyword);
        }
       
        if ($cit_id !== '' && $cit_id != 0) {
            $this->db->where('cityID', $cit_id);
        }
		$this->db->select('*');
		$this->db->where('userType',0);
		$this->db->join('city2','city2.cit_id = users.cityID');
		return $this->db->get($this->_table)->num_rows();
	}

	public function CountFollowUsers($user_id) {
		$this->db->join('followed_user','followed_user.UserFollowed = users.id');
		$this->db->where('followed_user.UserID',$user_id);
		return $this->db->get($this->_table)->num_rows();
	}
	public function CountFollower($user_id) {
		$this->db->join('followed_user','followed_user.UserID = users.id');
		$this->db->where('followed_user.UserFollowed',$user_id);
		return $this->db->get($this->_table)->num_rows();
	}

	public function countAll_Users($keyword,$type_news,$cit_id,$district,$follow,$user_id) {
        if ($type_news != '') {
            $this->db->where('newType',$type_news);
        }  
		if ($district != '') {
            $this->db->where('districtID', $district);
        } 
        if ($keyword != '') {
            $this->db->like('name', $keyword);
        }
       
        if ($cit_id !== '' && $cit_id != 0) {
            $this->db->where('cityID', $cit_id);
        }
		if($follow == 1)
		{
			$this->db->join('followed_user','followed_user.UserFollowed = users.id');
			$this->db->where('followed_user.UserID',$user_id);
		}
		$this->db->select('*');
		$this->db->where('userType',0);
		$this->db->join('city2','city2.cit_id = users.cityID');
		return $this->db->get($this->_table)->num_rows();
	}
	public function countAllPotential() {
		$this->db->select('*');
		$this->db->where('userType',0);
		$this->db->join('city2','city2.cit_id = users.cityID');
		return $this->db->get($this->_table)->num_rows();
	}

	public function TenantInformation($id_user) {
		$this->db->select('*');
		$this->db->join('city2','city2.cit_id = users.cityID');
		$this->db->where('id',$id_user);
		return $this->db->get($this->_table)->row_array();
	}

	public function CountNews($id) {
		$this->db->select('*');
		$this->db->join('post_news','post_news.customer = users.id');
		$this->db->where('id',$id);
		return $this->db->get($this->_table)->num_rows();
	}

	public function followUser($data_insert) {
		$this->db->insert('followed_user',$data_insert);
		return $this->db->insert_id();
	}
	public function unFollowUser($user_id,$user_follow) {
		$this->db->where('userID',$user_id);
		$this->db->where('UserFollowed',$user_follow);
		return $this->db->delete('followed_user');
	}

	public function getListFollow($id_user) {
		$this->db->select('UserFollowed');
		$this->db->where('userID',$id_user);
		return $this->db->get('followed_user')->result_array();
	}

	public function InsertCustomerViews($data_insert) {
		$this->db->insert('customers_point',$data_insert);
		return $this->db->insert_id();
	}

	public function CheckCustomerPoints($id_user,$id_customer) {
		$this->db->select('*');
		$this->db->where('customer_id_user',$id_user);
		$this->db->where('customer_id_customer',$id_customer);
		return $this->db->get('customers_point')->num_rows();
	}

	public function CustomerFromPoints($id_user) {
		$this->db->select('customer_id_customer');
		$this->db->where('customer_id_user',$id_user);
		return $this->db->get('customers_point')->result_array();
	}

	public function GetCustomerFromPoints($offset, $perpage,$keyword,$type_news,$cit_id,$district,$user_id) {
		if ($type_news != '') {
            $this->db->where('newType',$type_news);
        }
        if ($cit_id != '' && $cit_id != 0) {
            $this->db->where('cityID', $cit_id);
        }
		if ($district != '') {
            $this->db->where('districtID', $district);
        }
        if ($keyword != '') {
			$keyword2 = substr($keyword,0,4);
			if(is_numeric($keyword2))
			{
				$this->db->like('phone', $keyword);
			}
			else
			{
				$this->db->like('name', $keyword);
			}
        }
		$this->db->select('*');
		$this->db->join('customers_point','customers_point.customer_id_customer = users.id');
		$this->db->where('userType',0);
		$this->db->limit($perpage, $offset);
        $this->db->order_by('users.id', 'desc');
		return $this->db->get($this->_table)->result_array();
	}
	public function countCustomerPoints($keyword,$type_news,$cit_id,$district,$user_id) {
        if ($type_news != '') {
            $this->db->where('newType',$type_news);
        }  
		if ($district != '') {
            $this->db->where('districtID', $district);
        } 
        if ($keyword != '') {
            $this->db->like('name', $keyword);
        }
       
        if ($cit_id !== '' && $cit_id != 0) {
            $this->db->where('cityID', $cit_id);
        }
		$this->db->select('*');
		$this->db->where('userType',0);
		$this->db->where('customer_id_user',$user_id);
		$this->db->join('customers_point','customers_point.customer_id_customer = users.id');
		return $this->db->get($this->_table)->num_rows();
	}
	public function countAllCustomerPoints($user_id) {
		$this->db->select('*');
		$this->db->where('userType',0);
		$this->db->where('customer_id_user',$user_id);
		$this->db->join('customers_point','customers_point.customer_id_customer = users.id');
		return $this->db->get($this->_table)->num_rows();
	}
}
?>
