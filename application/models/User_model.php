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
  function get_data_admin($table)
  {
    return $this->db->get($table);
  }

  function get_data_user($table)
  {
    return $this->db->get($table);
  }

  function insert_data($data, $table)
  {
    $this->db->insert($table, $data);
  }

  function delete_dataAdmin($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  function delete_dataUser($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function get_data_login()
  {
    return $this->db->from('tbl_admin')
      ->join('tbl_user', 'tbl_user.id_user=tbl_admin.id_admin')
      ->get()
      ->result();
  }

  // ------------------------------------------------------------------------

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */