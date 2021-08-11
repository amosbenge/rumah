<?php
defined('BASEPATH') or exit('no redirect script allowed');

class Dusun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()// TAMPIL HALAMAN HOME KEPALA DUSUN
    {
        $data['title'] = 'Home';
        $userdata = $this->session->userdata();
        $username = $userdata['user']['username'];
        $data['user'] = $this->ModelUser->getUser($username);

        $this->load->view('header', $data);
        $this->load->view('sidebar', $data);
        $this->load->view('topbar', $data);
        $this->load->view('dusun/index', $data);
        $this->load->view('footer', $data);
    }

}