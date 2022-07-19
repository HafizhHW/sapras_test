<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path



class Project extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
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
}


/* End of file Project.php */
/* Location: ./application/controllers/Project.php */