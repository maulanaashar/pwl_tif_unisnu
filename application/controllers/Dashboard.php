<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_indo');
	}

	public function index()
	{
		$data['se_indo'] = $this->M_indo->getSe_indo();
		$data['totalpositif'] = $this->M_indo->totalPositif();
		$data['totalsembuh'] = $this->M_indo->totalSembuh();
		$data['totalmeninggal'] = $this->M_indo->totalMeninggal();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template/footer');
	}

	public function tambah ()
	{
		$data = array(
			'Provinsi' => $this->input->post('Provinsi'),
			'Positif' => $this->input->post('Positif'),
			'Sembuh' => $this->input->post('Sembuh'),
			'Meninggal' => $this->input->post('Meninggal'),
		);

		$this->db->insert('se_indo',$data);
		$this->session->set_flashdata('info','Tambah Data kasus covi-19 berhasil !');
		redirect('update','refresh');
	}

}
