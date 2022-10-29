<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Jurusan_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Jurusan_model extends CI_Model
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

  function get_Tkj()
  {
    $query = "SELECT * FROM tbl_barang as tb JOIN tbl_jurusan as tj ON tj.id_jurusan=tb.id_jurusan WHERE tb.id_jurusan=1;";
    return $this->db->query($query);
  }

  // function get_Tkj($table)
  // {
  //   $this->db->select('*');
  //   $this->db->from('tbl_barang j');
  //   $this->db->where('j.id_jurusan', $id_jurusan=1);
  //   $data = $this->db->get($table);
  //   return $data;
  // }

  function get_Mm()
  {
    # code...
  }

  function get_Tkr()
  {
    # code...
  }

  function get_Tm()
  {
    # code...
  }

  function get_Ap()
  {
    # code...
  }

  function get_Ak()
  {
    # code...
  }

  // ------------------------------------------------------------------------

}

/* End of file Jurusan_model.php */
/* Location: ./application/models/Jurusan_model.php */