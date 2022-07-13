<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Log_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------

  function auth_admin($username, $password)
  {
    $query = $this->db->query("SELECT * FROM tbl_admin WHERE username ='$username' AND pass=MD5('$password') LIMIT 1");
    return $query;
  }
  //cek id_user dan password user
  function auth_user($username, $password)
  {
    $query = $this->db->query("SELECT * FROM tbl_user WHERE username ='$username' AND pass=MD5('$password') LIMIT 1");
    return $query;
  }
}

/* End of file Log_model.php */
/* Location: ./application/models/Log_model.php */