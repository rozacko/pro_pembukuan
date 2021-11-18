<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_m extends CI_Model
{

    public function get_data()
    {
        $dt = $this->db
            ->select('pegawai_id, pegawai_no, pegawai_nama, pegawai_jk, harga, gambar')
            ->from('master_pegawai')
            ->order_by('pegawai_id', 'ASC')
            ->get()
            ->result_array();
        // echo $this->db->last_query();die;
        return $dt;
    }

    public function get_data_kategori()
    {
        $dt = $this->db
            ->from('master_kategori')
            ->order_by('kategori_id', 'ASC')
            ->get()
            ->result();
        // print_r($this->db->last_query());die;
        return $dt;
    }

    public function get_gambar_delete($id)
    {
        $dt = $this->db
            ->select('gambar')
            ->from('master_pegawai')
            ->where('pegawai_id', $id)
            ->get()
            ->row()->gambar;
        return $dt;
    }

    public function cek_nama($nama)
    {
        $dt = $this->db
            ->select('pegawai_nama')
            ->from('master_pegawai')
            ->where('UPPER(REPLACE(pegawai_nama," ","")) = ', $nama)
            ->get()
            ->result_array();
        return $dt;
    }

    public function save_add($data)
    {
        $result = $this->db->insert('master_pegawai', $data);
        return $result;
    }

    public function get_data_by_id($id)
    {

        $qy = "
            SELECT
                *
            from
                master_pegawai
            where 
                pegawai_id = '" . $id . "'
        ";
        $result = $this->db->query($qy)->row();
        return $result;
    }

    public function save_edit($data, $id)
    {
        $this->db->where('pegawai_id', $id);
        $result = $this->db->update('master_pegawai', $data);
        return $result;
    }

    public function deleted_data($id)
    {
        $this->db->where('pegawai_id', $id);
        return $this->db->delete('master_pegawai');
    }
}
