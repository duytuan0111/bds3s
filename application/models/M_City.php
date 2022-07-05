<?php
Class M_City extends CI_Model
{
	protected $_table = 'city';
	// protected $order = array('cit_id' => 'desc');

	public function get_data_city()
	{
		$this->db->from($this->_table);

		$i = 0;
	}
	
	public function getList() {
		$this->db->select(['cit_id','cit_name']);
		$this->db->order_by('cit_id', 'DESC');
		return $this->db->get($this->_table)->result_array();
	}
}
?>
