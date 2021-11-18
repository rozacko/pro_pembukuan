<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_m');

        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    public function index()
    {

        $this->load->view('templates/bar');

        $this->load->view('view_Pegawai');
        $this->load->view('templates/footer');
    }

    public function echopre($dt)
    {
        echo "<pre>";
        print_r($dt);
        echo "</pre>";
    }

    public function get_data()
    {


        $pegawai = $this->Pegawai_m->get_data();

        $i = 0;
        if (!empty($pegawai)) {
            foreach ($pegawai as $k => $v) {
                $dt_final[$i]['pegawai_id'] = $v['pegawai_id'];
                $dt_final[$i]['pegawai_no'] = strtoupper($v['pegawai_no']);
                $dt_final[$i]['pegawai_nama'] = strtoupper($v['pegawai_nama']);
                $dt_final[$i]['pegawai_jk'] = strtoupper($v['pegawai_jk']);
                $dt_final[$i]['harga'] = number_format($v['harga']);
                $dt_final[$i]['link'] = base_url() . 'assets/images/' . $v['gambar'];
                if ($v['gambar'] != null)
                    $dt_final[$i]['gambar'] = '<img src="' . $dt_final[$i]['link'] . '" width=100px>';
                else
                    $dt_final[$i]['gambar'] = '';
                $i++;
            }
        } else {
            $dt_final[$i]['harga'] = "Data is null";
        }
        $object = json_decode(json_encode($dt_final), FALSE);
        // $this->echopre($object);
        // die;
        echo json_encode(array('response' => $object));
    }

    public function get_data_kategori()
    {
        $kategori = $this->Pegawai_m->get_data_kategori();
        echo json_encode($kategori);
    }

    public function save_add()
    {
        $msg = "Error Input";
        if ($this->input->post('pegawai_no') == null || $this->input->post('pegawai_nama') == null || $this->input->post('harga') == null) {
            $result = false;
            $msg = "No, Nama dan harga tidak boleh kosong";
        } else {
            $config['upload_path'] = "./assets/images"; //path folder file upload
            $config['allowed_types'] = 'jpg|jpeg|png'; //type file yang boleh di upload
            $config['encrypt_name'] = TRUE; //enkripsi file name upload

            if (!empty($_FILES)) {
                $this->load->library('upload', $config); //call library upload 
                if ($this->upload->do_upload("file")) { //upload file
                    $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                    $image = $data['upload_data']['file_name']; //set file name ke variable image
                    $data = array(
                        'pegawai_no' => $this->input->post('pegawai_no'),
                        'pegawai_nama' => $this->input->post('pegawai_nama'),
                        'pegawai_jk' => $this->input->post('pegawai_jk'),
                        'harga' => $this->input->post('harga'),
                        'gambar' => $image,
                    );
                    $this->echopre($data);
                    die;
                    $result = $this->Pegawai_m->save_add($data);
                } else {
                    $result = false;
                    $msg = "Format gambar tidak sesuai";
                }
            } else {
                $image = '';
                $data = array(
                    'pegawai_no' => $this->input->post('pegawai_no'),
                    'pegawai_nama' => $this->input->post('pegawai_nama'),
                    'pegawai_jk' => $this->input->post('pegawai_jk'),
                    'harga' => $this->input->post('harga'),
                    'gambar' => $image,
                );

                $result = $this->Pegawai_m->save_add($data);
            }
        }


        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode($msg);
        }
    }

    public function get_data_by_id($id)
    {

        $pegawai = $this->Pegawai_m->get_data_by_id($id);

        echo json_encode($pegawai);
    }

    public function save_edit()
    {
        $msg = "Error Edit";
        // $this->echopre($_POST);die;
        // $this->echopre($_FILES);die;
        if ($this->input->post('pegawai_nama') == null || $this->input->post('harga') == null) {
            $result = false;
            $msg = "Nama dan harga tidak boleh kosong";
        } else {
            if (!empty($_FILES)) {
                //save gambar
                $config['upload_path'] = "./assets/images"; //path folder file upload
                $config['allowed_types'] = 'jpg|jpeg|png'; //type file yang boleh di upload
                $config['encrypt_name'] = TRUE; //enkripsi file name upload

                $this->load->library('upload', $config); //call library upload 
                if ($this->upload->do_upload("file")) { //upload file
                    $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
                    $image = $data['upload_data']['file_name']; //set file name ke variable image
                    $id = $this->input->post('pegawai_id');
                    $data = array(
                        'pegawai_no' => $this->input->post('pegawai_no'),
                        'pegawai_nama' => $this->input->post('pegawai_nama'),
                        'pegawai_jk' => $this->input->post('pegawai_jk'),
                        'harga' => $this->input->post('harga'),
                        'gambar' => $image,

                    );
                    $result = $this->Pegawai_m->save_edit($data, $id);
                } else {
                    $result = false;
                    $msg = "Format gambar tidak sesuai";
                }
                //delete gambar
                @unlink("./assets/images/" . $_POST['file_prev']);
            } else {
                $id = $this->input->post('pegawai_id');
                $data = array(
                    'pegawai_no' => $this->input->post('pegawai_no'),
                    'pegawai_nama' => $this->input->post('pegawai_nama'),
                    'pegawai_jk' => $this->input->post('pegawai_jk'),
                    'harga' => $this->input->post('harga'),


                );
                $result = $this->Pegawai_m->save_edit($data, $id);
            }
        }

        if ($result) {
            echo json_encode(1);
        } else {
            echo json_encode($msg);
        }
    }

    public function save_delete()
    {
        $id = $this->input->post('id');
        $gambar_delete = $this->Pegawai_m->get_gambar_delete($id);
        $result = $this->Pegawai_m->deleted_data($id);
        if ($result) {
            @unlink("./assets/images/" . $gambar_delete);
            echo json_encode(1);
        } else {
            echo json_encode(0);
        }
    }
}
