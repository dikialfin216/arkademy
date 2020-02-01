<?php 

/**
 * 
 */
class Data_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getData()
	{
		return $this->db->get('detail')->result_array();
	}

	function insert()
	{
		$data = [
			'Cashier' => $this->input->post('Cashier', TRUE),
			'Category' => $this->input->post('Category', TRUE),
			'Product' => $this->input->post('Product', TRUE),
			'Price' => $this->input->post('Price', TRUE)
		];

		$this->db->insert('detail', $data);
	}

	function delete($id)
	{
		$this->db->delete('detail', ['id' => $id]);
	}

	function getById($id)
	{
		return $this->db->get_where('detail', ['id'=>$id])->row_array();
	}
}