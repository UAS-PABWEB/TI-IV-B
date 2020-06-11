<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice extends CI_Controller
{
    public function index()
    {
        $data["invoice"] = $this->Model_invoice->tampilData();

        $this->load->view('templatesAdmin/header');
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/invoice', $data);
        $this->load->view('templatesAdmin/footer');
    }

    public function detail($id_invoice)
    {
        $data['invoice'] = $this->Model_invoice->ambilIdInvoice($id_invoice)[0];
        $data['pesanan'] = $this->Model_invoice->ambilIdPesanan($id_invoice);

        $this->load->view('templatesAdmin/header');
        $this->load->view('templatesAdmin/sidebar');
        $this->load->view('admin/detailinvoice', $data);
        $this->load->view('templatesAdmin/footer');
    }
}
