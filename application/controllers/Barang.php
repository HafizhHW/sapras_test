<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Barang extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    check_not_login();
  }

  public function index()
  {
    $this->ViewAllBarang();
  }

  public function ViewAllBarang()
  {

    $data['title'] = "Barang";
    $data['judul'] = "Data Barang";
    $data['join'] = $this->Barang_model->get_join('tbl_barang');
    $data['barang'] = $this->Barang_model->get_data('tbl_barang')->result();
    $data['tempat'] = $this->Barang_model->get_tempat('tbl_tempat')->result();
    $data['jurusan'] = $this->Barang_model->get_jurusan('tbl_jurusan')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_barang/V_barang', $data);
    $this->load->view('templates/footer');
  }

  public function add_barang()
  {
    $data['title'] = "Barang";
    $data['judul'] = "Data Barang";
    $data['error'] = '';
    $data['join'] = $this->Barang_model->get_join('tbl_barang');
    $data['barang'] = $this->Barang_model->get_data('tbl_barang')->result();
    $data['tempat'] = $this->Barang_model->get_tempat('tbl_tempat')->result();
    $data['jurusan'] = $this->Barang_model->get_jurusan('tbl_jurusan')->result();
    // var_dump($data['jurusan']);
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_barang/Add_barang', $data);
    $this->load->view('templates/footer');
  }

  public function ViewTkj()
  {
    $data['title'] = "Barang";
    $data['judul'] = "Data Barang";
    $data['error'] = '';
    $data['tkj'] = $this->Jurusan_model->get_Tkj('tbl_jurusan')->result();
    // $data['tkj'] = $this->Jurusan_model->get_Mm('tbl_jurusan')->result();
    // $data['tkj'] = $this->Jurusan_model->get_Tkj('tbl_jurusan')->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_jurusan/V_Tkj', $data);
    $this->load->view('templates/footer');
  }

  public function ViewMm()
  {
    $data['title'] = "Barang";
    $data['judul'] = "Data Barang";
    $data['error'] = '';
    $data['mm'] = $this->Jurusan_model->get_Mm('tbl_jurusan')->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_jurusan/V_Mm', $data);
    $this->load->view('templates/footer');
  }

  public function ViewTm()
  {
    $data['title'] = "Barang";
    $data['judul'] = "Data Barang";
    $data['error'] = '';
    $data['tm'] = $this->Jurusan_model->get_Tm('tbl_jurusan')->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_jurusan/V_Tm', $data);
    $this->load->view('templates/footer');
  }

  public function ViewTkr()
  {
    $data['title'] = "Barang";
    $data['judul'] = "Data Barang";
    $data['error'] = '';
    $data['tkr'] = $this->Jurusan_model->get_Tkr('tbl_jurusan')->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_jurusan/V_Tkr', $data);
    $this->load->view('templates/footer');
  }

  public function ViewAk()
  {
    $data['title'] = "Barang";
    $data['judul'] = "Data Barang";
    $data['error'] = '';
    $data['ak'] = $this->Jurusan_model->get_Ak('tbl_jurusan')->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_jurusan/V_Ak', $data);
    $this->load->view('templates/footer');
  }

  public function ViewAp()
  {
    $data['title'] = "Barang";
    $data['judul'] = "Data Barang";
    $data['error'] = '';
    $data['ap'] = $this->Jurusan_model->get_Ap('tbl_jurusan')->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_jurusan/V_Ap', $data);
    $this->load->view('templates/footer');
  }

  public function edit_barang($id_barang)
  {
    $data['title'] = "Barang";
    $data['judul'] = "Data Barang";
    $data['error'] = '';
    $where = array('id_barang' => $id_barang);
    $data['join'] = $this->Barang_model->get_join('tbl_barang');
    // $data['join'] = $this->Barang_model->get_joinUpdate($where, 'tbl_barang');
    $data['barang'] =  $this->Barang_model->update($where, 'tbl_barang')->result();
    $data['tempat'] = $this->Barang_model->get_tempat('tbl_tempat')->result();
    $data['jurusan'] = $this->Barang_model->get_jurusan('tbl_jurusan')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_barang/Update_barang', $data);
    $this->load->view('templates/footer');
  }

  public function filter()
  {
    $data['title'] = "Barang";
    $data['judul'] = "Data Barang";
    $data['join'] = $this->Barang_model->get_join('tbl_barang');
    $data['barang'] = $this->Barang_model->get_data('tbl_barang')->result();
    $data['tempat'] = $this->Barang_model->get_tempat('tbl_tempat')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_barang/V_barang', $data);
    $this->load->view('templates/footer');
  }

  // function add_act()
  // {
  //   $this->_rules();

  //   if ($this->form_validation->run() == FALSE) {
  //     $this->add_barang();
  //   } else {
  //     $nm_barang = $this->input->post('nm_barang', TRUE);
  //     $no_seri = $this->input->post('no_seri', TRUE);
  //     $jml_barang = $this->input->post('jml_barang', TRUE);
  //     $kat_barang = $this->input->post('kat_barang', TRUE);
  //     $kat_anggaran = $this->input->post('kat_anggaran', TRUE);
  //     $thn_pengadaan = $this->input->post('thn_pengadaan', TRUE);
  //     $penempatan = $this->input->post('penempatan', TRUE);
  //     $doct = $_FILES['doc_barang']['name'];
  //     if (!empty($doct->doc_barang)) {
  //       $config = [
  //         'upload_path' => 'assets/F_doc_brg',
  //         'allowed_types' => 'pdf|doc|docx|xls|xlsx|jpg|jpeg|png',
  //         'max_size' => 3072,
  //         'file_name' => 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
  //       ];

  //       $this->load->library('upload');
  //       $this->upload->initialize($config);
  //       if (!$this->upload->do_upload('doc_barang')) {
  //         // var_dump($this->upload->display_errors());
  //         // die();
  //         // $this->add_barang($error);
  //         // var_dump($this->add_barang($error));
  //         // echo "Gagal Tambah !";
  //         $error = array('error' => $this->upload->display_errors());
  //         $this->session->set_flashdata($error);
  //         redirect('Barang/add_barang');
  //         // redirect('Barang/index');
  //       } else {


  //         $doct = $this->upload->data('file_name');


  //         $data = array(
  //           'nm_barang' => $nm_barang,
  //           'no_seri' => $no_seri,
  //           'jml_barang' => $jml_barang,
  //           'kat_barang' => $kat_barang,
  //           'kat_anggaran' => $kat_anggaran,
  //           'thn_pengadaan' => $thn_pengadaan,
  //           'penempatan' => $penempatan,
  //           'doc_barang' => $doct
  //         );
  //         $this->Barang_model->insert_data($data, 'tbl_barang');

  //         $this->session->set_flashdata('pesan', '
  //       <div class="alert alert-success alert-dismissible fade show" role="alert">
  //         Data Berhasil Ditambahkan !
  //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //           <span aria-hidden="true">&times;</span>
  //         </button>
  //       </div>');
  //         redirect('Barang/index');
  //       }
  //     }
  //   }
  // }


  // ==== BAWAH OK ====
  function add_act()
  {
    $this->_rules();

    if ($this->form_validation->run() == FALSE) {
      $this->add_barang();
    } else {

      $config = [
        'upload_path' => 'assets/F_doc_brg',
        'allowed_types' => 'pdf|doc|docx|xls|xlsx|jpg|jpeg|png',
        'max_size' => 3072,
        'file_name' => 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
      ];

      $this->load->library('upload');
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('doc_barang')) {
        // var_dump($this->upload->display_errors());
        // die();
        // $this->add_barang($error);
        // var_dump($this->add_barang($error));
        // echo "Gagal Tambah !";
        $error = array('error' => $this->upload->display_errors());

        $this->session->set_flashdata($error);
        $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan !');
        redirect('Barang/add_barang');
      } else {


        $dokumen = $this->upload->data();
        $dokumen = $dokumen['file_name'];
        $nm_barang = $this->input->post('nm_barang', TRUE);
        $no_seri = $this->input->post('no_seri', TRUE);
        $jml_barang = $this->input->post('jml_barang', TRUE);
        $unit = $this->input->post('unit', TRUE);
        $kat_barang = $this->input->post('kat_barang', TRUE);
        $kat_anggaran = $this->input->post('kat_anggaran', TRUE);
        $thn_pengadaan = $this->input->post('thn_pengadaan', TRUE);
        $id_tempat = $this->input->post('id_tempat', TRUE);
        $id_jurusan = $this->input->post('id_jurusan', TRUE);

        $data = array(
          'nm_barang' => $nm_barang,
          'no_seri' => $no_seri,
          'jml_barang' => $jml_barang,
          'unit' => $unit,
          'kat_barang' => $kat_barang,
          'kat_anggaran' => $kat_anggaran,
          'thn_pengadaan' => $thn_pengadaan,
          'id_tempat' => $id_tempat,
          'id_jurusan' => $id_jurusan,
          'doc_barang' => $dokumen
        );
        $this->Barang_model->insert_data($data, 'tbl_barang');

        $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan !');

        // $this->session->set_flashdata('pesan', '
        // <div class="alert alert-success alert-dismissible fade show" role="alert">
        //   Data Berhasil Ditambahkan !
        //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">&times;</span>
        //   </button>
        // </div>');

        redirect('Barang/index');
      }
    }
  }


  // === BAWAH TEST ===

  // function add_act()
  // {
  //   // $this->_rules();

  //   // if ($this->form_validation->run() == FALSE) {
  //   //   $this->add_barang();
  //   // } else {

  //   $nm_barang = $this->input->post('nm_barang', TRUE);
  //   $no_seri = $this->input->post('no_seri', TRUE);
  //   $jml_barang = $this->input->post('jml_barang', TRUE);
  //   $kat_barang = $this->input->post('kat_barang', TRUE);
  //   $kat_anggaran = $this->input->post('kat_anggaran', TRUE);
  //   $thn_pengadaan = $this->input->post('thn_pengadaan', TRUE);
  //   $penempatan = $this->input->post('penempatan', TRUE);
  //   $dokumen = $this->upload->data();
  //   $dokumen = $$_FILES['doc_barang']['name'];
  //   $dokumen = $_POST['file_upload'];
  //   if (empty($dokumen) === true) {
  //     echo "Gagal Upload";
  //   } else {
  //     print_r($_FILES);
  //     $dokumen = $this->upload->data('file_name');
  //   }
  //   $data = [
  //     'nm_barang' => $nm_barang,
  //     'no_seri' => $no_seri,
  //     'jml_barang' => $jml_barang,
  //     'kat_barang' => $kat_barang,
  //     'kat_anggaran' => $kat_anggaran,
  //     'thn_pengadaan' => $thn_pengadaan,
  //     'penempatan' => $penempatan,
  //   ];
  //   $this->Barang_model->insert_data($data, 'tbl_barang');
  //   $this->session->set_flashdata('pesan', '
  //       <div class="alert alert-success alert-dismissible fade show" role="alert">
  //         Data Berhasil Ditambahkan !
  //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //           <span aria-hidden="true">&times;</span>
  //         </button>
  //       </div>');
  //   redirect('Barang/add_barang');
  //   // $config = [
  //   //   'upload_path' => 'assets/F_doc_brg',
  //   //   'allowed_types' => 'pdf|doc|docx|xls|xlsx|jpg|jpeg|png',
  //   //   'max_size' => 3072,
  //   //   'file_name' => 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
  //   // ];

  //   // $this->load->library('upload');
  //   // $this->upload->initialize($config);
  //   // if ($this->upload->do_upload('doc_barang')) { //jika mengisi dokumen maka harus di validasi

  //   //   $dokumen = $this->upload->data();
  //   //   $dokumen = $dokumen['file_name'];


  //   //   $data = array(
  //   //     'nm_barang' => $nm_barang,
  //   //     'no_seri' => $no_seri,
  //   //     'jml_barang' => $jml_barang,
  //   //     'kat_barang' => $kat_barang,
  //   //     'kat_anggaran' => $kat_anggaran,
  //   //     'thn_pengadaan' => $thn_pengadaan,
  //   //     'penempatan' => $penempatan,
  //   //     'doc_barang' => $dokumen
  //   //   );
  //   //   $this->Barang_model->insert_data($data, 'tbl_barang');

  //   //   $error = array('error' => $this->upload->display_errors());
  //   //   $this->session->set_flashdata($error);
  //   //   redirect('Barang/add_barang');

  //   //   // $this->session->set_flashdata('pesan', '
  //   //   // <div class="alert alert-success alert-dismissible fade show" role="alert">
  //   //   //   Data Berhasil Ditambahkan !
  //   //   //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //   //   //     <span aria-hidden="true">&times;</span>
  //   //   //   </button>
  //   //   // </div>');
  //   //   // $this->add_barang($error);
  //   //   // redirect('Barang/add_barang');
  //   //   // ===


  //   // } else if (!$this->upload->do_upload('doc_barang')) { //jika tidak mengisi dokumen maka langusng ke index
  //   //   $nm_barang = $this->input->post('nm_barang', TRUE);
  //   //   $no_seri = $this->input->post('no_seri', TRUE);
  //   //   $jml_barang = $this->input->post('jml_barang', TRUE);
  //   //   $kat_barang = $this->input->post('kat_barang', TRUE);
  //   //   $kat_anggaran = $this->input->post('kat_anggaran', TRUE);
  //   //   $thn_pengadaan = $this->input->post('thn_pengadaan', TRUE);
  //   //   $penempatan = $this->input->post('penempatan', TRUE);

  //   //   $data = array(
  //   //     'nm_barang' => $nm_barang,
  //   //     'no_seri' => $no_seri,
  //   //     'jml_barang' => $jml_barang,
  //   //     'kat_barang' => $kat_barang,
  //   //     'kat_anggaran' => $kat_anggaran,
  //   //     'thn_pengadaan' => $thn_pengadaan,
  //   //     'penempatan' => $penempatan,

  //   //   );
  //   //   $this->Barang_model->insert_data($data, 'tbl_barang');
  //   //   $error = array('error' => $this->upload->display_errors());
  //   //   $this->session->set_flashdata($error);

  //   //   redirect('Barang/index');
  //   // }
  //   // }
  // }

  // function add_act()
  // {
  //   $this->_rules();

  //   if ($this->form_validation->run() == FALSE) {
  //     $this->add_barang();
  //   } else {

  //     $config = [
  //       'upload_path' => 'assets/F_doc_brg',
  //       'allowed_types' => 'pdf|doc|docx|xls|xlsx|jpg|jpeg|png',
  //       'max_size' => 3072,
  //       'file_name' => 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
  //     ];

  //     $this->load->library('upload');
  //     $this->upload->initialize($config);
  //     if ($this->upload->do_upload('doc_barang')) { //jika mengisi dokumen maka harus di validasi

  //       $dokumen = $this->upload->data();
  //       $dokumen = $dokumen['file_name'];
  //       $nm_barang = $this->input->post('nm_barang', TRUE);
  //       $no_seri = $this->input->post('no_seri', TRUE);
  //       $jml_barang = $this->input->post('jml_barang', TRUE);
  //       $kat_barang = $this->input->post('kat_barang', TRUE);
  //       $kat_anggaran = $this->input->post('kat_anggaran', TRUE);
  //       $thn_pengadaan = $this->input->post('thn_pengadaan', TRUE);
  //       $penempatan = $this->input->post('penempatan', TRUE);

  //       $data = array(
  //         'nm_barang' => $nm_barang,
  //         'no_seri' => $no_seri,
  //         'jml_barang' => $jml_barang,
  //         'kat_barang' => $kat_barang,
  //         'kat_anggaran' => $kat_anggaran,
  //         'thn_pengadaan' => $thn_pengadaan,
  //         'penempatan' => $penempatan,
  //         'doc_barang' => $dokumen
  //       );
  //       $this->Barang_model->insert_data($data, 'tbl_barang');

  //       $error = array('error' => $this->upload->display_errors());
  //       $this->session->set_flashdata($error);
  //       redirect('Barang/add_barang');

  //       // $this->session->set_flashdata('pesan', '
  //       // <div class="alert alert-success alert-dismissible fade show" role="alert">
  //       //   Data Berhasil Ditambahkan !
  //       //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  //       //     <span aria-hidden="true">&times;</span>
  //       //   </button>
  //       // </div>');
  //       // $this->add_barang($error);
  //       // redirect('Barang/add_barang');
  //       // ===


  //     } else if (!$this->upload->do_upload('doc_barang')) { //jika tidak mengisi dokumen maka langusng ke index
  //       $nm_barang = $this->input->post('nm_barang', TRUE);
  //       $no_seri = $this->input->post('no_seri', TRUE);
  //       $jml_barang = $this->input->post('jml_barang', TRUE);
  //       $kat_barang = $this->input->post('kat_barang', TRUE);
  //       $kat_anggaran = $this->input->post('kat_anggaran', TRUE);
  //       $thn_pengadaan = $this->input->post('thn_pengadaan', TRUE);
  //       $penempatan = $this->input->post('penempatan', TRUE);

  //       $data = array(
  //         'nm_barang' => $nm_barang,
  //         'no_seri' => $no_seri,
  //         'jml_barang' => $jml_barang,
  //         'kat_barang' => $kat_barang,
  //         'kat_anggaran' => $kat_anggaran,
  //         'thn_pengadaan' => $thn_pengadaan,
  //         'penempatan' => $penempatan,

  //       );
  //       $this->Barang_model->insert_data($data, 'tbl_barang');
  //       $error = array('error' => $this->upload->display_errors());
  //       $this->session->set_flashdata($error);

  //       redirect('Barang/index');
  //     }
  //   }
  // }

  // === END TEST ===

  public function update_act($id_barang)
  {

    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->edit_barang($id_barang);
    } else {
      // validasi dokumen
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata($error);


      $id_barang = $this->input->post('id_barang');
      $config = [
        'upload_path' => 'assets/F_doc_brg',
        'allowed_types' => 'pdf|doc|docx|xls|xlsx|jpg|jpeg|png',
        'max_size' => 3072,
        'file_name' => 'item-' . date('ymd') . '-' . substr(md5(rand()), 0, 10)
      ];

      $this->load->library('upload');
      $this->upload->initialize($config);
      if (!$this->upload->do_upload('doc_barang')) {
        $nm_barang = $this->input->post('nm_barang', TRUE);
        $no_seri = $this->input->post('no_seri', TRUE);
        $jml_barang = $this->input->post('jml_barang', TRUE);
        $unit = $this->input->post('unit', TRUE);
        $kat_barang = $this->input->post('kat_barang', TRUE);
        $kat_anggaran = $this->input->post('kat_anggaran', TRUE);
        $thn_pengadaan = $this->input->post('thn_pengadaan', TRUE);
        $id_tempat = $this->input->post('id_tempat', TRUE);
        $id_jurusan = $this->input->post('id_jurusan', TRUE);
        // $doc_barang = $this->input->post('doc_barang', TRUE);

        $data = array(
          'nm_barang' => $nm_barang,
          'no_seri' => $no_seri,
          'jml_barang' => $jml_barang,
          'unit' => $unit,
          'kat_barang' => $kat_barang,
          'kat_anggaran' => $kat_anggaran,
          'thn_pengadaan' => $thn_pengadaan,
          'id_tempat' => $id_tempat,
          'id_jurusan' => $id_jurusan,
          // 'doc_barang' => $doc_barang
        );
        // var_dump($this->upload->display_errors());
        // die();

        $this->db->where('id_barang', $id_barang);
        $this->db->update('tbl_barang', $data);

        $this->session->set_flashdata('success', 'Data Berhasil Diubah !');

        redirect('Barang/index');
      } else {
        // validasi dokumen
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata($error);

        $file_doc = $this->Barang_model->getDataById($id_barang);
        $file = 'assets/F_doc_brg/' . $file_doc->doc_barang;
        if ($file) {
          unlink('assets/F_doc_brg/' . $file_doc->doc_barang);
        }

        $dokumen = $this->upload->data();
        $dokumen = $dokumen['file_name'];
        $nm_barang = $this->input->post('nm_barang', TRUE);
        $no_seri = $this->input->post('no_seri', TRUE);
        $jml_barang = $this->input->post('jml_barang', TRUE);
        $kat_barang = $this->input->post('kat_barang', TRUE);
        $kat_anggaran = $this->input->post('kat_anggaran', TRUE);
        $thn_pengadaan = $this->input->post('thn_pengadaan', TRUE);
        $id_tempat = $this->input->post('id_tempat', TRUE);
        $id_jurusan = $this->input->post('id_jurusan', TRUE);

        $data = array(
          'nm_barang' => $nm_barang,
          'no_seri' => $no_seri,
          'jml_barang' => $jml_barang,
          'kat_barang' => $kat_barang,
          'kat_anggaran' => $kat_anggaran,
          'thn_pengadaan' => $thn_pengadaan,
          'id_tempat' => $id_tempat,
          'id_jurusan' => $id_jurusan,
          'doc_barang' => $dokumen
        );
        // $this->Barang_model->update_barang($data);
        $this->db->where('id_barang', $id_barang);
        $this->db->update('tbl_barang', $data);

        $this->session->set_flashdata('success', 'Data Berhasil Diubah !');

        redirect('Barang/index');
      }
    }
  }

  public function delete_brg($id_barang)
  {

    $doc = $this->Barang_model->getDataById($id_barang);
    $query = $this->Barang_model->hapusFile($id_barang);
    if ($query) {
      unlink('assets/F_doc_brg/' . $doc->doc_barang);
    }
    $this->session->set_flashdata('success', 'Data Berhasil Dihapus !');
    redirect('Barang');
  }

  public function download($id_barang)
  {
    $this->load->helper('download');
    $fileinfo = $this->Barang_model->download($id_barang);
    $brg = 'assets/F_doc_brg/' . $fileinfo['doc_barang'];
    force_download($brg, $this->session->set_flashdata('success', 'Dokumen Berhasil Diunduh !'));

    redirect('Barang');
    var_dump($brg);
  }

  public function _rules()
  {
    $this->form_validation->set_rules('nm_barang', 'Nama Barang', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('jml_barang', 'Jumlah Barang', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('kat_barang', 'Jenis Anggaran', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('thn_pengadaan', 'Tahun Pengadaan', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('id_tempat', 'Penempatan', 'required', array('required' => '%s harus diisi !!!'));
    // $this->form_validation->set_rules('doc_barang', 'Dokumen', '', 'callback_validate_file');
    // $this->form_validation->set_rules('doc_barang', 'Dokumen', '', 'callback_file_check');
  }

  public function validate_file()
  {
    $check = TRUE;
    if ((!isset($_FILES['doc_barang'])) || $_FILES['doc_barang']['size'] == 0) {
      $this->form_validation->set_message('validate_file', 'The {field} field is required');
      $check = FALSE;
    } else if (isset($_FILES['doc_barang']) && $_FILES['doc_barang']['size'] != 0) {
      $allowedExts = array("jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG", "doc", "docx", "xls", "xlsx", "pdf");
      $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
      $extension = pathinfo($_FILES["doc_barang"]["name"], PATHINFO_EXTENSION);
      $detectedType = exif_imagetype($_FILES['doc_barang']['tmp_name']);
      $type = $_FILES['doc_barang']['type'];
      if (!in_array($detectedType, $allowedTypes)) {
        $this->form_validation->set_message('validate_file', 'Invalid File Content!');
        $check = FALSE;
      }
      if (filesize($_FILES['doc_barang']['tmp_name']) > 3145728) {
        $this->form_validation->set_message('validate_file', 'The  file size shoud not exceed 3MB!');
        $check = FALSE;
      }
      if (!in_array($extension, $allowedExts)) {
        $this->form_validation->set_message('validate_file', "Invalid file extension {$extension}");
        $check = FALSE;
      }
    }
    return $check;
  }

  public function file_check($str)
  {
    $allowed_mime_type_arr = array('application/pdf', 'application/doc', 'application/docx', 'application/xls', 'application/xlsx', 'image/jpeg', 'image/jpg', 'image/png');
    $mime = get_mime_by_extension($_FILES['doc_barang']['name']);
    if (isset($_FILES['doc_barang']['name']) && $_FILES['doc_barang']['name'] != "") {
      if (in_array($mime, $allowed_mime_type_arr)) {
        return true;
      } else {
        $this->form_validation->set_message('file_check', 'Please select only pdf/gif/jpg/png file.');
        return false;
      }
    } else {
      $this->form_validation->set_message('file_check', 'Please choose a file to upload.');
      return false;
    }
  }

  public function print()
  {
    $data['barang'] = $this->Barang_model->get_data('tbl_barang')->result();
    $this->load->view('F_barang/Print_barang', $data);
    // $this->index();
    // redirect('Barang');
  }

  public function Dompdf_gen()
  {
    $this->load->library(('dompdf_gen'));

    // $data['barang'] = $this->Barang_model->get_data('tbl_barang')->result();
    $data['join'] = $this->Barang_model->get_join('tbl_barang');

    $this->load->view('F_barang/laporanpdf.php', $data);

    $papaer_size = 'A4';
    $orientation = 'potrait';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($papaer_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("laporan_barang", array('Attachment' => 0));
    exit();
  }
}


/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */