<?php
/**
 *
 */
 require APPPATH . 'libraries/REST_Controller.php';
 require APPPATH . 'libraries/Format.php';
 use Restserver\Libraries\REST_Controller;
class perusahaan extends REST_Controller
{
  function __construct()
  {
    parent::__construct();
		$this->load->model('perusahaanM');
  }
  function perusahaan_post(){
    $data = array(
                   'nama' => $this->post('nama'),
                   'password' => $this->post('password'),
                   'nama_pemilik' => $this->post('nama_pemilik'),
                   'alamat' => $this->post('alamat'),
                   'kota' => $this->post('kota'),
                   'email' => $this->post('email'),
                   'no_telp' => $this->post('no_telp'),
                 );

    $id=$this->post('idperusahaan');

    if (empty($id)) {
      $data['tgl_daftar']= date('Y-m-d H:i:s');
      $return=$this->perusahaanM->registerPerusahaan($data);
    }else{
      $return=$this->perusahaanM->updatePerusahaan($data,$id);
    }

    $this->set_response($return);
  }
  function perusahaan_get(){
    $id=$this->get('idperusahaan');
    if (empty($id)) {
      $return=$this->perusahaanM->getListPerusahaan();
    }else{
      $return=$this->perusahaanM->getPerusahaan($id);
    }
    $this->set_response($return);
  }
  function perusahaan_delete(){
    $data['id']=$this->post('id');
    $this->set_response($data);
  }
}

 ?>
