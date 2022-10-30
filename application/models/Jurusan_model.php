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

  // function get_Tkj()
  // {
  //   $query = "SELECT * FROM tbl_barang as tb JOIN tbl_jurusan as tj ON tj.id_jurusan=tb.id_jurusan WHERE tb.id_jurusan=1;";
  //   return $this->db->query($query);
  // }

  function get_Tkj($table)
  {
    $this->db->select(['b.id_barang', 'b.nm_barang', 'b.no_seri', 'b.jml_barang', 'b.unit', 'b.kat_barang', 'b.kat_anggaran', 'b.thn_pengadaan', 'b.doc_barang', 'tj.id_jurusan', 'tj.nm_jurusan']);
    $this->db->from('tbl_barang b');
    $this->db->join('tbl_jurusan tj', 'b.id_jurusan = tj.id_jurusan');
    $this->db->where('tj.id_jurusan = 1');
    $this->db->group_by('b.id_barang');
    $data = $this->db->get($table);
    return $data;
  }

  function get_Mm($table)
  {
    $this->db->select(['b.id_barang', 'b.nm_barang', 'b.no_seri', 'b.jml_barang', 'b.unit', 'b.kat_barang', 'b.kat_anggaran', 'b.thn_pengadaan', 'b.doc_barang', 'tj.id_jurusan', 'tj.nm_jurusan']);
    $this->db->from('tbl_barang b');
    $this->db->join('tbl_jurusan tj', 'b.id_jurusan = tj.id_jurusan');
    $this->db->where('tj.id_jurusan = 2');
    $this->db->group_by('b.id_barang');
    $data = $this->db->get($table);
    return $data;
  }

  function get_Tkr($table)
  {
    $this->db->select(['b.id_barang', 'b.nm_barang', 'b.no_seri', 'b.jml_barang', 'b.unit', 'b.kat_barang', 'b.kat_anggaran', 'b.thn_pengadaan', 'b.doc_barang', 'tj.id_jurusan', 'tj.nm_jurusan']);
    $this->db->from('tbl_barang b');
    $this->db->join('tbl_jurusan tj', 'b.id_jurusan = tj.id_jurusan');
    $this->db->where('tj.id_jurusan = 4');
    $this->db->group_by('b.id_barang');
    $data = $this->db->get($table);
    return $data;
  }

  function get_Tm($table)
  {
    $this->db->select(['b.id_barang', 'b.nm_barang', 'b.no_seri', 'b.jml_barang', 'b.unit', 'b.kat_barang', 'b.kat_anggaran', 'b.thn_pengadaan', 'b.doc_barang', 'tj.id_jurusan', 'tj.nm_jurusan']);
    $this->db->from('tbl_barang b');
    $this->db->join('tbl_jurusan tj', 'b.id_jurusan = tj.id_jurusan');
    $this->db->where('tj.id_jurusan = 3');
    $this->db->group_by('b.id_barang');
    $data = $this->db->get($table);
    return $data;
  }

  function get_Ap($table)
  {
    $this->db->select(['b.id_barang', 'b.nm_barang', 'b.no_seri', 'b.jml_barang', 'b.unit', 'b.kat_barang', 'b.kat_anggaran', 'b.thn_pengadaan', 'b.doc_barang', 'tj.id_jurusan', 'tj.nm_jurusan']);
    $this->db->from('tbl_barang b');
    $this->db->join('tbl_jurusan tj', 'b.id_jurusan = tj.id_jurusan');
    $this->db->where('tj.id_jurusan = 5');
    $this->db->group_by('b.id_barang');
    $data = $this->db->get($table);
    return $data;
  }

  function get_Ak($table)
  {
    $this->db->select(['b.id_barang', 'b.nm_barang', 'b.no_seri', 'b.jml_barang', 'b.unit', 'b.kat_barang', 'b.kat_anggaran', 'b.thn_pengadaan', 'b.doc_barang', 'tj.id_jurusan', 'tj.nm_jurusan']);
    $this->db->from('tbl_barang b');
    $this->db->join('tbl_jurusan tj', 'b.id_jurusan = tj.id_jurusan');
    $this->db->where('tj.id_jurusan = 6');
    $this->db->group_by('b.id_barang');
    $data = $this->db->get($table);
    return $data;
  }

  // ------------------------------------------------------------------------

}

/* End of file Jurusan_model.php */
/* Location: ./application/models/Jurusan_model.php */