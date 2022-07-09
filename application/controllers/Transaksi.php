<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Transaksi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = "Barang";
    $data['judul'] = "Data Barang";

    $data['transaksi'] = $this->Transaksi_model->get_joinData('tbl_trasnsaksi');
    $data['barang'] = $this->Barang_model->get_data('tbl_barang')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_barang/V_barang', $data);
    $this->load->view('templates/footer');
  }
}


/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */