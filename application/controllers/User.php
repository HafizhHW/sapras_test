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

    $data['admin'] = $this->User_model->get_data_admin('tbl_admin')->result();
    $data['user'] = $this->User_model->get_data_user('tbl_user')->result();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('V_user', $data);
    $this->load->view('templates/footer');
  }
}


/* End of file User.php */
/* Location: ./application/controllers/User.php */