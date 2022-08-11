<?php
defined('BASEPATH') or exit('No direct script access allowed');


class BarangRusak extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    check_not_login();
  }

  public function index()
  {
    $data['title'] = "Barang Rusar";
    $data['judul'] = "Data Barang Rusak";
    $data['join'] = $this->BarangR_model->get_join('tbl_barang_rusak');

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_barangR/V_barangR', $data);
    $this->load->view('templates/footer');
  }

  public function add_brgR()
  {
    $data['title'] = "Barang Rusar";
    $data['judul'] = "Data Barang Rusak";
    $data['join'] = $this->BarangR_model->get_join('tbl_barang_rusak');
    $data['barang'] = $this->Barang_model->get_data('tbl_barang')->result();
    $data['tempat'] = $this->Barang_model->get_tempat('tbl_tempat')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_barangR/Add_barangR', $data);
    $this->load->view('templates/footer');
  }
}


/* End of file BarangRusak.php */
/* Location: ./application/controllers/BarangRusak.php */