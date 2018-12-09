<?php
/**
 *
 */
class LowonganM extends CI_Model
{
  function registerLowongan($data)
  {
    $this->db->flush_cache();
    if (!$this->db->update('loker',$data)) {
      $query=$this->db->error();
      return $query;
    }
  }
  function updateLowongan($data,$id)
  {
    $this->db->flush_cache();
    $this->db->where('idloker',$id);
    if (!$this->db->update('loker',$data)) {
      $query=$this->db->error();
      return $query;
    }
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
    $this->db->select('loker.idloker,loker.nama,loker.idperusahaan,perusahaan.nama as namaperusahaan,loker.tipe,loker.gaji_min,loker.gaji_max');
    $this->db->from('loker');
    $this->db->join('perusahaan', 'perusahaan.idperusahaan = loker.idperusahaan');
    $query=$this->db->get();
    return $query->result_array();
  }
}

 ?>
