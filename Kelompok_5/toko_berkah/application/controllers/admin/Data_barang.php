<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_barang extends CI_Controller
{
    public function index()
    {
        $data['barang'] = $this->Model_barang->tampilBarang()->result_array();
        $this->load->view('templatesadmin/header');
        $this->load->view('templatesadmin/sidebar');
        $this->load->view('admin/databarang', $data);
        $this->load->view('templatesadmin/footer');
    }

    public function tambahBarang()
    {
        $nama_brg = $this->input->post('nama_brg');
        $keterangan_brg = $this->input->post('keterangan_brg');
        $kategori_brg = $this->input->post('kategori_brg');
        $harga_brg = $this->input->post('harga_brg');
        $stok_brg = $this->input->post('stok_brg');
        $gambar_brg = $_FILES['gambar_brg']['name'];

        if ($gambar_brg) {
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['upload_path'] = './assets/uploads/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar_brg')) {
                $gambar_brg = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = array(
            'nama_brg' => $nama_brg,
            'keterangan_brg' => $keterangan_brg,
            'kategori_brg' => $kategori_brg,
            'harga_brg' => $harga_brg,
            'stok_brg' => $stok_brg,
            'gambar_brg' => $gambar_brg
        );

        $this->Model_barang->tambahBarang($data, 'tb_barang');
        redirect('admin/Data_barang');
    }

    public function edit($id)
    {
        $where = array('id_brg' => $id);
        $data['barang'] = $this->Model_barang->editBarang($where, 'tb_barang')->result_array();
        $this->load->view('templatesadmin/header');
        $this->load->view('templatesadmin/sidebar');
        $this->load->view('admin/editbarang', $data);
        $this->load->view('templatesadmin/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_brg');
        $nama_brg = $this->input->post('nama_brg');
        $keterangan_brg = $this->input->post('keterangan_brg');
        $kategori_brg = $this->input->post('kategori_brg');
        $harga_brg = $this->input->post('harga_brg');
        $stok_brg = $this->input->post('stok_brg');

        $data = array(
            'nama_brg' => $nama_brg,
            'keterangan_brg' => $keterangan_brg,
            'kategori_brg' => $kategori_brg,
            'harga_brg' => $harga_brg,
            'stok_brg' => $stok_brg
        );

        $where = array('id_brg' => $id);

        $this->Model_barang->updateBarang($data, $where, 'tb_barang');
        redirect('admin/Data_barang');
    }

    public function delete($id)
    {
        $where = array(
            'id_brg' => $id
        );

        // delete gambar
        $gambar = $this->Model_barang->editBarang($where, 'tb_barang')->result_array()[0]['gambar_brg'];
        $path = './assets/uploads/' . $gambar;
        unlink($path);

        $this->Model_barang->hapusBarang($where, 'tb_barang');
        redirect('admin/Data_barang');
    }

    public function detail($idBarang)
    {
        $data['barang'] = $this->Model_barang->detailBrg($idBarang)[0];

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/detailbarang', $data);
        $this->load->view('templates/footer');
    }
}
