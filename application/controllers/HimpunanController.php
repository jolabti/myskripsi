<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class HimpunanController extends CI_Controller{



  public function index(){
      $this->load->model('Himpunan');
      $data['himpunan']= $this->Himpunan->ambilHimpunan();

      $this->load->view('tampilan', $data);

  }




}













?>
