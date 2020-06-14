<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('formlogin');
            $this->load->view('templates/footer');
        } else {
            $auth = $this->Model_auth->cekLogin();

            if ($auth === FALSE) {
                $this->session->set_flashdata('pesan', '
                <div class="alert alert-danger" role="alert">
                    Username atau Password anda salah!
                </div>
                ');
                redirect('auth/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);
                if ($auth->role_id == 1) {
                    redirect('admin/dashboard_admin');
                }elseif ($auth->role_id == 2) {
                    redirect('dashboard');
                }
            }
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
