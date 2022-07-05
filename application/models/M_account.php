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
}
?>
