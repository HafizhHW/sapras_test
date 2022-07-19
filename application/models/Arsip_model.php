<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Arsip_model extends CI_Model
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

  function get_data($table)
  {
    return $this->db->get($table);
  }



  // ------------------------------------------------------------------------

}

/* End of file Arsip_model.php */
/* Location: ./application/models/Arsip_model.php */