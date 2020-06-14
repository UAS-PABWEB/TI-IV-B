<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $data['barang'] = $this->Model_barang->tampilBarang()->result_array();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function addToCart($id)
    {
        $barang = $this->Model_barang->find($id);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga_brg,
            'name'    => $barang->nama_brg
        );

        $this->cart->insert($data);
        redirect('dashboard');
    }

    public function cartDetails()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapusKeranjang($rowid)
    {
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        $this->cart->update($data);
        redirect('dashboard/cartDetails');
    }

    public function checkout()
    {
        $total = $this->cart->total_items();
        $data["tag"] = "keranjangkosong";

        if ($total === 0) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('prosespesanan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('checkout');
            $this->load->view('templates/footer');
        }
    }

    public function prosesPesanan()
    {
        $data["tag"] = "keranjangadaisi";

        $is_processed = $this->Model_invoice->index();
        if ($is_processed) {
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('prosespesanan', $data);
            $this->load->view('templates/footer');
            $this->cart->destroy();
        } else {
            echo "Maaf pesanan anda gagal diproses";
        }
    }

    public function detailBarang($idBarang)
    {
        $data['barang'] = $this->Model_barang->detailBrg($idBarang)[0];

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detailbarang', $data);
        $this->load->view('templates/footer');
    }
}
