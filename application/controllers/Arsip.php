<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path


class Arsip extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    check_not_login();
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

  function add_arsip()
  {
    $data['title'] = "Dokumen";
    $data['judul'] = "Tambah Dokumen";
    $data['error'] = '';
    $data['arsip'] = $this->Arsip_model->get_data('tbl_arsip')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_arsip/Add_arsip', $data);
    $this->load->view('templates/footer');
  }

  function edit_arsip($id_arsip)
  {
    $data['title'] = "Dokumen";
    $data['judul'] = "Edit Dokumen";
    $data['error'] = '';
    $where['id_arsip'] = $id_arsip;
    $data['arsip'] =  $this->Arsip_model->update($where, 'tbl_arsip')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_arsip/Update_arsip', $data);
    $this->load->view('templates/footer');
  }

  function add_act()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->add_arsip();
    } else {
      $config = [
        'upload_path' => 'assets/F_arsip',
        'allowed_types' => 'pdf|doc|docx',
        'max_size' => 3072,
        'file_name' => 'Dokumen-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
      ];
      $nm_arsip = $this->input->post('nm_arsip');
      // $tgl_project = $this->input->post('tgl_project');
      $doc_arsip = $_FILES['doc_arsip']['name'];
      if ($dok_arsip = 'doc_arsip') {
        $this->load->library('upload');
        $this->upload->initialize($config);
        if ($this->upload->do_upload('doc_arsip')) {
          $nm_arsip = $this->input->post('nm_arsip', TRUE);
          // $tgl_project = $this->input->post('tgl_project', TRUE);
          $doc_arsip = $this->upload->data('file_name');
          $data = [
            'nm_arsip' => $nm_arsip,
            // 'tgl_project' => $tgl_project,
            'doc_arsip' => $doc_arsip
          ];
          $this->Arsip_model->insert_data($data, 'tbl_arsip');
          $error = array('error' => $this->upload->display_errors());
          $this->session->set_flashdata($error);
          redirect('Arsip');
        } else {
          $nm_arsip = $this->input->post('nm_arsip', TRUE);
          // $tgl_project = $this->input->post('tgl_project', TRUE);
          // $dok_project = $this->upload->data('file_name');
          $data = [
            'nm_arsip' => $nm_arsip,
            // 'tgl_project' => $tgl_project,
            // 'doc_project' => $dok_project
          ];
          $this->Arsip_model->insert_data($data, 'tbl_arsip');
          redirect('Arsip');
        }
      }
    }
  }

  public function update_act($id_arsip)
  {
    $id_arsip = $this->input->post('id_arsip');
    $config = [
      'upload_path' => 'assets/F_arsip',
      'allowed_types' => 'pdf|doc|docx',
      'max_size' => 3072,
      'file_name' => 'Dokumen-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
    ];
    $this->load->library('upload');
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('doc_arsip')) {
      $nm_arsip = $this->input->post('nm_arsip', TRUE);
      // $tgl_project = $this->input->post('tgl_project', TRUE);

      $data = [
        'nm_arsip' => $nm_arsip,
        // 'tgl_project' => $tgl_project,

      ];

      $this->db->where('id_arsip', $id_arsip);
      $this->db->update('tbl_arsip', $data);
      $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Di Ubah !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

      redirect('Arsip');
    } else {
      $file_doc = $this->Arsip_model->getDataById($id_arsip);
      $file = 'assets/F_arsip/' . $file_doc->doc_arsip;
      if ($file) {
        unlink('assets/F_arsip/' . $file_doc->doc_arsip);
      }

      $dokumen = $this->upload->data();
      $dokumen = $dokumen['file_name'];

      $nm_arsip = $this->input->post('nm_arsip', TRUE);
      // $tgl_project = $this->input->post('tgl_project', TRUE);

      $data = [
        'nm_arsip' => $nm_arsip,
        // 'tgl_project' => $tgl_project,
        'doc_arsip' => $dokumen
      ];

      $this->db->where('id_arsip', $id_arsip);
      $this->db->update('tbl_arsip', $data);
      $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Di Ubah !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

      redirect('Arsip');
      redirect('Arsip/edit_arsip');
    }
  }

  public function delete_arsip($id)
  {

    $doc = $this->Arsip_model->getDataById($id);
    $query = $this->Arsip_model->hapusFile($id);
    if ($query) {
      unlink('assets/F_arsip/' . $doc->doc_arsip);
    }
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Dihapus !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('Arsip');
  }

  public function download($id_arsip)
  {
    $this->load->helper('download');
    $fileinfo = $this->Arsip_model->download($id_arsip);
    $brg = 'assets/F_arsip/' . $fileinfo['doc_arsip'];
    force_download($brg, $this->session->set_flashdata('pesan', '
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      Barang Tidak Memiliki Dokumen !
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>'));
    redirect('Arsip');
    // var_dump($brg);
  }

  function _rules()
  {
    $this->form_validation->set_rules('nm_arsip', 'Nama Dokumen', 'required', array('required' => '%s harus diisi !!!'));
    // $this->form_validation->set_rules('tgl_project', 'Tanggal Project', 'required', array('required' => '%s harus diisi !!!'));
  }
}


/* End of file Arsip.php */
/* Location: ./application/controllers/Arsip.php */