<?php
class Passbook_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
  public function insert($data)
  {
      $this->db->insert('passbook', $data);
  }
}