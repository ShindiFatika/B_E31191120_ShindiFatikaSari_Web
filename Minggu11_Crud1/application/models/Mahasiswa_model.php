<?php 
// membuat class model, dengan syarat nama file sama dengan nama Class
class Mahasiswa_model extends CI_Model {
	// idenfikasi variable
	public function get_data(){ //memanggil fungsi get data
		$data_mahasiswa = [ //data dari mahasiswa
			["nama"=>"Shindi Fatika Sari","prodi"=>"MIF"],
			["nama"=>"Ageng Wijaya","prodi"=>"TKK"],
			["nama"=>"Sulistyawati","prodi"=>"TIF"]
		];
		// mengembalikan nilai variabel data angkatan
		return $data_mahasiswa;
	}

	public function getAll(){ //method untuk mengambil data dari database
		$this->db->select('*'); 
		$this->db->from('tm_user');
		$this->db->join('tm_grup','tm_user.grup = tm_grup.id_grup');
		$query = $this->db->get();
		// mengembalikan nilai variabel query
		return $query;
	}

	public function input_data($data,$table) //menanggil fungsi input data
	{
		$this->db->insert($table,$data); //berfungsi untuk menyimpan ke database
	}
}
?>