<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    // check_already_login();
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
    // check_already_login();
    $this->_rules();
    if ($this->form_validation->run() == FALSE) {
      $this->index();
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
        $this->session->set_userdata('ses_username', $data['username']);

        $this->session->set_flashdata('success', $this->session->userdata('ses_nama'));

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
          redirect('Barang');
        } else {

          echo "<script>
          var flash = $('#flash').data('flash');
          if (flash) {
              Swal.fire({
                  icon: 'warning',
                  title: 'Warning',
                  text: flash
              })
          }
                </script>";
          // echo "<script>
          //       alert('Login gagal, username atau password salah');
          //       window.location='" . base_url() . "';
          //       </script>";
        }
      }
    }
  }

  public function set_profile()
  {
    $data['title'] = "Edit";
    $data['judul'] = "Edit Profile";
    $data['error'] = '';
    // $user = $this->db->get('tbl_admin');
    // $user = $this->db->get('tbl_user');
    // $where['id_project'] = $id_project;
    // $data['user'] = $this->db->get('tbl_admin');
    // $data['user'] = $this->db->get('tbl_user');

    $data['user'] = $this->User_model->get_data_login($this->session->userdata('sess_id'));

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar');
    $this->load->view('F_user/Update_profile', $data);
    $this->load->view('templates/footer');
  }

  public function update_profile($id)
  {
    $id = $this->input->post($this->session->userdata('sess_id'));
    // $id = $this->input->post($this->session->userdata('akses', '1'));
    // print_r($id);
    // die();

    if ($this->session->userdata('akses', '1')) {

      $nama = $this->input->post('nama');
      $username = $this->input->post('username');

      $data = [
        'nama' => $nama,
        'username' => $username
      ];
      $this->db->where('id_admin', $id);
      $this->db->update('tbl_admin', $data);
      $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Di Ubah !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('Auth/set_profile');
    } else {
      $nama = $this->input->post('nama');
      $username = $this->input->post('username');

      $data = [
        'nama' => $nama,
        'username' => $username
      ];

      $this->db->where('id_user', $id);
      $this->db->update('tbl_user', $data);
      $this->session->set_flashdata('pesan', '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Berhasil Di Ubah !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('Auth/set_profile');
    }
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