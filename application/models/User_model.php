<?php
defined('BASEPATH') or exit('No direct script access allowed');


class User_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function get_data_admin($table)
  {
    return $this->db->get($table);
  }

  public function get_data_user($table)
  {
    return $this->db->get($table);
  }

  // ------------------------------------------------------------------------

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */