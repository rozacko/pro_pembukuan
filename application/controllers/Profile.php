<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_m');

        if (!$this->session->userdata('is_login') == true) {
            redirect('login');
        }
    }

    public function index()
    {

        $this->load->view('templates/bar');

        $this->load->view('view_Profile');
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


        $Profile = $this->profile_m->get_data();

        $i = 0;
        if (!empty($Profile)) {
            foreach ($Profile as $k => $v) {
                $dt_final[$i]['pegawai_id'] = $v['pegawai_id'];
                $dt_final[$i]['pegawai_nama'] = '<center>' . strtoupper($v['pegawai_nama']) . '</center>';
                $dt_final[$i]['harga'] = '<center>Rp. <b>' . number_format($v['harga']) . '</b></center>';
                $dt_final[$i]['kategori'] = strtoupper($v['kategori']);
                if ($v['gambar'] != null) {
                    $dt_final[$i]['link'] = base_url() . 'assets/images/' . $v['gambar'];
                    $dt_final[$i]['gambar'] = '<img src="' . $dt_final[$i]['link'] . '" width=100px>';
                } else {
                    $dt_final[$i]['link'] = base_url() . 'assets/images/no_image.png';
                    $dt_final[$i]['gambar'] = '<img src="' . $dt_final[$i]['link'] . '" width=100px>';
                }
                $i++;
            }
        } else {
            $dt_final[0]['harga'] = "Data is null";
        }
        $object = json_decode(json_encode($dt_final), FALSE);
        // $this->echopre($dt_final);die;
        echo json_encode($object);
    }
}
