<?php
/**
 *
 */
 require APPPATH . 'libraries/REST_Controller.php';
 require APPPATH . 'libraries/Format.php';
 use Restserver\Libraries\REST_Controller;
class lowongan extends REST_Controller
{
  function __construct()
  {
    parent::__construct();
		$this->load->model('LowonganM');
  }
  function lowongan_post(){
    $data = array(
                   'idperusahaan' => $this->post('nama'),
                   'idbidang' => $this->post('password'),
                   'idtingkat_pendidikan' => $this->post('nama_pemilik'),
                   'tipe' => $this->post('alamat'),
                   'usia_min' => $this->post('kota'),
                   'usia_max' => $this->post('email'),
                   'gaji_min' => $this->post('no_telp'),
                   'gaji_max' => $this->post('no_telp'),
                   'nama_cp' => $this->post('no_telp'),
                   'email_cp' => $this->post('no_telp'),
                   'no_telp_cp' => $this->post('no_telp'),
                   'tgl_expired' => $this->post('tgl_expired'),
                   'deskripsi_loker' => $this->post('no_telp'),
                 );

    $id=$this->post('idloker');

    if (empty($id)) {
      $data['tgl_insert']= date('Y-m-d H:i:s');
      $data['tgl_update']= date('Y-m-d H:i:s');
      $return=$this->LowonganM->registerLowongan($data);
    }else{
      $data['tgl_update']= date('Y-m-d H:i:s');
      $return=$this->LowonganM->updateLowongan($data,$id);
    }
    if($return==TRUE){
        $this->set_response($return,REST_Controller::HTTP_OK);
    }

  }
  function lowongan_get(){
    $id=$this->get('idloker');
    if (empty($id)) {
      $return=$this->LowonganM->getListLowongan();
    }else{
      $return=$this->LowonganM->getLowongan($id);
    }
    if($return==TRUE){
        $this->set_response($return,REST_Controller::HTTP_OK);
    }
  }

}

 ?>
