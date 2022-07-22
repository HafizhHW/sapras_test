<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Project_model
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

class Project_model extends CI_Model
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
    return $this->db->get_where('tbl_project', ['id_project' => $id])->row();
  }

  public function hapusFile($id)
  {
    $this->db->where('id_project', $id);
    return $this->db->delete('tbl_project');
  }

  public function update($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  public function download($id_project)
  {
    $query = $this->db->get_where('tbl_project', array('id_project' => $id_project));
    return $query->row_array();
  }
  // ------------------------------------------------------------------------

}

/* End of file Project_model.php */
/* Location: ./application/models/Project_model.php */