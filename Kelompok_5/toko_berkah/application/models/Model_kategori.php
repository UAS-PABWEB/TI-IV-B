<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori extends CI_Model
{
    public function data_pakaianpria()
    {
        $result = $this->db->get_where('tb_barang', ['kategori_brg' => 'Pakaian Pria']);
        return $result->result_array();
    }

    public function data_pakaianwanita()
    {
        $result = $this->db->get_where('tb_barang', ['kategori_brg' => 'pakaian Wanita']);
        return $result->result_array();
    }

    public function data_pakaiananak()
    {
        $result = $this->db->get_where('tb_barang', ['kategori_brg' => 'pakaian Anak']);
        return $result->result_array();
    }
}
