<?php

/**
 *
 * Author Rizki Mufrizal <mufrizalrizki@gmail.com>
 * Since Apr 21, 2016
 * Time 7:04:19 PM
 * Encoding UTF-8
 * Project Metode-Saw
 * Package Expression package is undefined on line 14, column 14 in Templates/Scripting/PHPClass.php.
 *
 */
class Calonsiswa extends CI_Model {



    public function tambahCalonSiswa($calonSiswa) {
        $this->db->insert('tb_calon_siswa', $calonSiswa);
    }

    public function ambilCalonAsisten() {
        return $this->db->get('tb_calon_asisten')->result();
    }

    public function ambilCalonSiswaBerdasarkanNim($nim) {
        $this->db->where('nim', $nim);
        return $this->db->get('tb_calon_siswa')->result();
    }

    public function ubahCalonSiswa($calonSiswa, $nim) {
        $this->db->where('npm', $nim);
        $this->db->update('tb_calon_asisten', $calonSiswa);
    }

    function validasi() {
  		$this->load->model('user');



  		 // Berfungsi untuk memanggil fungsi ambil_data pada class login_model
  		  	$cek= $this->user->ambil_login();

  					  if ($cek==TRUE){

  							$this->calonasistencontroller();
  						}

  						else{
  							$this->index();

  						}


    }

}
