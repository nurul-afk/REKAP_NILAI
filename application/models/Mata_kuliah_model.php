<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mata_kuliah_model extends CI_Model {
    
    // Fungsi untuk menambah mata kuliah
    public function add_mata_kuliah($data) {
        return $this->db->insert('mata_kuliah', $data);
    }

    // Fungsi untuk mendapatkan semua mata kuliah
    public function get_all_mata_kuliah() {
        return $this->db->order_by('id', 'ASC')->get('mata_kuliah')->result(); // Mengambil semua data dari tabel mata_kuliah dan mengurutkannya berdasarkan ID
    }

    public function update_mata_kuliah($id, $data) {
        return $this->db->where('id', $id)->update('mata_kuliah', $data);
    }
    
    public function delete_mata_kuliah($id) {
        return $this->db->where('id', $id)->delete('mata_kuliah');
    }
    public function get_mata_kuliah_by_id($id) {
        return $this->db->where('id', $id)->get('mata_kuliah')->row();
    }
}
?>