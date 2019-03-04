<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akuntan extends CI_Controller {

	function __construct(){
		parent::__construct();
		if($this->session->userdata('stat')!= "login")
		{
			redirect(base_url('login'),'refresh');
		}
		$this->load->model('m_login');
		$this->load->model('m_member');
		$this->load->model('mcombox');
		$this->load->helper('form','url');

	}

	public function index()
	{
		if($this->session->userdata('id') == '' )
		{
			echo '<script>alert("Silahkan login:);</script><br>
			<a href="'.base_url('login').'">Login</a>
			';

		}else{

			$where = array('id_login' => $this->session->userdata('id'));
			$cek = $this->m_login->tab_data('data_diri');

			
			
			
			if(@$cek['id_prov'] > 0){
				$this->load->view('Content',$data);

			}else{
				redirect('datadiri','refresh');
			}
		}
	}

	

	public function data_diri()
	{
		#data
		$data = array(
			'id' => $this->session->userdata('id'),
			'nama' => $this->session->userdata('nama'),
			'notelp' => $this->session->userdata('notelp'),
			'status' => $this->session->userdata('status')
			);

		#query
		$id = $this->session->userdata('id');
		$data['query'] = $this->db->query("select *, kabupaten.nama as nakab, provinsi.nama as naprov, login.nama as username from data_diri,login,provinsi,kabupaten where data_diri.id = login.id and data_diri.id_prov = provinsi.id_prov and data_diri.id_kab = kabupaten.id_kab and login.id ='$id'")->row();
		#pesan
		$data['pesan'] = $this->db->query("select *, count(send_to) as jum  from chat,login,data_diri where login.id = chat.send_by and data_diri.id_login = login.id and send_to = '$id'")->result();
		
		
		

		#layanan
		$data['layanan'] = $this->db->query("select * from layanan where id not in(select id_layanan from user_layanan where id_login='$id')")->result();

		#userlayanan
		$data['userlayanan'] = $this->db->query("select * from layanan,user_layanan where layanan.id = user_layanan.id_layanan and user_layanan.id_login='$id'")->result();
		$data['idt'] = $this->db->query("select * from identitas,login where identitas.id_login = login.id and identitas.id_login ='$id'")->result();

		#combox
		$data['provinsi'] = $this->mcombox->get_provinsi();
		$id_prov = $this->input->post('id_prov');
		$arrstate = $this->mcombox->get_kota_byprov($id_prov);

		#pemesanan
		$data['pemesanan'] = $this->db->query("select *, pemesanan_akuntan.id as idpemesanan, layanan.nama as nalay, login.nama as nalog from pemesanan_akuntan, login, layanan where pemesanan_akuntan.idpemesan = login.id and layanan.id = pemesanan_akuntan.idlayanan and pemesanan_akuntan.idakuntan = ?",array($this->session->userdata('id')))->result();
		

		

		$this->load->view('header',$data);
		$this->load->view('daftar/data_diri');
		$this->load->view('footer');
	}

	public function update_datadiri()
	{
		$id = $this->session->userdata('id');
		$filename = $id.time();
		$config['upload_path'] = 'assets/images/jakuntan/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['file_name'] = $filename;
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$gambar = $this->upload->data();
			$db = array(
			'jk' => $this->input->post('jk'),
			'id_prov' => $this->input->post('id_prov'),
			'id_kab' => $this->input->post('id_kab'),
			'alamat' => $this->input->post('alamat'),
			'foto' => $gambar['file_name'],
			'aboutme' => $this->input->post('aboutme')
			);
			$db2 = array(
			'nama' => $this->input->post('nama'),
				'notelp' => $this->input->post('notelp'));
			$where = array('id' => $id);
			$cek = $this->m_login->update($where,$db,'data_diri');
			$this->m_login->update($where,$db2,'login');

			if($cek = true)
			{

				echo '<script>alert("Berhasil update");</script>';
				redirect('datadiri','refresh');	
			}else{
				echo '<script>alert("Gagal update")</script>';
				redirect('datadiri','refresh');
			}
		}


		
	}

	public function updatelayanan()
	{
		$db = array(
			'id_layanan' => $this->input->post('id_layanan'),
			'harga' => $this->input->post('harga')
		);
		$where = array(
			'id_login' => $this->session->userdata('id'));
		$cek = $this->m_login->update($where,$db,'user_layanan');

		if($cek = true)
		{
			echo '<script>alert("Berhasil update");</script>';
			redirect('datadiri','refresh');	
		}else{
			echo '<script>alert("Gagal update")</script>';
			redirect('datadiri','refresh');
		}
	}

	public function layanan()
	{
		$db = array(
			'id_login'	=> $this->session->userdata('id'),
			'id_layanan' => $this->input->post('id_layanan'),
			'harga' => $this->input->post('harga')
		);
		
		$cek = $this->db->insert('user_layanan',$db);
		if($cek = true)
		{
			echo '<script>alert("Berhasil Menambahkan layanan")</script>';
			redirect('datadiri','refresh');
		}else{
			echo '<script>alert("Gagal tambah layanan")</script>';
			redirect('datadiri','refresh');
		}
	}

	public function jasaku()
	{
		$data = array(
			'id' => $this->session->userdata('id'),
			'nama' => $this->session->userdata('nama'),
			'notelp' => $this->session->userdata('notelp'),
			'status' => $this->session->userdata('status')
			);
		#query
		$id = $this->session->userdata('id');
		$data['pesan'] = $this->db->query("select *, count(send_to) as jum  from chat,login,data_diri where login.id = chat.send_by and data_diri.id_login = login.id and send_to = '$id'")->result();
		$data['query'] = $this->db->query("select *, kabupaten.nama as nakab, provinsi.nama as naprov, login.nama as username from data_diri,login,provinsi,kabupaten where data_diri.id = login.id and data_diri.id_prov = provinsi.id_prov and data_diri.id_kab = kabupaten.id_kab and login.id ='$id'")->row();

		$this->load->view('header',$data);
		$this->load->view('akuntan/jasaku');
		$this->load->view('footer');
	}

	public function up_identitas()
	{
		$id = $this->session->userdata('id');
		$filename = $id.'_'.time();
		$config['upload_path'] = 'assets/images/jakuntan/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '1024';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['file_name'] = $filename;
		
		$this->load->library('upload', $config);
		
		if ( !$this->upload->do_upload('npwp')){
			$error = array('error' => $this->upload->display_errors());
			var_dump($error);
		}
		else{
			#upload
			$gambar = $this->upload->data();
			$db = array(
			'npwp' => $gambar['file_name'],
			'nama_bank' => $this->input->post('nama_bank'),
			'nomor_rekening' => $this->input->post('nomor_rekening'),
			'nama_pemilik' => $this->input->post('nama_pemilik'),
			'statusgm' => $this->input->post('stat'),
		);
		#	var_dump($db);
		$where = array(
			'id_login' => $id);
		$cek = $this->m_login->update($where,$db,'identitas');
			$data = array('upload_data' => $this->upload->data());
			echo '<script>alert("Sukses");</script>';
			redirect('datadiri','refresh',$data);
		}

	}

	public function seleksi(){
		echo "ini seleksi";
	}

	function terimapesanan($id){
		$data = $this->input->post();
		$query = $this->m_login->update('pemesanan_akuntan',$data,"id = $id");
		var_dump($query);
	}

	

}

/* End of file Akuntan.php */
/* Location: ./application/controllers/Akuntan.php */