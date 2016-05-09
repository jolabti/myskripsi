<?php

class Normalisasi extends CI_Model {

    public function ambilNormalisasi() {
        $this->db->order_by('total_nilai', 'desc');
        return $this->db->get('tb_normalisasi')->result();
    }

    public function ambilNormalisasiBerdasakanNim($nim) {
        $this->db->where('npm', $nim);
        return $this->db->count_all_results('tb_normalisasi');
    }

    public function tambahNormalisasi($normalisasi) {
        $this->db->insert('tb_normalisasi', $normalisasi);
    }

    public function kosongkanNormalisasi_m(){

        $this->db->empty_table('tb_normalisasi');

    }

    public function m_joinNormalisasi(){

      $this->db->select('*');
      $this->db->order_by("total_nilai", "desc");
      $this->db->from('tb_calon_asisten_normalisasi');


      $query = $this->db->get();

      return $query->result();

    }

}
