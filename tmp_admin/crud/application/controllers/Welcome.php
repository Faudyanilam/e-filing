<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_CRUD');
	}
	
	public function index()
	{
		$recordMhs = $this->M_CRUD->getData();
		$DATA = array('data_mhs' => $recordMhs);
		$this->load->view('home', $DATA);
	}
	public function formtambah(){
		$this->load->view('form_tambah_mhs');
	}
	public function formedit($id){
		$recordMhs = $this->M_CRUD->getDataEdit($id);
		$DATA = array('data_mhs' => $recordMhs);
		$this->load->view('form_edit_mhs', $DATA);
	}
	public function aksitambah(){
		$npwp = $this->input->post('npwp');
		$efin = $this->input->post('efin');
		$id_paket = $this->input->post('id_paket');

		$dataInsert = array(
			'id_daftar_npwp'=>$npwp,
			'efin'=>$efin,
			'id_paket'=>$id_paket,
		);
		$dataInsert2 = array(
			'npwp'=>$npwp,
			'efin'=>$efin,
		);
		
		$this->M_CRUD->insertData($dataInsert);
		$this->M_CRUD->insertData2($dataInsert2);
		redirect(base_url('Welcome'));
	}
	public function aksiedit(){
		$id = $this->input->post('id_regis');
		$npwp = $this->input->post('npwp');
		$efin = $this->input->post('efin');
	
		$dataUpdate = array(
			'efin' => $efin,
		);
		$this->M_CRUD->editData($dataUpdate, $id);
		redirect (base_url());
	}
	public function aksihapus($id, $npwp, $efin){
		$this->M_CRUD->deleteData($id);
		$this->M_CRUD->deleteData2($npwp, $efin);
		redirect(base_url());
	}
	
}
