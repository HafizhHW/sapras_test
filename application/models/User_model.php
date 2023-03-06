<?php
defined('BASEPATH') or exit('No direct script access allowed');


class User_model extends CI_Model
{
  private $_admin = "tbl_admin";
	const SESSION_KEY = 'sess_id';
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

  function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  function delete_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  // public function get_data_login()
  // {
  //   $user_id = $this->session->userdata('sess_id');
	// 	$query = $this->db->get_where($this->_table, ['id_admin' => $user_id]);
	// 	return $query->result();
  // }

  // public function get_data_login($username, $password)
  // {
  //   return $this->db->from('tbl_admin')
  //     ->select('username')
  //     ->where('username', $username)
  //     ->where('pass', MD5($password))
  //     ->get()
  //     ->result();
  // }

  public function get_data_login()
  {
    return $this->db->from('tbl_admin')
      // ->join('tbl_user', 'tbl_user.id_user=tbl_admin.id_admin')
      ->get()
      ->result();
  }

  
  function get_pass($table)
  {
    $this->db->from('tbl_admin a');
    $this->db->select('a.pass');
    $this->db->where('a.pass = a.pass');
    $data = $this->db->get($table);
    return $data;
  }


  public function get_sessAdmin($username, $password)
  {
    $query = $this->db->select('username')
    ->from('tbl_admin')
    ->where('username', $username)
    ->where('pass', MD5($password));
    $user = $query->result();
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

  public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id_admin' => $user_id]);
		return $query->row();
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */