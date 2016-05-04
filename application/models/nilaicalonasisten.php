<?php

class Nilaicalonasisten extends CI_Model{

  public function ambilCalonSiswaDanNilai() {
         return $this->db->get('tb_calon_siswa_nilai')->result();
     }

     public function ambilNilaiCalonSiswaArray() {
         return $this->db->get('tb_calon_siswa_nilai')->result_array();
     }

     public function tambahNilaiCalonAsisten($nilaiCalonSiswa) {
         $this->db->insert('tb_nilai_calon_asisten', $nilaiCalonSiswa);
     }

     public function ambilNilaiCalonSiswaBerdasakanNim($nim) {
         $this->db->where('nim', $nim);
         return $this->db->count_all_results('tb_calon_siswa_nilai');
     }

     public function ambilJumlahNilaiCalonSiswa() {
         return $this->db->count_all_results('tb_nilai_calon_siswa');
     }

     public function ambilNilaiMaxBerdasarkanKriteria($kriteria) {
         $this->db->select_max($kriteria);
         return $this->db->get('tb_nilai_calon_siswa')->result_array();
     }


}



?>
