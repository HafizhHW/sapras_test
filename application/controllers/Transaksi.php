<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Transaksi extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    check_not_login();
  }

  public function index()
  {

    $data['title'] = "Transaksi";
    $data['judul'] = "Data Transaksi";

    $data['transaksi'] = $this->Transaksi_model->get_joinData('tbl_trasnsaksi');
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_transaksi/V_transaksi', $data);
    $this->load->view('templates/footer');
  }

  function Add_transaksi()
  {
    $data['title'] = "Transaksi";
    $data['judul'] = "Data Transaksi";

    $data['barang'] = $this->Barang_model->get_data('tbl_barang')->result();
    $data['transaksi'] = $this->Transaksi_model->get_joinData('tbl_trasnsaksi');
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_transaksi/Add_transaksi', $data);
    $this->load->view('templates/footer');
  }
}


/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */