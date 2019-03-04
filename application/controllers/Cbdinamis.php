<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cbdinamis extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mcombox');
		$this->load->helper('form','url');
	}

	public function index()
	{
		$data['title'] = 'Test Combobox';
		$data['provinsi'] = $this->mcombox->get_provinsi();
		$this->load->view('header');
		$this->load->view('vcombox',$data);
		$this->load->view('footer');
	}

	public function get_kota()
	{
		$id_prov = $this->input->post('id_prov');
		$arrstate = $this->mcombox->get_kota_byprov($id_prov);
		echo '<select name="id_kab" id="id_kab" class="form-control">';
		foreach($arrstate as $data)
		{
			echo '<option value="'.$data->id_kab.'">'.$data->nama.'</option>';
		}
		echo '</select>';
	}

}

/* End of file Cbdinamis.php */
/* Location: ./application/controllers/Cbdinamis.php */