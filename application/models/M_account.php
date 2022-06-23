<?php
/**
* 
*/
class M_account extends CI_Model
{
	
	protected $_table = 'users';
	protected $column_order = array('id','phone','email','name','address','cit_id','district_id','created_at');
	protected $column_search = array('id','name','email','phone','address','created_at'); 
	protected $order = array('id' => 'desc'); 
	/*datatable model */
	private function _get_datatables_query()
	{

		$this->db->from($this->_table);

		$i = 0;

        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {

                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                	$this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
                }
                $i++;
            }

        if(isset($_POST['order'])) // here order processing
        {
        	$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
        	$order = $this->order;
        	$this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function get_datatables()
    {
    	$this->_get_datatables_query();
    	if($_POST['length'] != -1)
    		$this->db->limit($_POST['length'], $_POST['start']);
    	$query = $this->db->get();
    	return $query->result();
    }

    public function count_filtered()
    {
    	$this->_get_datatables_query();
    	$query = $this->db->get();
    	return $query->num_rows();
    }

    public function count_all()
    {
    	$this->db->from($this->_table);
    	return $this->db->count_all_results();
    }
    /**/
	public function insert($data) {
		$this->db->insert($this->_table, $data);
		return $this->db->insert_id();
	}
	public function listUser() {
		$this->db->select('*');
		return $this->db->get($this->_table)->result_array();
	}
	public function update($data, $id) {
		$this->db->where('id', $id);
		return $this->db->update($this->_table,$data);
	}
	public function checkBy($key, $val) {
		$this->db->select($key);
		$this->db->where($key, $val);
		return $this->db->get($this->_table)->num_rows();
	}
	public function checkPassBy($id, $pass) {
		$this->db->where('id', $id);
		$this->db->where('password', $pass);
		return $this->db->get($this->_table)->num_rows();
	}
	public function checkLogin($email, $pass) {
		$this->db->select('id');
		$this->db->where('email', $email);
		$this->db->where('password', $pass);
		return $this->db->get($this->_table)->num_rows();
	}
	public function getInfoBy($email, $password) {
		$arr = ['id', 'email', 'phone', 'name'];
		$this->db->select($arr);
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		return $this->db->get($this->_table)->row_array();
	}
	public function getInfoUser($id) {
		$arr = ['id','email', 'phone', 'name', 'cit_id', 'district_id', 'address', 'avatar', 'created_at', 'password'];
		$this->db->select($arr);
		$this->db->where('id', $id);
		return $this->db->get($this->_table)->row_array();
	}
	public function getInfoPhone($id) {
		$this->db->select('phone');
		$this->db->where('id', $id);
		return $this->db->get($this->_table)->row_array();
	}
	public function checkEmailForgot($email) {
		$this->db->select('id');
		$this->db->where('email', $email);
		return $this->db->get($this->_table)->row_array();
	}
	public function updatePassByEmail($data, $email) {
		$this->db->where('email', $email);
		// $this->db->where('oauth_provider', 0);
		return $this->db->update($this->_table,$data);
	}
	public function getInfoUserPost($id) {
		$query 	= 'SELECT users.id, users.email, users.phone, users.name, users.cit_id, users.address, users.countView, users.avatar, users.created_at, city.cit_name as cit_name, city2.cit_name as district_name FROM users JOIN city ON users.cit_id = city.cit_id JOIN city2 ON users.district_id = city2.cit_id WHERE users.id = '.$id.'';
		return $this->db->query($query)->row_array();
	}
	public function getInfoUserPostNew($id) {
		$query 	= 'SELECT users.id, users.email, users.phone, users.name, users.cit_id, users.address, users.avatar, users.created_at FROM users  WHERE users.id = '.$id.'';
		return $this->db->query($query)->row_array();
	}
	public function checkAuth($auth_id,$auth_provider) { // 1 : facebook, 2 : google
		$this->db->select('id');
		$this->db->where('oauth_uid', $auth_id);
		$this->db->where('oauth_provider', $auth_provider);
		return $this->db->get($this->_table)->num_rows();
	}
	public function getAuth($auth_id,$auth_provider) { // 1 : facebook, 2 : google
		$this->db->select('id');
		$this->db->where('oauth_uid', $auth_id);
		$this->db->where('oauth_provider', $auth_provider);
		return $this->db->get($this->_table)->row_array();
	}
	public function deleteById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete($this->_table);
	}
	public function getInfoUserBy($id) {
		$this->db->select('*');
		$this->db->where('id', $id);
		return $this->db->get($this->_table)->row_array();
	}
}
?>