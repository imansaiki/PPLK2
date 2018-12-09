<?php
/**
 *
 */
 require APPPATH . 'libraries/curl.php';
class lowongan extends CI_Controller
{
  function index($value='')
  {
    if (empty($value)) {
      $res=callAPI('GET','localhost/pplk2/index.php/API/lowongan/lowongan','');
      $data['list']=json_decode($res,TRUE);
      $this->load->view('header');
      $this->load->view('daftarLowongan',$data);
      $this->load->view('footer');

    }else{
      $res=callAPI('GET','localhost/pplk2/index.php/API/lowongan/lowongan?idloker='.$value,'');
      $data['list']=json_decode($res,TRUE);
      $this->load->view('header');
      $this->load->view('detailLowongan',$data);
      $this->load->view('footer');
    }
  }
}


?>
