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
    $this->db->select('loker.idloker,loker.usia_min,loker.usia_max,loker.nama,loker.idperusahaan,perusahaan.nama as namaperusahaan,loker.tipe,loker.gaji_min,loker.gaji_max,loker.deskripsi_loker,loker.nama_cp,loker.email_cp,loker.no_telp_cp,loker.tgl_expired,tingkat_pendidikan.keterangan as pendidikan,bidang_pekerjaan.nama as bidang,perusahaan.kota,perusahaan.alamat');
    $this->db->where('idloker',$id);
    $this->db->from('loker');
    $this->db->join('perusahaan', 'perusahaan.idperusahaan = loker.idperusahaan');
    $this->db->join('tingkat_pendidikan', 'tingkat_pendidikan.idtingkat_pendidikan = loker.idtingkat_pendidikan');
    $this->db->join('bidang_pekerjaan', 'bidang_pekerjaan.idbidang = loker.idbidang');
    $query=$this->db->get();
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
