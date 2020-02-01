<?php 

/**
 * 
 */
class Arkademy extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Data_model");

	}
	
	function index()
	{
		$data['table'] = $this->Data_model->getData();
		$data['judul'] = "Index";	
		$this->load->view('templates/header', $data);
		$this->load->view('arkademy/index', $data);
		$this->load->view('templates/footer');
	}

	function add()
	{
		$this->Data_model->insert();
		redirect('arkademy');
	}

	function delete($id)
	{
		$this->Data_model->delete($id);
		$this->session->set_flashdata('delete', 'delete');
		redirect('arkademy');
	}
}