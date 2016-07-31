<?php

class Kriteriacontroller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('kriteria');
    }

    public function index() {

    if($this->session->userdata('logged_in')){
        $data['kriteria'] = $this->kriteria->ambilKriteria();
        $data['titleBrow'] =  "KRITERIA";
        $this->load->view('kriteriaview', $data);
      }

      else{

        redirect('indekscontroller');
      }

    }

    public function tambahKriteria() {
        $val = array(
            'id_kriteria' => rand(),
            'kriteria' => $this->input->post('kriteria'),
            'bobot' => $this->input->post('bobot')
        );
        $this->Kriteria->tambahKriteria($val);
        redirect('admin/KriteriaController');
    }

}
