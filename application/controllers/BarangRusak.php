<?php
defined('BASEPATH') or exit('No direct script access allowed');


class BarangRusak extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    check_not_login();
    check_access();
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

  public function edit_brgR($id)
  {
    $data['title'] = "Barang Rusar";
    $data['judul'] = "Edit Data Barang Rusak";
    $where['id_br'] = $id;
    // $data['join'] = $this->BarangR_model->get_join('tbl_barang_rusak');
    $data['barang'] = $this->Barang_model->get_data('tbl_barang')->result();
    $data['tempat'] = $this->Barang_model->get_tempat('tbl_tempat')->result();
    $data['brgR'] = $this->BarangR_model->update($where, 'tbl_barang_rusak')->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_barangR/Update_barangR', $data);
    $this->load->view('templates/footer');
  }

  function delete_act($id)
  {
    $where = array('id_br' => $id);
    $this->BarangR_model->delete_data($where, 'tbl_barang_rusak');
    $this->session->set_flashdata('success', 'Data Berhasil Dihapus !');
    redirect('BarangRusak');
  }

  public function add_act()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->add_brgR();
    } else {
      $id_barang = $this->input->post('id_barang');
      $jml = $this->input->post('jml_barang');
      $id_tempat = $this->input->post('id_tempat');
      $ket = $this->input->post('keterangan');

      $data = [
        'id_barang' => $id_barang,
        'jml_barang' => $jml,
        'id_tempat' => $id_tempat,
        'keterangan' => $ket
      ];

      $this->BarangR_model->insert_data($data, 'tbl_barang_rusak');
      $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan !');
      redirect('BarangRusak');
    }
  }

  public function edit_act($id)
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->edit_brgR($id);
    } else {
      $id_barang = $this->input->post('id_barang');
      $jml = $this->input->post('jml_barang');
      $id_tempat = $this->input->post('id_tempat');
      $ket = $this->input->post('keterangan');

      $data = [
        'id_barang' => $id_barang,
        'jml_barang' => $jml,
        'id_tempat' => $id_tempat,
        'keterangan' => $ket
      ];

      $where = ['id_br' => $id];
      $this->BarangR_model->update_data($where, $data, 'tbl_barang_rusak');
      $this->session->set_flashdata('success', 'Data Berhasil Diubah !');
      redirect('BarangRusak');
    }
  }

  function _rules()
  {
    $this->form_validation->set_rules('id_barang', 'Nama Barang', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('jml_barang', 'Jumlah Barang', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('id_tempat', 'Penempatan', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('keterangan', 'Keterangan', 'required', array('required' => '%s harus diisi !!!'));
  }
}


/* End of file BarangRusak.php */
/* Location: ./application/controllers/BarangRusak.php */