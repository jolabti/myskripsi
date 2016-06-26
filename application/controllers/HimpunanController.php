<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class HimpunanController extends CI_Controller{



  public function index(){
      $this->load->model('Himpunan');
      $data['titleBrow'] = "TABEL HIMPUNAN-SPKTI";
      $data['himpunan']= $this->Himpunan->ambilHimpunan();

      $this->load->view('tampilan', $data);

  }

  public function himpunanJson(){
          $this->load->model('Himpunan');
       
          $data= $this->Himpunan->ambilHimpunanJson();

          print json_encode($data);
  }



}













?>
