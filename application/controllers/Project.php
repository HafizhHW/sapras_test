<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path



class Project extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    check_not_login();
  }

  public function index()
  {

    $data['title'] = "Project";
    $data['judul'] = "Data Project";

    $data['project'] = $this->Project_model->get_data('tbl_project')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_project/V_project', $data);
    $this->load->view('templates/footer');
  }

  function add_project()
  {
    $data['title'] = "Project";
    $data['judul'] = "Data Project";
    $data['error'] = '';
    $data['project'] = $this->Project_model->get_data('tbl_project')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_project/Add_project', $data);
    $this->load->view('templates/footer');
  }

  function edit_project($id_project)
  {
    $data['title'] = "Project";
    $data['judul'] = "Edit Project";
    $data['error'] = '';
    $where['id_project'] = $id_project;
    $data['project'] =  $this->Project_model->update($where, 'tbl_project')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_project/Update_project', $data);
    $this->load->view('templates/footer');
  }

  function add_act()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->add_project();
    } else {
      $config = [
        'upload_path' => 'assets/F_project',
        'allowed_types' => 'pdf|doc|docx',
        'max_size' => 3072,
        'file_name' => 'Project-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
      ];
      $nm_project = $this->input->post('nm_project');
      $tgl_project = $this->input->post('tgl_project');
      $dok_project = $_FILES['doc_project']['name'];
      if ($dok_project = 'doc_project') {
        $this->load->library('upload');
        $this->upload->initialize($config);
        if ($this->upload->do_upload('doc_project')) {
          $nm_project = $this->input->post('nm_project', TRUE);
          $tgl_project = $this->input->post('tgl_project', TRUE);
          $dok_project = $this->upload->data('file_name');
          $data = [
            'nm_project' => $nm_project,
            'tgl_project' => $tgl_project,
            'doc_project' => $dok_project
          ];
          $this->Project_model->insert_data($data, 'tbl_project');
          $error = array('error' => $this->upload->display_errors());
          $this->session->set_flashdata($error);
          redirect('Project');
        } else {
          $nm_project = $this->input->post('nm_project', TRUE);
          $tgl_project = $this->input->post('tgl_project', TRUE);
          // $dok_project = $this->upload->data('file_name');
          $data = [
            'nm_project' => $nm_project,
            'tgl_project' => $tgl_project,
            // 'doc_project' => $dok_project
          ];
          $this->Project_model->insert_data($data, 'tbl_project');
          redirect('Project');
        }
      }
    }
  }

  public function update_act($id_project)
  {
    $id_project = $this->input->post('id_project');
    $config = [
      'upload_path' => 'assets/F_project',
      'allowed_types' => 'pdf|doc|docx',
      'max_size' => 3072,
      'file_name' => 'Project-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
    ];
    $this->load->library('upload');
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('doc_project')) {
      $nm_project = $this->input->post('nm_project', TRUE);
      $tgl_project = $this->input->post('tgl_project', TRUE);

      $data = [
        'nm_project' => $nm_project,
        'tgl_project' => $tgl_project,

      ];

      $this->db->where('id_project', $id_project);
      $this->db->update('tbl_project', $data);
      $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Di Ubah !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

      redirect('Project');
    } else {
      $file_doc = $this->Project_model->getDataById($id_project);
      $file = 'assets/F_project/' . $file_doc->doc_project;
      if ($file) {
        unlink('assets/F_project/' . $file_doc->doc_project);
      }

      $dokumen = $this->upload->data();
      $dokumen = $dokumen['file_name'];

      $nm_project = $this->input->post('nm_project', TRUE);
      $tgl_project = $this->input->post('tgl_project', TRUE);

      $data = [
        'nm_project' => $nm_project,
        'tgl_project' => $tgl_project,
        'doc_project' => $dokumen
      ];

      $this->db->where('id_project', $id_project);
      $this->db->update('tbl_project', $data);
      $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Di Ubah !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

      redirect('Project');
      redirect('Project/edit_project');
    }
  }

  public function delete_project($id)
  {

    $doc = $this->Project_model->getDataById($id);
    $query = $this->Project_model->hapusFile($id);
    if ($query) {
      unlink('assets/F_project/' . $doc->doc_project);
    }
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Dihapus !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('Project');
  }

  public function download($id_project)
  {
    $this->load->helper('download');
    $fileinfo = $this->Project_model->download($id_project);
    $brg = 'assets/F_project/' . $fileinfo['doc_project'];
    force_download($brg, $this->session->set_flashdata('pesan', '
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      Barang Tidak Memiliki Dokumen !
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>'));
    redirect('Project');
    var_dump($brg);
  }

  function _rules()
  {
    $this->form_validation->set_rules('nm_project', 'Nama Project', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('tgl_project', 'Tanggal Project', 'required', array('required' => '%s harus diisi !!!'));
  }
}


/* End of file Project.php */
/* Location: ./application/controllers/Project.php */