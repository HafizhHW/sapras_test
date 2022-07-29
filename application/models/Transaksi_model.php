<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Transaksi_model extends CI_Model
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
  }

  public function get_data($table)
  {
    return $this->db->get($table);
  }

  public function get_joinData($table)
  {
    $this->db->select([
      't.id_transaksi', 't.tgl_transaksi', 't.nm_penerima', 't.keterangan', 't.jml_barang', 't.unit', 't.id_admin',
      't.id_barang', 'a.id_admin', 'a.nama', 'b.id_barang', 'b.nm_barang'
    ]);
    $this->db->from('tbl_transaksi t');
    $this->db->join('tbl_admin a', 't.id_admin = a.id_admin');
    $this->db->join('tbl_barang b', 't.id_barang = b.id_barang');
    // $this->db->where('t.id_transaksi');
    $data = $this->db->get($table);
    return $data->result();
  }

  public function get_join($table)
  {
    $query = "SELECT t.id_transaksi,t.id_barang , t.jml_barang, t.unit, t.tgl_transaksi, t.nm_penerima, t.id_admin, a.id_admin, a.nama, b.id_barang, b.nm_barang FROM tbl_transaksi as t JOIN tbl_admin AS a ON t.id_admin=a.id_admin JOIN tbl_barang AS b ON t.id_barang=b.id_barang ";
    $query = $this->db->get($table);
    return $query->result();
    // return $this->db->query($query)->result();
  }

  // ------------------------------------------------------------------------

}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */