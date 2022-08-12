<?php
defined('BASEPATH') or exit('No direct script access allowed');



class BarangR_model extends CI_Model
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

  public function get_data($table)
  {
    return $this->db->get($table);
  }

  public function insert_data($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function update($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function delete_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function get_join($table)
  {
    $this->db->select(['br.id_br', 'br.jml_barang', 'br.keterangan', 'b.id_barang', 'b.nm_barang', 'b.no_seri',  'b.unit', 'tp.id_tempat', 'tp.nm_tempat']);
    $this->db->from('tbl_barang_rusak br');
    $this->db->join('tbl_tempat tp', 'br.id_tempat = tp.id_tempat');
    $this->db->join('tbl_barang b', 'br.id_barang = b.id_barang');
    $this->db->group_by('br.id_br');
    // $this->db->join('tbl_barang b', 't.id_barang = b.id_barang');
    $data = $this->db->get($table);
    return $data->result();
  }

  // ------------------------------------------------------------------------

}

/* End of file BarangR_model.php */
/* Location: ./application/models/BarangR_model.php */