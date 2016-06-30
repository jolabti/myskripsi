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

          header('Access-Control-Allow-Origin: *');
          header('Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method');
          header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
          $method = $_SERVER['REQUEST_METHOD'];
          if ($method == 'OPTIONS') {
              die();
          }
          $data= $this->Himpunan->ambilHimpunanJson();

          print json_encode($data);
  }



}













?>
