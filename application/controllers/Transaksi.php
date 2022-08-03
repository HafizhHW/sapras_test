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

    $data['join'] = $this->Transaksi_model->get_joinData('tbl_transaksi');
    // var_dump($data['join']);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_transaksi/V_transaksi', $data);
    $this->load->view('templates/footer');
  }

  function add_transaksi()
  {
    $data['title'] = "Transaksi";
    $data['judul'] = "Data Transaksi";

    $data['barang'] = $this->Barang_model->get_data('tbl_barang')->result();
    $data['transaksi'] = $this->Transaksi_model->get_joinData('tbl_transaksi');
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_transaksi/Add_transaksi', $data);
    $this->load->view('templates/footer');
  }

  function add_act()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->add_transaksi();
    } else {
      $id_barang = $this->input->post('id_barang');
      $jml_barang = $this->input->post('jml_barang');
      $unit = $this->input->post('unit');
      $tgl_transaksi = $this->input->post('tgl_transaksi');
      $nm_penerima = $this->input->post('nm_penerima');
      $id_admin = $this->session->userdata('ses_id');
      $ket = $this->input->post('keterangan');

      $data = [
        'id_barang' => $id_barang,
        'jml_barang' => $jml_barang,
        'unit' => $unit,
        'tgl_transaksi' => $tgl_transaksi,
        'nm_penerima' => $nm_penerima,
        'id_admin' => $id_admin,
        'keterangan' => $ket
      ];
      $this->Transaksi_model->insert_data($data, 'tbl_transaksi');

      // var_dump($data);
      print_r($data);
      exit;

      $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Di Tambahkan !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('Transaksi/add_transaksi');
    }
  }

  function _rules()
  {
    $this->form_validation->set_rules('id_barang', 'Nama Barang', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('jml_barang', 'Jumlah Barang', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('unit', 'Unit Barang', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('tgl_transaksi', 'Tanggal Transaksi', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('nm_penerima', 'Nama Penerima', 'required', array('required' => '%s harus diisi !!!'));
    // $this->form_validation->set_rules('id_admin', 'Nama Admin', 'required', array('required' => '%s harus diisi !!!'));
    // $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', array('required' => '%s harus diisi !!!'));
  }
}


/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */