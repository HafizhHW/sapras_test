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

  function get_data($table)
  {
    return $this->db->get($table);
  }

  function insert_data($data, $table)
  {
    $this->db->insert($table, $data);
  }

  function delete_data($where, $table)
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

  function get_dataPage($table)
  {
    return $this->db->get($table);
  }

  function get_admin_list($limit, $start)
  {
    $query = $this->db->get('tbl_admin', $limit, $start);
    return $query->result();
  }

  function get_user_list($limit, $start)
  {
    $query = $this->db->get('tbl_user', $limit, $start);
    return $query->result();
  }

  function get_tempat_list($limit, $start)
  {
    $query = $this->db->get('tbl_tempat', $limit, $start);
    return $query->result();
  }
  // ------------------------------------------------------------------------

  function data($number, $offset)
  {
    return $query = $this->db->get('tbl_admin', $number, $offset)->result();
  }

  function jumlah_data()
  {
    return $this->db->get('tbl_admin')->num_rows();
  }
}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */