<?php

/**
 *
 */
class Kontakmodel extends CI_Model{
  function getlist(){
    $this->db->select('nama_kontak, nomor');
    $dbget = $this->db->get('kontak');
    $result = $dbget->result_array();
    return $result;
  }
}
