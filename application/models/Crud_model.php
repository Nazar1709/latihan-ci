<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Controller {

	public function caridatamahasiswa()
	{
		$cari = $this->input->post('cari', true);
		$this->db->like('nama', $cari);
		return $this->db->get('mahasiswa')->result_array();
	}

}
