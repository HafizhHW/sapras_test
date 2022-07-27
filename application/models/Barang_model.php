<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Barang_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function get_data($table)
  {
    return $this->db->get($table);
  }

  public function get_join()
  {
    $this->db->select(['b.id_barang', 'b.nm_barang', 'b.no_seri', 'b.jml_barang', 'b.unit', 'b.kat_barang', 'b.kat_anggaran', 'b.thn_pengadaan', 'b.doc_barang', 'tp.id_tempat', 'tp.nm_tempat']);
    $this->db->from('tbl_barang b');
    $this->db->join('tbl_tempat tp', 'b.id_tempat = tp.id_tempat');
    // $this->db->join('tbl_barang b', 't.id_barang = b.id_barang');
    $data = $this->db->get('');
    return $data->result();
  }
  public function get_joinUpdate($where, $table)
  {
    $this->db->select(['b.id_barang', 'b.nm_barang', 'b.no_seri', 'b.jml_barang', 'b.unit', 'b.kat_barang', 'b.kat_anggaran', 'b.thn_pengadaan', 'b.doc_barang', 'tp.id_tempat', 'tp.nm_tempat']);
    $this->db->from('tbl_barang b');
    $this->db->join('tbl_tempat tp', 'b.id_tempat = tp.id_tempat');
    // $this->db->join('tbl_barang b', 't.id_barang = b.id_barang');
    $data = $this->db->get_where($table, $where);
    return $data->result();
  }

  public function getDataById($id_barang)
  {
    return $this->db->get_where('tbl_barang', ['id_barang' => $id_barang])->row();
  }

  public function insert_data($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function update($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  public function hapusFile($id_barang)
  {
    $this->db->where('id_barang', $id_barang);
    return $this->db->delete('tbl_barang');
  }

  public function update_barang($data, $table)
  {
    $this->db->where('id_barang', $data['id_barang']);
    $this->db->update($table, $data);
  }

  public function delete_barang($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function download($id_barang)
  {
    $query = $this->db->get_where('tbl_barang', array('id_barang' => $id_barang));
    return $query->row_array();
  }

  public function updateFile($id_barang, $data)
  {
    $this->db->where('id_barang', $id_barang);
    return $this->db->update('tbl_barang', $data);
  }

  function get_tempat($table)
  {
    return $this->db->get($table);
  }

  function getBarang_tempat($id_tempat)
  {
    $this->db->select(['b.id_barang', 'b.nm_barang', 'b.no_seri', 'b.jml_barang', 'b.unit', 'b.kat_barang', 'b.kat_anggaran', 'b.thn_pengadaan', 'b.doc_barang', 'tp.id_tempat', 'tp.nm_tempat']);
    $this->db->from('tbl_barang b');
    $this->db->join('tbl_tempat tp', 'b.id_tempat = tp.id_tempat');
    $this->db->where('tp.id_tempat', $id_tempat);
    $data = $this->db->get('');
    return $data->result();
  }
  // ------------------------------------------------------------------------

}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */