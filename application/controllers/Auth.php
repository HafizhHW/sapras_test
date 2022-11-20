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

  // function Log()
  // {
  //   check_already_login();
  //   $this->load->view('Login');
  // }

  public function Log_act()
  {

    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->index();
    } else {
?>
      <link rel="stylesheet" href="<?= base_url() ?>assets/sweetalert2/sweetalert2.min.css">
      <script src="<?= base_url() ?>assets/sweetalert2/sweetalert2.min.js"></script>
      <style>
        body {
          font-family: "Helvetica Neue", Helvetica, Arial, Helvetica, sans-serif;
          font-size: 1.125em;
          font-weight: normal;
        }
      </style>

      <body></body>
      <?php
      $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
      $password = htmlspecialchars($this->input->post('pass', TRUE), ENT_QUOTES);

      $cek_admin = $this->Log_model->auth_admin($username, $password);
      if ($cek_admin->num_rows() > 0) { //jika login sebagai admin

        $data = $cek_admin->row_array();
        $this->session->set_userdata('masuk', TRUE);
        $this->session->set_userdata('akses', '1');
        $this->session->set_userdata('ses_id', $data['id_admin']);
        $this->session->set_userdata('ses_nama', $data['nama']);
        $this->session->set_userdata('ses_username', $data['username']);
        $nm = $this->session->userdata('ses_nama');

        $this->session->set_flashdata('success', "Selamat Datang $nm");

        redirect('Barang');
      } else { //jika login sebagai kasir
        $cek_kasir = $this->Log_model->auth_user($username, $password);
        if ($cek_kasir->num_rows() > 0) {
          $data = $cek_kasir->row_array();
          $this->session->set_userdata('masuk', TRUE);
          $this->session->set_userdata('akses', '2');
          $this->session->set_userdata('ses_id', $data['id_user']);
          $this->session->set_userdata('ses_nama', $data['nama']);
          $this->session->set_userdata('ses_username', $data['username']);
          $nm = $this->session->userdata('ses_nama');

          $this->session->set_flashdata('success', "Selamat Datang $nm");
          redirect('Barang');
        } else {
      ?>

          <Script>
            Swal.fire({
              icon: 'error',
              title: 'Failure',
              text: 'Login gagal, Username atau Password salah',
              showConfirmButton: false,
              timer: 1500
            }).then((result) => {
              window.location = '<?= base_url('Auth') ?>';
            })
          </Script>

<?php

        }
      }
    }
  }


  public function ViewProfile()
  {
    $data['title'] = "Profile";
    $data['judul'] = "Profile";
    $data['error'] = '';
    $data['profile'] = $this->User_model->get_data_login($this->session->userdata('sess_id'));

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_user/V_Profile', $data);
    $this->load->view('templates/footer');
  }

  public function _rules()
  {
    $this->form_validation->set_rules('username', 'Username', 'required', array('required' => '%s harus diisi !!!'));
    $this->form_validation->set_rules('pass', 'Password', 'required', array('required' => '%s harus diisi !!!'));
  }

  public function Logout()
  {
    $this->session->sess_destroy();
    $url = base_url('Auth');
    redirect($url);
  }
}


/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */