<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    check_already_login();
    $this->load->view('Login');
  }

  function Log()
  {
    check_already_login();
    $this->load->view('Login');
  }

  function Log_act()
  {
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('Login');
    } else {
      $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
      $password = htmlspecialchars($this->input->post('pass', TRUE), ENT_QUOTES);

      $cek_admin = $this->Log_model->auth_admin($username, $password);
      if ($cek_admin->num_rows() > 0) { //jika login sebagai admin
        $data = $cek_admin->row_array();
        $this->session->set_userdata('masuk', TRUE);
        $this->session->set_userdata('akses', '1');
        $this->session->set_userdata('ses_id', $data['id_admin']);
        $this->session->set_userdata('ses_nama', $data['nama']);
        redirect('Barang');
      } else { //jika login sebagai kasir
        $cek_kasir = $this->Log_model->auth_user($username, $password);
        if ($cek_kasir->num_rows() > 0) {
          $data = $cek_kasir->row_array();
          $this->session->set_userdata('masuk', TRUE);
          $this->session->set_userdata('akses', '2');
          $this->session->set_userdata('ses_id', $data['id_user']);;
          $this->session->set_userdata('ses_nama', $data['nama']);
          redirect('Barang');
        } else {
          echo "<script>
                alert('Login gagal, username atau password salah');
                window.location='" . base_url() . "';
                </script>";
        }
      }
    }
  }

  public function _rules()
  {
    $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('pass', 'Password', 'required', array('required' => '%s harus diisi !!!'));
  }

  function Logout()
  {
    $this->session->sess_destroy();
    $url = base_url('');
    redirect($url);
  }
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */