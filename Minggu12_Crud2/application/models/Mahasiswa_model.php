<?php
class Mahasiswa_model extends CI_Model
{
    public function get_data()
    {
        $data_mahasiswa = [
            ["nama" => "Kim Jefry", "prodi" => "MIF", "ket" => "Manajemen Informatika", "angkatan" => "2016"],
            ["nama" => "Ahmad Kurniawan", "prodi" => "TKK", "ket" => "Teknik Komputer", "angkatan" => "2017"],
            ["nama" => "Budi Sudarsono", "prodi" => "TIF", "ket" => "Teknik Informatika", "angkatan" => "2018"]
        ];
        return $data_mahasiswa;
    }

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('tm_user');
        $this->db->join('tm_grup', 'tm_user.grup = tm_grup.id_grup');
        $query = $this->db->get();
        return $query;
    }

    // UNTUK MENYAMBUNGKAN DENGAN TABEL TM_GRUP
    public function getGrup()
    {
        $this->db->select('*');
        $this->db->from('tm_grup');
        $query = $this->db->get();
        return $query;
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
