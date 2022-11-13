<?php
defined('BASEPATH') or exit('No direct script access allowed');


class User extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    check_not_login();
  }

  public function index()
  {
    $data['title'] = "Administrator";
    $data['judul'] = "Administrator";
    $data['error'] = '';
    // $data['admin'] = $this->User_model->get_data('tbl_admin')->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_user/V_Users', $data);
    $this->load->view('templates/footer');
  }

  public function ViewUser()
  {
    $data['title'] = "Administrator";
    $data['judul'] = "Data User";
    $data['error'] = '';
    // $data['admin'] = $this->User_model->get_data('tbl_admin')->result();
    $data['user'] = $this->User_model->get_data('tbl_user')->result();
    // $data['tempat'] = $this->User_model->get_data('tbl_tempat')->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_user/V_user', $data);
    $this->load->view('templates/footer');
  }

  public function ViewAdmin()
  {
    // $config1['base_url'] = site_url('User/ViewAdmin/index'); //site url
    // $config1['total_rows'] = $this->db->count_all('tbl_admin'); //total row

    // $config1['per_page'] = 4;  //show record per halaman
    // $config1["uri_segment"] = 4;  // uri parameter

    // $choice = $config1["total_rows"] / $config1["per_page"];
    // $config1["num_links"] = floor($choice);

    // // Membuat Style pagination untuk BootStrap v4
    // $config1['first_link']       = 'First';
    // $config1['last_link']        = 'Last';
    // $config1['next_link']        = 'Next';
    // $config1['prev_link']        = 'Prev';
    // $config1['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-end">';
    // $config1['full_tag_close']   = '</ul></nav></div>';
    // $config1['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    // $config1['num_tag_close']    = '</span></li>';
    // $config1['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    // $config1['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    // $config1['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    // $config1['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    // $config1['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    // $config1['prev_tagl_close']  = '</span>Next</li>';
    // $config1['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    // $config1['first_tagl_close'] = '</span></li>';
    // $config1['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    // $config1['last_tagl_close']  = '</span></li>';

    // $this->pagination->initialize($config1);
    // $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

    // //panggil function get_produk_list yang ada pada model 
    // $data['admin'] = $this->User_model->get_admin_list($config1["per_page"], $data['page']);


    // $data['pagination1'] = $this->pagination->create_links();
    // //END konfigurasi pagination admin

    $data['title'] = "Aministrator";
    $data['judul'] = "Data Admin";
    $data['error'] = '';
    $data['admin'] = $this->User_model->get_data('tbl_admin')->result();
    // $data['user'] = $this->User_model->get_data('tbl_user')->result();
    // $data['tempat'] = $this->User_model->get_data('tbl_tempat')->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_user/V_Admin', $data);
    $this->load->view('templates/footer');
  }

  public function ViewTempat()
  {
    $data['title'] = "Aministrator";
    $data['judul'] = "Data Tempat";
    $data['error'] = '';
    // $data['admin'] = $this->User_model->get_data('tbl_admin')->result();
    // $data['user'] = $this->User_model->get_data('tbl_user')->result();
    $data['tempat'] = $this->User_model->get_data('tbl_tempat')->result();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_user/V_Tempat', $data);
    $this->load->view('templates/footer');
  }


  function add_admin()
  {
    $data['title'] = "Administrator";
    $data['judul'] = "Data Admin";
    $data['error'] = '';
    $data['admin'] = $this->User_model->get_data('tbl_admin')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_user/V_AddAdmin', $data);
    $this->load->view('templates/footer');
  }

  function add_user()
  {
    $data['title'] = "User";
    $data['judul'] = "Data User";
    $data['error'] = '';
    $data['admin'] = $this->User_model->get_data('tbl_user')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_user/V_AddUser', $data);
    $this->load->view('templates/footer');
  }

  function add_tempat()
  {
    $data['title'] = "Tempat Penyimpanan";
    $data['judul'] = "Data Tempat";
    $data['error'] = '';
    $data['admin'] = $this->User_model->get_data('tbl_tempat')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_user/V_AddTempat', $data);
    $this->load->view('templates/footer');
  }

  function addAdmin_act()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->add_admin();
    } else {
      $id = $this->input->post('id_admin');
      $uname = $this->input->post('username');
      $nama = $this->input->post('nama');
      $pass = $this->input->post('pass');

      $data = [
        'id_admin' => $id,
        'username' => $uname,
        'nama' => $nama,
        'pass' => MD5($pass)
      ];

      $this->User_model->insert_data($data, 'tbl_admin');
      $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan !');

      redirect('User/ViewAdmin');
    }
  }

  function addUser_act()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->add_user();
    } else {
      $id = $this->input->post('id_user');
      $uname = $this->input->post('username');
      $nama = $this->input->post('nama');
      $pass = $this->input->post('pass');

      $data = [
        'id_user' => $id,
        'username' => $uname,
        'nama' => $nama,
        'pass' => MD5($pass)
      ];

      $this->User_model->insert_data($data, 'tbl_user');
      $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan !');

      redirect('User/ViewUser');
    }
  }

  function addTempat_act()
  {
    $this->form_validation->set_rules('nm_tempat', 'Nama Tempat', 'trim|required|max_length[30]', array('required' => '%s harus diisi !!!'));
    if ($this->form_validation->run() == FALSE) {
      $this->add_tempat();
    } else {
      $id = $this->input->post('id_tempat');
      $tempat = $this->input->post('nm_tempat');


      $data = [
        'id_tempat' => $id,
        'nm_tempat' => $tempat,

      ];

      $this->User_model->insert_data($data, 'tbl_tempat');
      $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan !');

      redirect('User/ViewTempat');
    }
  }

  function delete_admin($id)
  {
    $where = array('id_admin' => $id);
    $this->User_model->delete_data($where, 'tbl_admin');
    $this->session->set_flashdata('success', 'Data Berhasil Dihapus !');
    redirect('User/ViewAdmin');
  }

  function delete_user($id)
  {
    $where = array('id_user' => $id);
    $this->User_model->delete_data($where, 'tbl_user');
    $this->session->set_flashdata('success', 'Data Berhasil Dihapus !');
    redirect('User/ViewUser');
  }

  function delete_tempat($id)
  {
    $where = array('id_tempat' => $id);
    $this->User_model->delete_data($where, 'tbl_tempat');
    $this->session->set_flashdata('success', 'Data Berhasil Dihapus !');
    redirect('User/ViewTempat');
  }

  // public function ViewProfile()
  // {
  //   $data['title'] = "Profile";
  //   $data['judul'] = "Profile";
  //   $data['error'] = '';
  //   $data['user'] = $this->User_model->get_data_login($this->session->userdata('sess_id'));

  //   $this->load->view('templates/header', $data);
  //   $this->load->view('templates/sidebar');
  //   $this->load->view('F_user/V_Profile', $data);
  //   $this->load->view('templates/footer');
  // }

  public function _usernameRegex($userName)
  {
    if (preg_match('/^[a-z0-9]+$/', $userName)) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  function _rules()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'trim|required|max_length[50]', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]|max_length[15]|xss_clean|callback__usernameRegex', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[6]|max_length[12]', array('required' => '%s harus diisi !!!'));
  }
}


/* End of file User.php */
/* Location: ./application/controllers/User.php */