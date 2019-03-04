<?php
class Daftar extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('daftar/daftar');
		$this->load->view('footer');

	}

	public function member()
	{
		$this->load->view('header');
		#inputan
		$data = array(
			'id' => '',
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'nama' => $this->input->post('nama'),
			'notelp' => $this->input->post('notelp'),
			'status' => $this->input->post('status')
		);
		$where = array(
			'email' => $this->input->post('email')
		);
		
		$cek = $this->m_login->cek_login("login",$where)->num_rows();
		if($this->input->post('email') == true)
		{
			if($cek > 0) 
			{
				$data['alert'] ='<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  email sudah terdaftar
							</div>';
							
							$this->load->view('daftar/member', $data);	
			}else{
				$this->db->insert('login', $data);
				$data['alert'] ='<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  Berhasil Melakukan Pendaftaran
							  <var><a href="'.base_url('login').'">Silahkan Melakukan Login</a></var>
							</div>';
							
							$this->load->view('daftar/member', $data);
			}
			
		}else{
			
			$this->load->view('daftar/member');	
		}
		
		$this->load->view('footer');
	}

	public function akuntan()
	{
		$this->load->view('header');
		#inputan
		$data = array(
			'id' => '',
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'nama' => $this->input->post('nama'),
			'notelp' => $this->input->post('notelp'),
			'status' => $this->input->post('status'),
			'stat_log' => '0',
		);
		$where = array(
			'email' => $this->input->post('email')
		);
		
		$cek = $this->m_login->cek_login("login",$where)->num_rows();
		if($this->input->post('email') == true)
		{
			if($cek > 0) 
			{
				$data['alert'] ='<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  email sudah terdaftar
							</div>';
							$this->load->view('daftar/akuntan', $data);	
			}else{
				$this->db->insert('login', $data);
				$data['alert'] ='<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							  Berhasil Melakukan Pendaftaran
							  <var><a href="'.base_url('login').'">Silahkan Melakukan Login</a></var>
							</div>';
							$this->load->view('daftar/akuntan', $data);
			}
			
		}else{
			
			$this->load->view('daftar/akuntan');	
		}
		
		$this->load->view('footer');
	}
	
}
?>
