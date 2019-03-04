<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		
		$this->load->model('m_login');
		$this->load->model('mcombox');
		$this->load->helper('form','url');

		
	}

	public function index()
	{
		$id = $this->session->userdata('id');
		if($id == NULL)
		{
			$this->session->sess_destroy();
			$this->load->view('header');
			$this->load->view('content');
			$this->load->view('footer');

		}else{

			
		
			$data = array (
				'nama' => $this->session->userdata('nama'),
				'notelp' => $this->session->userdata('notelp'),
				'id' => $this->session->userdata('id'),
				'status' => $this->session->userdata('status')
			);
			#var_dump($data);
			$id = $this->session->userdata('id');
			$data['pesan'] = $this->db->query("select *, count(send_to) as jum  from chat,login,data_diri where login.id = chat.send_by and data_diri.id_login = login.id and send_to = '$id'")->result();
			$data['query'] = $this->db->query("select *, kabupaten.nama as nakab, provinsi.nama as naprov, login.nama as username from data_diri,login,provinsi,kabupaten where data_diri.id = login.id and data_diri.id_prov = provinsi.id_prov and data_diri.id_kab = kabupaten.id_kab and login.id ='$id'")->row();
			#var_dump($data['status']);
			#pencarian
			#$cari = $this->input->post('cari');
			/*$pencarian = $this->db->query("select layanan.nama as namlay, login.nama as nalog from login,layanan,user_layanan where login.id = user_layanan.id_login and user_layanan.id_layanan = layanan.id and layanan.nama like '%$cari%' and login.nama like '%$cari%'")->row();
			foreach ($pencarian as $ress) {
				$row_set[] = $ress;
			}
			$data['pencarian'] = json_encode($row_set);*/

			$this->load->view('header', $data);
			$this->load->view('content');
			$this->load->view('footer');

			
		}
	}

	public function masuk(){
		$this->load->view('header');
		$this->load->view('masuk');
		$this->load->view('footer');
	}

	public function cari(){

		/*$cari = $this->input->post('cari',TRUE);
		$data['pencarian'] = $this->db->query("select *, login.id as idlog, layanan.nama as namlay, login.nama as nalog from 
			login,layanan,user_layanan,data_diri
			where login.id = user_layanan.id_login and user_layanan.id_layanan = layanan.id and login.id = data_diri.id_login and  layanan.nama like '%$cari%' or login.nama like '%$cari%'")->result();
		
			
		$data['status'] = $this->session->userdata('status');
		$id = $this->session->userdata('id');

		$data['query'] = $this->db->query("select *, kabupaten.nama as nakab, provinsi.nama as naprov, login.nama as username from data_diri,login,provinsi,kabupaten where data_diri.id = login.id and data_diri.id_prov = provinsi.id_prov and data_diri.id_kab = kabupaten.id_kab and login.id ='$id'")->row();
		#var_dump($data);
		#var_dump($cari);
		#var_dump(count($data['pencarian']));

		if(count($data['pencarian'])  > 0)
		{
			
			$this->load->view('Header',$data);
			$this->load->view('Cari');
			$this->load->view('footer');
		}else{
				
			echo '<script>alert("Pecarian tidak tersedia !!")</script>';
			redirect('','refresh');
		}*/
		#get keyword from url
		$keyword = $this->uri->segment(3);

		#find to database
		#$data = $this->db->from('login')->like('nama',$keyword)->get();
		$data = $this->db->query('select * from login like nama "%$keyword%"');

		#format
		foreach ($data->result() as $key => $value) {
			# code...
			$arr['hasil'] = $keyword;
			$arr['suggestion'][] = array(
				'nama' => $value->nama,
			);
		}
		echo json_encode($arr);
	}

	public function tentang()
	{
		$id = $this->session->userdata('id');
		if($id == NULL)
		{
			$this->session->sess_destroy();
			$this->load->view('Header');
			$this->load->view('Tentang');
			$this->load->view('Footer');

		}else{
			$id = $this->session->userdata('id');
			$data['pesan'] = $this->db->query("select *, count(send_to) as jum  from chat,login,data_diri where login.id = chat.send_by and data_diri.id_login = login.id and send_to = '$id'")->result();
		$data['query'] = $this->db->query("select *, kabupaten.nama as nakab, provinsi.nama as naprov, login.nama as username from data_diri,login,provinsi,kabupaten where data_diri.id = login.id and data_diri.id_prov = provinsi.id_prov and data_diri.id_kab = kabupaten.id_kab and login.id ='$id'")->row();
		$this->load->view('Header', $data);
		$this->load->view('Tentang');
		$this->load->view('Footer');
		}
	}
}
