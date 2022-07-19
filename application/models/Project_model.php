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
  // ------------------------------------------------------------------------

}

/* End of file Project_model.php */
/* Location: ./application/models/Project_model.php */