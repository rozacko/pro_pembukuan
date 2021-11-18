<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_m extends CI_Model
{

    function authorize($username, $password)
    {
    	$result = $this->db            
            ->from('users')
            ->where('password',$password)
            ->where('username',$username)
            ->get()
            ->row();
        // return $dt;
        // echoq($this);
        // $this
        // $result = $this->db->query($qy)->row();
        return $result;
    }
}