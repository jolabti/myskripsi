<?php


class Kriteria extends CI_Model {

    public function tambahKriteria($kriteria) {
        $this->db->insert('tb_kriteria', $kriteria);
    }

    public function ambilKriteria() {
        $this->db->order_by('bobot', 'asc');
        return $this->db->get('tb_kriteria')->result();
    }

}
