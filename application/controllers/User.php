<?php
defined('BASEPATH') or exit('No direct script access allowed');


class User extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = "User";
    $data['judul'] = "Data User";
    $data['error'] = '';
    $data['admin'] = $this->User_model->get_data_admin('tbl_admin')->result();
    $data['user'] = $this->User_model->get_data_user('tbl_user')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_user/V_user', $data);
    $this->load->view('templates/footer');
  }

  function add_admin()
  {
    $data['title'] = "User";
    $data['judul'] = "Data Admin";
    $data['error'] = '';
    $data['admin'] = $this->User_model->get_data_admin('tbl_admin')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_user/V_AddAdmin', $data);
    $this->load->view('templates/footer');
  }

  function addAdmin_act()
  {
  }

  function _rules()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('pass', 'Password', 'required', array('required' => '%s harus diisi !!!'));
  }
}


/* End of file User.php */
/* Location: ./application/controllers/User.php */