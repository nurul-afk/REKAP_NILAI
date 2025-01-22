<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model {
    
    // Fungsi untuk menambah kelas
    public function add_kelas($data) {
        return $this->db->insert('kelas', $data);
    }

    // Fungsi untuk mendapatkan semua kelas
    public function get_all_kelas() {
        return $this->db->get('kelas')->result();
    }

    public function update_kelas($id, $data) {
        return $this->db->where('id', $id)->update('kelas', $data);
    }
    
    public function delete_kelas($id) {
        return $this->db->where('id', $id)->delete('kelas');
    }
    
    public function get_kelas_by_id($id) {
        return $this->db->where('id', $id)->get('kelas')->row();
    }
}
?>