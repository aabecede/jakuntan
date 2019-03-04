<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){

			parent::__construct();		
			$this->load->model('m_login');
	 
	}

	public function index()
	{
		$this->load->view('daftar/login');
		$this->session->sess_destroy();
	}

	public function proses()
	{
		$usname = $this->input->post('email');
		$pwd = $this->input->post('password');
		$status = $this->input->post('status');
		$where = array(
			'email' => $usname,
			'password' => md5($pwd),
			'status' => $status
		);

		$cek = $this->m_login->cek_login("login",$where)->num_rows();
		$query = $this->m_login->cek_login("login",$where)->row();
		

		if($cek > 0)
		{
			if($status  == 1)
			{
				$data_session = array(
					'id' => $query->id,
				'email' => $usname,
				'nama' => $query->nama,
				'notelp' => $query->notelp,
				'stat' => 'login',
				'status' => $status,
				'stat_log' => $query->stat_log,
				);
				if($query->stat_log == 0){
					$this->session->set_userdata($data_session);
					redirect('akuntan/seleksi','refresh');
				}else{
					$this->session->set_userdata($data_session);
				redirect(base_url('akuntan'),'refresh');	
				}
				
			}else{
				$data_session = array(
					'id' => $query->id,
				'email' => $usname,
				'nama' => $query->nama,
				'notelp' => $query->notelp,
				'stat' => 'login',
				'status' => $status,
				);

				
					$this->session->set_userdata($data_session);
					redirect(base_url('member'),'refresh');	
				
			}
			

		}else{
			echo '<script>alert("username dan password salah");</script>';
			#var_dump($this->input->post('email'));
			redirect(base_url('login'),'refresh');
		}
		#echo json_encode($cek);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'),'refresh');
	}

	public function apro()
	{
		# code...
		$data = $this->input->post();
		if($data == true){
			if($data['email'] == "admin@admin.com" and $data['pw'] == "1234"){
				$data_session = array(
					'user' => $data['email'],
					'nama' => 'admin',
					'stat' => 'login',
				);
				$this->session->set_userdata($data_session);
				redirect('admin/home','refresh');
			}else{
				?>
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		  <div class="container">
		  	<div class="alert alert-warning">
			    <strong>Warning!</strong> Unfound User !
			  </div>
		  </div>
			<?php
			redirect('admin/','refresh');
			}
		}else{
			?>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		  <div class="container">
		  	<div class="alert alert-warning">
			    <strong>Warning!</strong> Not Found !
			  </div>
		  </div>
			<?php
			redirect('admin/','refresh');
		}
	}

	public function admin()
	{
		# code...
		$this->load->view('admin/index');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */