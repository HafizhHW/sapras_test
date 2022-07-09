<?php
defined('BASEPATH') or exit('No direct script access allowed');



class Testing_model extends CI_Model
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

  public function get_Alldata($table)
  {
    return $this->db->get($table)->result();
  }

  public function dokumen($id)
  {
    $this->db->where('id', $id);
    return $this->db->get('files')->row();
  }

  public function insert_data($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function edit($where, $table)
  {
    return $this->db->get_where($table, $where)->result();
  }

  public function getDataById($id)
  {
    return $this->db->get_where('files', ['id' => $id])->row();
  }

  public function hapusFile($id)
  {
    $this->db->where('id', $id);
    return $this->db->delete('files');
  }

  public function updateFile($id, $data)
  {
    $this->db->where('id', $id);
    return $this->db->update('files', $data);
  }

  public function insert_doc($gbr)
  {
    $data = array(
      'judul' => $this->input->post('judul'),
      'doc' => $gbr
    );
    return $this->db->insert('files', $data);
  }



  // ------------------------------------------------------------------------

}

/* End of file Testing_model.php */
/* Location: ./application/models/Testing_model.php */