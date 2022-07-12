<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Testing extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['test'] = $this->Testing_model->get_Alldata('files');
    $data['error'] = '';
    $this->load->view('Testing/V_testing', $data);
  }

  public function add_test()
  {
    $data['test'] = $this->Testing_model->get_Alldata('files');
    $data['error'] = '';
    $this->load->view('Testing/V_Add_testing', $data);
  }

  public function edit_test($id)
  {
    $where = array('id' => $id);
    $data['test'] = $this->Testing_model->edit($where, 'files');
    $this->load->view('Testing/V_Edit_testing', $data);
  }

  // public function add_act()
  // {
  //   $judull = $this->input->post('judul');
  //   $doct = $_FILES['doc']['name'];
  //   if ($doct = ('')) {
  //   } {
  //     $config = [
  //       'upload_path' => 'assets/File',
  //       'allowed_types' => 'pdf|jpg|jpeg|png',
  //       'max_size' => 1028,
  //       'file_name' => 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
  //     ];
  //     $this->load->library('upload');
  //     $this->upload->initialize($config);


  //     if (!$this->upload->do_upload('doc')) {
  //       $error = array('error' => $this->upload->display_errors());
  //       // var_dump($error);
  //       // die;
  //       $this->load->view('Testing/V_Add_testing', $error);
  //     } else {
  //       $doct = $this->upload->data();
  //       $dokumen = $doct['file_name'];
  //       $judull = $this->input->post('judul', TRUE);

  //       $data = array(
  //         'judul' => $judull,
  //         'doc' => $dokumen
  //       );
  //       $this->db->insert('files', $data);
  //       $this->session->set_flashdata('pesan', '
  //     <div class="alert alert-success alert-dismissible fade show" role="alert">
  //       Data Berhasil Ditambahkan !
  //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //         <span aria-hidden="true">&times;</span>
  //       </button>
  //     </div>');

  //       redirect('Testing/index');
  //     }
  //   }
  // }

  //=== BERHASIL ===
  // public function add_act()
  // {
  //   $config = [
  //     'upload_path' => 'assets/File',
  //     'allowed_types' => 'pdf',
  //     'max_size' => 1028,
  //     'file_name' => 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
  //   ];
  //   $this->load->library('upload');
  //   $this->upload->initialize($config);


  //   if (!$this->upload->do_upload('doc')) {
  //     $error = array('error' => $this->upload->display_errors());
  //     // var_dump($error);
  //     // die;
  //     $this->load->view('Testing/V_Add_testing', $error);
  //   } else {
  //     $dokumen = $this->upload->data();
  //     $dokumen = $dokumen['file_name'];
  //     $judul = $this->input->post('judul', TRUE);

  //     $data = array(
  //       'judul' => $judul,
  //       'doc' => $dokumen
  //     );
  //     $this->db->insert('files', $data);
  //     $this->session->set_flashdata('pesan', '
  //     <div class="alert alert-success alert-dismissible fade show" role="alert">
  //       Data Berhasil Ditambahkan !
  //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //         <span aria-hidden="true">&times;</span>
  //       </button>
  //     </div>');

  //     redirect('Testing/index');
  //   }
  // }

  public function edit_act($id)
  {
    $id = $this->input->post('id');
    $config = [
      'upload_path' => 'assets/File',
      'allowed_types' => '*',
      'max_size' => 1028,
      'file_name' => 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
    ];
    $this->load->library('upload');
    $this->upload->initialize($config);

    if (!$this->upload->do_upload('doc')) {
      $judul = $this->input->post('judul', TRUE);

      $data = array(
        'judul' => $judul
      );

      $this->db->where('id', $id);
      $this->db->update('files', $data);
      $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Di Ubah !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

      redirect('Testing/index');
    } else {
      $file_doc = $this->Testing_model->getDataById($id);
      $file = 'assets/File/' . $file_doc->doc;
      if ($file) {
        unlink('assets/File/' . $file_doc->doc);
      }

      $dokumen = $this->upload->data();
      $dokumen = $dokumen['file_name'];
      $judul = $this->input->post('judul', TRUE);

      $data = array(
        'judul' => $judul,
        'doc' => $dokumen
      );

      $this->db->where('id', $id);
      $this->db->update('files', $data);
      $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Di Ubah !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');

      redirect('Testing/index');
      redirect('Testing/add_test');
    }
  }

  // public function edit_act3($id)
  // {
  //   $id = $this->input->post('id');
  //   $config = [
  //     'upload_path' => 'assets/File',
  //     'allowed_types' => '*',
  //     'max_size' => 1028,
  //     'file_name' => 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
  //   ];
  //   $this->load->library('upload');
  //   $this->upload->initialize($config);

  //   if (!$this->upload->do_upload('doc')) {
  //     $judul = $this->input->post('judul', TRUE);

  //     $data = array(
  //       'judul' => $judul
  //     );

  //     $this->db->where('id', $id);
  //     $this->db->update('files', $data);
  //     $this->session->set_flashdata('pesan', '
  //     <div class="alert alert-success alert-dismissible fade show" role="alert">
  //       Data Berhasil Di Ubah !
  //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //         <span aria-hidden="true">&times;</span>
  //       </button>
  //     </div>');

  //     redirect('Testing/index');
  //   } else {
  //     $dokumen = $this->upload->data();
  //     $dokumen = $dokumen['file_name'];
  //     $judul = $this->input->post('judul', TRUE);

  //     $data = array(
  //       'judul' => $judul,
  //       'doc' => $dokumen
  //     );

  //     $this->db->where('id', $id);
  //     $this->db->update('files', $data);
  //     $this->session->set_flashdata('pesan', '
  //     <div class="alert alert-success alert-dismissible fade show" role="alert">
  //       Data Berhasil Di Ubah !
  //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //         <span aria-hidden="true">&times;</span>
  //       </button>
  //     </div>');

  //     redirect('Testing/index');
  //   }
  // }

  // public function add_act2()
  // {
  //   // $this->_rules();
  //   // $dokumen = $this->Testing_model->dokumen($id);
  //   // if ($this->form_validation->run() == FALSE) {
  //   //   $this->add_test();
  //   // } else {
  //   $config = [
  //     'upload_path' => 'assets/File',
  //     'allowed_types' => '*',
  //     'max_size' => 1028,
  //     'file_name' => 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
  //   ];

  //   $this->load->library('upload');
  //   $this->upload->initialize($config);
  //   if (!$this->upload->do_upload('doc')) {
  //     // var_dump($this->upload->display_errors());
  //     // die();
  //     echo "Gagal Upload";
  //   } else {
  //     $upload_data = $this->upload->data();
  //     $name = $upload_data['file_name'];

  //     $insert = $this->Testing_model->insert_doc($name);
  //     if ($insert) {
  //       redirect('Testing');
  //     }
  //     echo "Gagal";
  //   }
  // }

  // public function edit_act2()
  // {
  //   $id = $this->input->post('id');
  //   $data = $this->Testing_model->getDataById($id);
  //   $nama = 'assets/File/' . $data->doc;

  //   if (is_readable($nama) && unlink($nama)) {
  //     $config = [
  //       'upload_path' => 'assets/File',
  //       'allowed_types' => '*',
  //       'max_size' => 1028,
  //       'file_name' => 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
  //     ];

  //     $this->load->library('upload');
  //     $this->upload->initialize($config);
  //     if (!$this->upload->do_upload('doc')) {
  //       // var_dump($this->upload->display_errors());
  //       // die();
  //       echo "Gagal Upload";
  //     } else {
  //       $upload_data = $this->upload->data();
  //       $name = $upload_data['file_name'];

  //       $data = array(
  //         'judul' => $this->input->post('judul'),
  //         'doc' => $name
  //       );
  //       $update = $this->Testing_model->updateFile($id, $data);
  //       if ($update) {
  //         redirect('Testing');
  //       } else {
  //         echo "Gagal";
  //       }
  //     }
  //   }
  // }

  // public function hapusFile($id)
  // {
  //   $data = $this->Testing_model->getDataById($id);
  //   $nama = 'assets/File/' . $data->doc;

  //   if (is_readable($nama) && unlink($nama)) {
  //     $delete = $this->Testing_model->hapusFile($id);
  //     redirect('Testing');
  //   } else {
  //     echo "Gagal";
  //   }
  // }

  public function add_act()
  {
    // $this->_rules();
    // $dokumen = $this->Testing_model->dokumen($id);
    // if ($this->form_validation->run() == FALSE) {
    //   $this->add_test();
    // } else {
    $config = [
      'upload_path' => 'assets/File',
      'allowed_types' => 'jpg|jpeg',
      'max_size' => 1028,
      'file_name' => 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
    ];
    $judull = $this->input->post('judul');
    $doct = $_FILES['doc']['name'];
    if ($doct = 'doc') {


      $this->load->library('upload');
      $this->upload->initialize($config);

      if ($this->upload->do_upload('doc')) {
        $judull = $this->input->post('judul', TRUE);
        $doct = $this->upload->data('file_name');
        $data = [
          'judul' => $judull,
          'doc' => $doct
        ];
        $this->Testing_model->insert_data($data, 'files');
        redirect('Testing');
      } elseif ($doct = '') {
        $judull = $this->input->post('judul', TRUE);
        $doct = $this->upload->data('file_name');
        $data = array(
          'judul' => $judull,
          'doc' => $doct
        );
        $this->Testing_model->insert_data($data, 'files');
        // $error = array('error' => $this->upload->display_errors());
        // $this->load->view('Testing/V_Add_testing', $error);
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata($error);
        redirect('Testing/add_test');
      } else {
        $judull = $this->input->post('judul', TRUE);
        // $doct = $this->upload->data('file_name');
        $data = array(
          'judul' => $judull,
          // 'doc' => $doct
        );
        $this->Testing_model->insert_data($data, 'files');
        redirect('Testing');
      }
    }



    // $error = array('error' => $this->upload->display_errors());
    // $this->load->view('Testing/V_Add_testing', $error);

    // $error = array('error' => $this->upload->display_errors());
    // $this->session->set_flashdata($error);

    // $this->session->set_flashdata('pesan', '
    //   <div class="alert alert-success alert-dismissible fade show" role="alert">
    //     Data Berhasil Ditambahkan !
    //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    //       <span aria-hidden="true">&times;</span>
    //     </button>
    //   </div>');

    // redirect('Testing');
    // }
  }


  public function _rules()
  {
    $this->form_validation->set_rules('judul', 'Judul', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('doc', 'Dokumen', 'required', array('required' => '%s harus diisi !!!'));
  }

  public function delete_test($id)
  {

    $doc = $this->Testing_model->getDataById($id);
    $query = $this->Testing_model->hapusFile($id);
    if ($query) {
      unlink('assets/File/' . $doc->doc);
    }
    $this->session->set_flashdata('pesan', '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Berhasil Dihapus !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
    redirect('Testing');
  }

  // public function edit_act()
  // {
  //   // $this->_rules();
  //   // $dokumen = $this->Testing_model->dokumen($id);
  //   // if ($this->form_validation->run() == FALSE) {
  //   //   $this->add_test();
  //   // } else {
  //   $judull = $this->input->post('judul');
  //   $doct = $_FILES['doc']['name'];
  //   if ($doct = '') {
  //   } {
  //     $config = [
  //       'upload_path' => 'assets/File',
  //       'allowed_types' => '*',
  //       'max_size' => 1028,
  //       'file_name' => 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
  //     ];

  //     $this->load->library('upload');
  //     $this->upload->initialize($config);
  //     if (!$this->upload->do_upload('doc')) {
  //       // var_dump($this->upload->display_errors());
  //       // die();
  //       echo "Gagal Upload";
  //     } else {
  //       $doct = $this->upload->data('file_name');
  //     }
  //   }
  //   $data = [
  //     'judul' => $judull,
  //     'doc' => $doct
  //   ];
  //   $this->Testing_model->insert_data($data, 'files');

  //   $this->session->set_flashdata('pesan', '
  //     <div class="alert alert-success alert-dismissible fade show" role="alert">
  //       Data Berhasil Ditambahkan !
  //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //         <span aria-hidden="true">&times;</span>
  //       </button>
  //     </div>');

  //   redirect('Testing/index');
  //   // }
  // }
}


/* End of file Testing.php */
/* Location: ./application/controllers/Testing.php */