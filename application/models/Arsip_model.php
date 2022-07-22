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

  function insert_data($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function getDataById($id)
  {
    return $this->db->get_where('tbl_arsip', ['id_arsip' => $id])->row();
  }

  public function hapusFile($id)
  {
    $this->db->where('id_arsip', $id);
    return $this->db->delete('tbl_arsip');
  }

  public function update($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  public function download($id_arsip)
  {
    $query = $this->db->get_where('tbl_arsip', array('id_arsip' => $id_arsip));
    return $query->row_array();
  }



  // ------------------------------------------------------------------------

}

/* End of file Arsip_model.php */
/* Location: ./application/models/Arsip_model.php */