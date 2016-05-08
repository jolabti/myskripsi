<?php
 
class Normalisasi extends CI_Model {

    public function ambilNormalisasi() {
        $this->db->order_by('total_nilai', 'desc');
        return $this->db->get('tb_calon_siswa_normalisasi')->result();
    }

    public function ambilNormalisasiBerdasakanNim($nim) {
        $this->db->where('nim', $nim);
        return $this->db->count_all_results('tb_normalisasi');
    }

    public function tambahNormalisasi($normalisasi) {
        $this->db->insert('tb_normalisasi', $normalisasi);
    }

}
