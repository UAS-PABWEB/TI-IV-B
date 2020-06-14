<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $this->load->view('templatesadmin/header');
        $this->load->view('templatesadmin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('templatesadmin/footer');
    }
}
