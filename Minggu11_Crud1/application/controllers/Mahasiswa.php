<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// membuat class controller, dengan syarat nama file sama dengan nama Class
class Mahasiswa extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model'); //mengload file mahasiswa_model.php yg ada di folder model.

	}

	public function tambah(){ // menanggil fungsi tambah pada template didalam view didalam mahasiswa
		$this->template->views('crud/tambah_mahasiswa'); 
	}

	public function input(){ //menanggil fungsi input username, password, nama, dan grup
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array( // mendeklarasikan array data
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);
		$this->Mahasiswa_model->input_data($data, 'tm_user'); //menginput data ke database dengan menggunakan mahasiswa_model
		redirect('Mahasiswa/index'); // parameter yang berisi data-data yang diinputkan
	}

	public function index() //memanggil fungsi index
	{
		$data['user'] = $this->Mahasiswa_model->getAll()->result(); //menyimpan data user untuk dipassing ke view
		$this->template->views('crud/home_mahasiswa',$data);
}
