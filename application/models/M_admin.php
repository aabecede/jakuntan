<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {


	function get_data_where($table,$where){
		$query = $this->db->get_where($table,$where);
		return $query;
	}

	function get_transaksi(){
		$query = $this->db->query('select *, pemesanan_akuntan.status as natus, pemesanan_akuntan.id as idpemesanan, layanan.nama as nalay, login.nama as nalog from pemesanan_akuntan, login, layanan where pemesanan_akuntan.idakuntan = login.id and layanan.id = pemesanan_akuntan.idlayanan');
		return $query;
	}

	function get_nama_transaksi(){
		$query = $this->db->query('select login.nama as namapemesan from pemesanan_akuntan, login, layanan where pemesanan_akuntan.idpemesan = login.id and layanan.id = pemesanan_akuntan.idlayanan');
		foreach ($query->result() as $key => $value) {
			# code...
			$result[] = $value->namapemesan;
		}
		return $result;
	}
	
	

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */