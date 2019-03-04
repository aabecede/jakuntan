<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_member');
	}

	function echopre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}

	function pesan($idlogin,$idjasa){
		#$uri = $this->uri->segment(3);
		$ress['login'] = $idlogin;
		$ress['jasa'] = $idjasa;
		$data = array(
			'query' => $query = $this->db->query("select *, login.nama as nalog, login.id as idlog, layanan.nama as namlay, layanan.id as idlay from login, data_diri, layanan, user_layanan where login.id = data_diri.id_login and login.id = user_layanan.id_login and user_layanan.id_layanan = layanan.id and layanan.id = ? and login.id = ? ",array($idjasa,$idlogin))->row(),
			'id' => $this->session->userdata('id'),
		);
		#$this->echopre($data);
		#echo json_encode($ress);
		$this->load->view('Header',$data);
		$this->load->view('Pemesanan/index');
		$this->load->view('Footer');

	}

	function pesanakuntan(){
		$data = $this->input->post();
		$query = $this->db->insert('pemesanan_akuntan',$data);
		if($query === true){
			?>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
			<div class="container">
			  	<div class="alert alert-success">
				    <strong>SUKSES!</strong> Data Masuk !
				</div>
			</div>
			<?php
			redirect('member/','refresh');
		}else{
			echo "<link rel='stylesheet' type='text/css' href='base_url()assets/css/bootstrap.min.css>'";
		}
	}

}

/* End of file Pemesanan.php */
/* Location: ./application/controllers/Pemesanan.php */