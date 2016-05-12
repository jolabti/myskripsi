<?php

class Nilaicalonasisten extends CI_Model{

  public function ambilCalonSiswaDanNilai() {
         return $this->db->get('tb_nilai_calon_asisten')->result();
     }

     public function ambilNilaiCalonSiswaArray() {
         return $this->db->get('tb_nilai_calon_asisten')->result_array();
     }

     public function ambilNilaiCalasSemua(){
       return $this->db->get('tb_nilai_calon_asisten')->result();
     }

     public function tambahNilaiCalonAsisten($nilaiCalonSiswa) {
         $this->db->insert('tb_nilai_calon_asisten', $nilaiCalonSiswa);
     }

     public function ambilNilaiCalonSiswaBerdasakanNim($nim) {
         $this->db->where('npm', $nim);
         return $this->db->count_all_results('tb_nilai_calon_asisten');
     }

     public function ambilJumlahNilaiCalonSiswa() {
         return $this->db->count_all_results('tb_nilai_calon_asisten');
     }

     public function ambilNilaiMaxBerdasarkanKriteria($kriteria) {
         $this->db->select_max($kriteria);
         return $this->db->get('tb_nilai_calon_asisten')->result_array();
     }

     //model insert csv calas
	   public function m_insert_csvcalasdata($data) {
        $this->db->insert('tb_calon_asisten', $data);
    }

    //model insert csv nilai calas
	   public function m_insert_csvcalasnilai($data) {
        $this->db->insert('tb_nilai_calon_asisten', $data);
    }


}



?>
