<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	function __contruct(){
		parent::__contruct();
		if($this->session->userdata('stat')!= "login" and $this->session->userdata('status')!='2')
		{
			redirect('login','refresh');
		}
		
		$this->load->model('m_login');

	}
	public function index()
	{
		if($this->session->userdata("nama") == '')
		{
			echo 'please login !!<Br>
			<a href="'.base_url('login').'">Login</a>
			';
		}else{
			$id = $this->session->userdata('id');
			$data = array(
			'id' => $this->session->userdata('id'),
			'nama' => $this->session->userdata('nama'),
			'notelp' => $this->session->userdata('notelp'),
			'status' => $this->session->userdata('status'),
			'pesan' => $this->db->query("select *, count(send_to) as jum  from chat,login,data_diri where login.id = chat.send_by and data_diri.id_login = login.id and send_to = '$id'")->result(),
			);
			#$id = $this->session->userdata('id');
			$data['query'] = $this->db->query("select *, kabupaten.nama as nakab, provinsi.nama as naprov, login.nama as username from data_diri,login,provinsi,kabupaten where data_diri.id = login.id and data_diri.id_prov = provinsi.id_prov and data_diri.id_kab = kabupaten.id_kab and login.id ='$id'")->row();
			#var_dump($data['query']);
			#var_dump($status);
			$this->load->view('header',$data);
			$this->load->view('content');
			$this->load->view('footer');
		}
		
	}

	public function home()
	{
		if($this->session->userdata("nama") == '')
		{
			echo 'please login !!<Br>
			<a href="'.base_url('login').'">Login</a>
			';
		}else{
			$data = array(
			'id' => $this->session->userdata('id'),
			'nama' => $this->session->userdata('nama'),
			'notelp' => $this->session->userdata('notelp'),
			'status' => $this->session->userdata('status')
			);
			$id = $this->session->userdata('id');
			$data['query'] = $this->db->query("select *, kabupaten.nama as nakab, provinsi.nama as naprov, login.nama as username from data_diri,login,provinsi,kabupaten where data_diri.id = login.id and data_diri.id_prov = provinsi.id_prov and data_diri.id_kab = kabupaten.id_kab and login.id ='$id'")->row();
			$this->load->view('header',$data);
			$this->load->view('Member/Home');
			$this->load->view('footer');
		}
	}

	public function detailuser($id_user)
	{
		$id = $this->session->userdata('id');
			$data['query'] = $this->db->query("select *, kabupaten.nama as nakab, provinsi.nama as naprov, login.nama as username from data_diri,login,provinsi,kabupaten where data_diri.id = login.id and data_diri.id_prov = provinsi.id_prov and data_diri.id_kab = kabupaten.id_kab and login.id ='$id'")->row();
		$data['Datadiri'] = $this->db->query("select *, kabupaten.nama as nakab, provinsi.nama as naprov, login.nama as username from data_diri,login,provinsi,kabupaten where data_diri.id = login.id and data_diri.id_prov = provinsi.id_prov and data_diri.id_kab = kabupaten.id_kab and login.id ='$id_user'")->row();
		$data['layanan'] = $this->db->query("select * from layanan,user_layanan where layanan.id = user_layanan.id_layanan and user_layanan.id_login='$id_user'")->result();
		$data['idt'] = $this->db->query("select * from identitas,login where identitas.id_login = login.id and identitas.id_login ='$id_user'")->result();

		$this->load->view('Header', $data);
		$this->load->view('Member/detailuser');
		$this->load->view('Footer');
	}

	public function pencarian(){
		$id = $this->input->post('cari');
		$data = array(
			'cari' => $id,
			'result' => $this->db->query("select *, login.nama as nalog, login.id as idlog, layanan.nama as namlay, layanan.id as idlay from login, data_diri, layanan, user_layanan where login.id = data_diri.id_login and login.id = user_layanan.id_login and user_layanan.id_layanan = layanan.id and (layanan.nama like'%$id%' or login.nama like '%$id%') ")->result(),
			'id' => $this->session->userdata('id'),
			'nama' => $this->session->userdata('nama'),
			'notelp' => $this->session->userdata('notelp'),
			'status' => $this->session->userdata('status'),
			'pesan' => $this->db->query("select *, count(send_to) as jum  from chat,login,data_diri where login.id = chat.send_by and data_diri.id_login = login.id and send_to = '$id'")->result(),
		);
		// var_dump($id);
		#var_dump($data);
		if(count($data['result'])>0){
			$this->load->view('Header',$data);
			#$this->load->view('Member/pencarian');
			$this->load->view('cari');
			$this->load->View('Footer');	
		}else{
			#var_dump($data['result']);
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
			redirect('member/','refresh');
		}
		
		
	}

	function pesananku(){
		$id = $this->session->userdata('id');
		$data = array(
			'pemesanan' => $this->db->query("select *, pemesanan_akuntan.status as natus, pemesanan_akuntan.id as idpemesanan, layanan.nama as nalay, login.nama as nalog from pemesanan_akuntan, login, layanan where pemesanan_akuntan.idakuntan = login.id and layanan.id = pemesanan_akuntan.idlayanan and pemesanan_akuntan.idpemesan = ?",array($this->session->userdata('id')))->result(),
		);
		$this->load->view('Header', $data, FALSE);
		$this->load->view('Member/pemesananku');
		$this->load->view('Footer');

	}

	function echopre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}

	function coba(){
		
	}



	
}

/* End of file Member.php */
/* Location: ./application/controllers/Member.php */