<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path


class Arsip extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = "Dokumen";
    $data['judul'] = "Data Dokumen";

    $data['arsip'] = $this->Arsip_model->get_data('tbl_arsip')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_arsip/V_arsip', $data);
    $this->load->view('templates/footer');
  }
}


/* End of file Arsip.php */
/* Location: ./application/controllers/Arsip.php */