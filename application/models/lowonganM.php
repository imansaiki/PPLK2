<?php
/**
 *
 */
class LowonganM extends CI_Model
{
  function registerLowongan($data)
  {
    $this->db->flush_cache();
    $this->db->insert('loker',$data);
  }
  function updateLowongan($data,$id)
  {
    $this->db->flush_cache();
    $this->db->where('idloker',$id);
    $this->db->update('loker',$data);
  }
  function getLowongan($id)
  {
    $this->db->flush_cache();
    $this->db->where('idloker',$id);
    $query=$this->db->get('loker');
    return $query->result_array();
  }
  function getListLowongan(){
    $this->db->flush_cache();
    $this->db->select('idloker,nama,idperusahaan');
    $query=$this->db->get('loker');
    return $query->result_array();
  }
}

 ?>
