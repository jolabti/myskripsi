<?php
Class User extends CI_Model
{


 function ambil_login(){
    $username = $this->security->xss_clean($this->input->post('username'));
    $password = $this->security->xss_clean($this->input->post('password'));

    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $query = $this->db->get('user');
    if($query->num_rows == 1)
    {
        // If there is a user, then create session data
        $row = $query->row();
        $data = array(
                'userid' => $row->id_user,
                'uname' => $row->username,
                'validated' => true
                );
        $this->session->set_userdata('logged_in',$data);
        return true;
    }
    // If the previous process did not validate
    // then return false.
    return false;
  }

}

?>
