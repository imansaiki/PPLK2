<?php
/**
 *
 */
class PerusahaanM extends CI_Model
{
  function registerPerusahaan($data)
  {
    $this->db->flush_cache();
    if (!$this->db->insert('perusahaan',$data)) {
      $query=$this->db->error();
      return $query;
    }
  }
  function updatePerusahaan($data,$id)
  {
    $this->db->flush_cache();
    $this->db->where('idperusahaan',$id);
    if (!$this->db->update('perusahaan',$data)) {
      $query=$this->db->error();
      return $query;
    }
  }
  function getPerusahaan($idperusahaan)
  {
    // code...
    $this->db->flush_cache();
    $this->db->where('idperusahaan',$idperusahaan);
    $query=$this->db->get('perusahaan');
    return $query->result_array();
  }
  function getListPerusahaan(){
    $this->db->flush_cache();
    $this->db->select('idperusahaan,nama');
    $query=$this->db->get('perusahaan');
    return $query->result_array();
  }
}

 ?>
