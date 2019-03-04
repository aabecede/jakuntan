<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		
		if($this->session->userdata('stat')!= "login")
		{
			redirect('login/admin','refresh');
		}
		$this->load->model('m_admin');
		#$this->load->helper('form','url');
	}

	public function index()
	{
		$data = array(
			''
		);
		$this->load->view('admin/index');# $data, FALSE);
	}

	public function home()
	{
		# code...
		#$this->load->view('admin/home');#, $data, FALSE);
		$data = array(
			'nama' => $this->session->userdata('nama'),
		);
	#	$this->pre($data);
		$this->load->view('admin/header',$data,FALSE);
		$this->load->view('admin/content');
		$this->load->view('admin/footer');
	}

	public function datamember()
	{
		# code...
		$data = array(
			'nama' => $this->session->userdata('nama'),
			'datamember'=> $this->m_admin->get_data_where('login,data_diri','data_diri.id_login = login.id and login.status = 2')->result(),
		);
		#$this->pre($data);
		$this->load->view('admin/header',$data,FALSE);
		$this->load->view('admin/datamember');
		$this->load->view('admin/footer');
	}

	public function dataakuntan()
	{
		# code...
		$data = array(
			'nama' => $this->session->userdata('nama'),
			'dataakuntan'=> $this->m_admin->get_data_where('login,data_diri','data_diri.id_login = login.id and login.status = 1')->result(),
		);
		#$this->pre($data);
		$this->load->view('admin/header',$data,FALSE);
		$this->load->view('admin/dataakuntan');
		$this->load->view('admin/footer');
	}

	public function datatransaksi()
	{
		# code...
		$data = array(
			'nama' => $this->session->userdata('nama'),
			'datatransaksi'=> $this->m_admin->get_transaksi()->result(),
			'namapemesan' => $this->m_admin->get_nama_transaksi(),
		);
		$this->load->view('admin/header',$data,FALSE);
		$this->load->view('admin/datatransaksi');
		$this->load->view('admin/footer');
		#$this->pre($this->session->userdata('nama'));
		#$this->pre($data['namapemesan']);
	}

	function pre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */