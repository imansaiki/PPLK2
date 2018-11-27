<?php
/**
 *
 */
class perusahaanM extends CI_Model
{
  function registerPerusahaan($data)
  {
    $this->db->flush_cache();
    $this->db->insert('perusahaan',$data);
  }
  function updatePerusahaan($data,$id)
  {
    $this->db->flush_cache();
    $this->db->where('idperusahaan',$id);
    $this->db->update('perusahaan',$data);
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
