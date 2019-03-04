<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_member extends CI_Model {


	function pemesanan($idlog,$idlayanan){
		
		return $query = $this->db->query("select *, login.nama as nalog, login.id as idlog, layanan.nama as namlay, layanan.id as idlay from login, data_diri, layanan, user_layanan where login.id = data_diri.id_login and login.id = user_layanan.id_login and user_layanan.id_layanan = layanan.id and layanan.id = ? and login.id = ? ",array($idlayanan,$idlogin));
	}
	

}

/* End of file M_Member.php */
/* Location: ./application/models/M_Member.php */