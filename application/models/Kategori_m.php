<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_m extends CI_Model {

    public function get_data()
    {   
        $dt = $this->db            
            ->from('master_kategori')
            ->order_by('kategori_id','ASC')
            ->get()
            ->result();
        return $dt;
    }

    public function get_max_id()
    {   
        $dt = $this->db            
            ->select('MAX(kategori_id) as kategori_id')                             
            ->from('master_kategori')
            ->order_by('kategori_id','ASC')
            ->get()
            ->row()->Kategori_id;
        return $dt;
    }

    public function save_add($data)
    {
        $result = $this->db->insert('master_kategori', $data);
        return $result;
    }

    public function get_data_by_id($id)
    {

        $qy = "
            SELECT
                *
            from
                master_kategori
            where 
                kategori_id = '".$id."'
        ";
        $result = $this->db->query($qy)->row();
        return $result;
    }

    public function save_edit($data, $id)
    {
        $this->db->where('kategori_id', $id);
        $result = $this->db->update('master_kategori', $data);
        return $result;
    }

    public function deleted_data($id) {
        $this->db->where('kategori_id', $id);
        return $this->db->delete('master_kategori');
    }
}