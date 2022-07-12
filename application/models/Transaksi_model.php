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

  public function get_joinData()
  {
    $this->db->select(['t.id_transaksi', 't.tgl_transaksi', 't.nm_penerima', 't.keterangan', 'a.id_admin', 'a.nama', 'b.id_barang', 'b.nm_barang']);
    $this->db->from('tbl_transaksi t');
    $this->db->join('tbl_admin a', 't.id_admin = a.id_admin');
    $this->db->join('tbl_barang b', 't.id_barang = b.id_barang');
    $data = $this->db->get('');
    return $data->result();
  }

  // ------------------------------------------------------------------------

}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */