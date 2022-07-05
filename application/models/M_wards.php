<?php
/**
* 
*/
class M_Wards extends CI_Model
{
	
	protected $_table = 'ward';
	// protected $column_order = array('ward_id','ward_name','district_id');
	
    public function checkBy($email)
    {
        $this->db->where('email', $email);
		return $this->db->get($this->_table)->num_rows();
    }

	public function getList() {
		$this->db->select(['ward_id','ward_name','district_id']);
		$this->db->order_by('ward_id', 'DESC');
		return $this->db->get($this->_table)->result_array();
	}
}
?>
