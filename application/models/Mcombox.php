<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcombox extends CI_Model {

function __contruct(){
	parent::__contruct();
}

function get_provinsi()
{
	$query = $this->db->query('select * from provinsi');
	if($query->num_rows() > 0)
	{
		return $query->result();	
	} 
}
function get_kota_byprov($id_prov)
{
	$query = $this->db->query("select * from kabupaten where id_prov ='$id_prov'");
	if($query->num_rows() > 0)
	{
		foreach ($query->result() as $row) {
			$data[] = $row;
		}
		return $data;
	}
}
	

}

/* End of file Mcombox.php */
/* Location: ./application/models/Mcombox.php */