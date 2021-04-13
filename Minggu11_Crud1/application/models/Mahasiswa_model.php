<?php 
// membuat class model, dengan syarat nama file sama dengan nama Class
class Mahasiswa_model extends CI_Model {
	// idenfikasi variable
	public function get_data(){
		$data_mahasiswa = [
			["nama"=>"Shindi Fatika Sari","prodi"=>"MIF"],
			["nama"=>"Ageng Wijaya","prodi"=>"TKK"],
			["nama"=>"Sulistyawati","prodi"=>"TIF"]
		];
		// mengembalikan nilai variabel data angkatan
		return $data_mahasiswa;
	}

	public function getAll(){
		$this->db->select('*');
		$this->db->from('tm_user');
		$this->db->join('tm_grup','tm_user.grup = tm_grup.id_grup');
		$query = $this->db->get();
		return $query;
	}

	public function input_data($data,$table)
	{
		$this->db->insert($table,$data);
	}
}
?>