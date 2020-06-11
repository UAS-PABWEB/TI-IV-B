<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{
    public function pakaianpria()
    {
        $data['pakaianpria'] = $this->Model_kategori->data_pakaianpria();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/pakaianpria', $data);
        $this->load->view('templates/footer');
    }

    public function pakaianwanita()
    {
        $data['pakaianwanita'] = $this->Model_kategori->data_pakaianwanita();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/pakaianwanita', $data);
        $this->load->view('templates/footer');
    }

    public function pakaiananak()
    {
        $data['pakaiananak'] = $this->Model_kategori->data_pakaiananak();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kategori/pakaiananak', $data);
        $this->load->view('templates/footer');
    }
}
