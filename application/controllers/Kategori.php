<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kategori_m');

        if (!$this->session->userdata('is_login') == true ) {
            redirect('login');
        }
    }

    public function index() {

        $this->load->view('templates/bar');

        $this->load->view('view_Kategori');
        $this->load->view('templates/footer');

    }

    public function echopre($dt) {
        echo "<pre>";
        print_r($dt);
        echo "</pre>";
    }

    public function get_data() {

        $Kategori = $this->Kategori_m->get_data();
        echo json_encode(array('response' => $Kategori));
        
    }

    public function save_add(){
        $msg = "Error input";
        if($_POST['kategori_nama'] == null){
            $result = false;
            $msg = "Nama kategori tidak boleh kosong";
        }else{
            $data = array(
            'kategori_kode' => str_replace(" ", "", strtoupper($this->input->post('kategori_nama'))),
            'kategori_nama' => $this->input->post('kategori_nama'),
            );
            
            $result = $this->Kategori_m->save_add($data);
        }        

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode($msg);
        }

    }

    public function get_data_by_id($id) {

        $Kategori = $this->Kategori_m->get_data_by_id($id);

        echo json_encode($Kategori);
        
    }

    public function save_edit(){
        $msg = "Edit error";
        $id = $this->input->post('kategori_id');   
        if($_POST['kategori_nama'] == null){
            $result = false;
            $msg = "Nama kategori tidak boleh kosong";
        }else{
            $data = array(
            'kategori_kode' => str_replace(" ", "", strtoupper($this->input->post('kategori_nama'))),            
            'kategori_nama' => $this->input->post('kategori_nama'),
            );
            $result = $this->Kategori_m->save_edit($data,$id);
        }

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode($msg);
        }

    }

    public function save_delete(){
        $id = $this->input->post('id');        
        $result = $this->Kategori_m->deleted_data($id);

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }

    }
}