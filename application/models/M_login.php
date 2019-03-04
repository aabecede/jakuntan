<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function cek_login($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	function tab_data($table)
	{
		return $this->db->query("select * from $table")->result();
	}

	function datadiri($where,$table)
	{
		return $this->db->get_where($table,$where)->result();
	}

	function update($table,$db,$where)
	{
		#$this->db->where($where);
		return $this->db->update($table,$db,$where);
	}
	
	function cari($nama){
		$this->db->where('login.id = data_diri.id_login');
		$this->db->from('login,data_diri');
		$this->db->like('login.nama',$nama);
		return $this->db->get()->result();
	}
}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */