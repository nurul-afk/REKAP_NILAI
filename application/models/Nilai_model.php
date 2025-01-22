<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model {
    public function add_nilai($data) {
        return $this->db->insert('nilai', $data);
    }

    // Mendapatkan daftar mata kuliah
    public function get_mata_kuliah() {
        return $this->db->get('mata_kuliah')->result(); // Pastikan tabel 'mata_kuliah' ada
    }

    // Mendapatkan daftar kelas
    public function get_kelas() {
        return $this->db->get('kelas')->result(); // Pastikan tabel 'kelas' ada
    }

    // Mendapatkan nilai berdasarkan user_id
    public function view_nilai() {
        if (!$this->session->userdata('user_id')) {
            redirect('welcome/index');
        }
    
        // Fetch all nilai records with related mata_kuliah and kelas information
        $data['nilai'] = $this->Nilai_model->get_all();
        $this->load->view('view_nilai', $data);
    }

    public function get_all() {
        // Select all required fields including related data from mata_kuliah and kelas tables
        $this->db->select('nilai.id, nilai.user_id, nilai.mata_kuliah_id, nilai.kelas_id, nilai.nilai, mata_kuliah.mata_kuliah, kelas.nama_kelas');
        $this->db->from('nilai');
        
        // Join with mata_kuliah table
        $this->db->join('mata_kuliah', 'mata_kuliah.id = nilai.mata_kuliah_id');
        
        // Join with kelas table
        $this->db->join('kelas', 'kelas.id = nilai.kelas_id');
        
        // Get the results
        $query = $this->db->get();

        // Return the result as an array of objects
        return $query->result();
    }

    // Other methods like add_nilai(), get_mata_kuliah(), get_kelas(), etc.

    public function get_nilai_by_id($id) {
        $this->db->select('id, user_id, mata_kuliah_id, kelas_id, nilai');
        $this->db->from('nilai');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row(); // Return a single row
    }

    public function update_nilai($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('nilai', $data);
    }

    public function delete_nilai($id) {
        $this->db->where('id', $id);
        $this->db->delete('nilai');
    }
    
}
?>
