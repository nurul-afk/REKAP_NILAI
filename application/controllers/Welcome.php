<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session'); // Memastikan library session di-load
        $this->load->model('User_model'); // Pastikan nama model benar
        $this->load->model('Nilai_model'); // Pastikan nama model benar
    }

    public function index() {
        $this->load->view('login');
    }

    public function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$role = $this->input->post('role'); // Ambil role dari form
	
		// Validasi password hanya angka dan maksimal 6 karakter
		if (!preg_match('/^\d{1,6}$/', $password)) {
			$this->session->set_flashdata('error', 'Password harus berupa angka dan maksimal 6 digit.');
			redirect('welcome/index');
		}
	
		$user = $this->User_model->get_user($username);
	
		if ($user && password_verify($password, $user->password) && $user->role === $role) { // Cocokkan password dan role
			$this->session->set_userdata('user_id', $user->id);
			$this->session->set_userdata('role', $user->role);
			redirect('welcome/dashboard');
		} else {
			$this->session->set_flashdata('error', 'Username, password, atau role salah');
			redirect('welcome/index');
		}
	}
    public function register() {
        if ($this->input->post()) {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'role' => $this->input->post('role')
            );

            $this->User_model->add_user($data); // Tambahkan pengguna baru ke database
            redirect('welcome/index');
        }

        $this->load->view('register');
    }

    public function dashboard() {
        if (!$this->session->userdata('user_id')) {
            redirect('welcome/index');
        }

        $data['role'] = $this->session->userdata('role');
        $this->load->view('dashboard', $data);
    }

	public function add_mata_kuliah() {
		if (!$this->session->userdata('user_id')) {
			redirect('welcome/index');
		}
	
		if ($this->input->post()) {
			$data = array(
				'mata_kuliah' => $this->input->post('nama') // Pastikan ini sesuai dengan nama kolom di database
			);
	
			$this->load->model('Mata_kuliah_model');
			$this->Mata_kuliah_model->add_mata_kuliah($data);
			
			// Mendapatkan ID mata kuliah yang baru ditambahkan
			$mata_kuliah_id = $this->db->insert_id();
	
			// Redirect ke halaman sukses
			$data['mata_kuliah_id'] = $mata_kuliah_id;
			$this->load->view('success', $data);
			return; // Pastikan untuk menghentikan eksekusi lebih lanjut
		}
	
		$this->load->view('add_mata_kuliah');
	}

	public function view_mata_kuliah() {
		if (!$this->session->userdata('user_id')) {
			redirect('welcome/index');
		}
	
		$this->load->model('Mata_kuliah_model');
		$data['mata_kuliah'] = $this->Mata_kuliah_model->get_all_mata_kuliah();
		$this->load->view('mata_kuliah_view', $data);
	}

	public function edit_mata_kuliah($id) {
		if (!$this->session->userdata('user_id')) {
			redirect('welcome/index');
		}
	
		$this->load->model('Mata_kuliah_model');
		
		if ($this->input->post()) {
			$data = array(
				'mata_kuliah' => $this->input->post('mata_kuliah')
			);
	
			$this->Mata_kuliah_model->update_mata_kuliah($id, $data);
			redirect('welcome/view_mata_kuliah');
		}
	
		$data['mata_kuliah'] = $this->Mata_kuliah_model->get_mata_kuliah_by_id($id);
		$this->load->view('edit_mata_kuliah', $data);
	}

	public function delete_mata_kuliah($id) {
		if (!$this->session->userdata('user_id')) {
			redirect('welcome/index');
		}
	
		$this->load->model('Mata_kuliah_model');
		$this->Mata_kuliah_model->delete_mata_kuliah($id);
		redirect('welcome/view_mata_kuliah');
	}

	public function add_kelas() {
		if (!$this->session->userdata('user_id')) {
			redirect('welcome/index');
		}
	
		if ($this->input->post()) {
			$data = array(
				'nama_kelas' => $this->input->post('nama_kelas')
			);
	
			$this->load->model('Kelas_model'); // Pastikan Anda memiliki model ini
			$this->Kelas_model->add_kelas($data);
			redirect('welcome/dashboard');
		}
	
		$this->load->view('add_kelas');
	}

	public function view_kelas() {
		if (!$this->session->userdata('user_id')) {
			redirect('welcome/index');
		}
	
		$this->load->model('Kelas_model');
		$data['kelas'] = $this->Kelas_model->get_all_kelas();
		$this->load->view('kelas_view', $data);
	}
    public function add_nilai() {
        if (!$this->session->userdata('user_id')) {
            redirect('welcome/index');
        }

        if ($this->input->post()) {
            $data = array(
                'user_id' => $this->session->userdata('user_id'),
                'mata_kuliah_id' => $this->input->post('mata_kuliah_id'),
                'kelas_id' => $this->input->post('kelas_id'),
                'nilai' => $this->input->post('nilai')
            );

            $this->Nilai_model->add_nilai($data);
            redirect('welcome/dashboard');
        }

        // Ambil daftar mata kuliah dan kelas untuk dropdown
        $data['mata_kuliah'] = $this->Nilai_model->get_mata_kuliah();
        $data['kelas'] = $this->Nilai_model->get_kelas();

        $this->load->view('add_nilai', $data);
    }

	public function edit_nilai($id) {
		if (!$this->session->userdata('user_id')) {
			redirect('welcome/index');
		}
	
		// Load Nilai model and fetch nilai by ID
		$this->load->model('Nilai_model');
		$data['nilai'] = $this->Nilai_model->get_nilai_by_id($id); // Get the existing nilai record
	
		// If the form is submitted, update the nilai record
		if ($this->input->post()) {
			$update_data = array(
				'mata_kuliah_id' => $this->input->post('mata_kuliah_id'),
				'kelas_id' => $this->input->post('kelas_id'),
				'nilai' => $this->input->post('nilai')
			);
	
			// Update the nilai record in the database
			$this->Nilai_model->update_nilai($id, $update_data);
			redirect('welcome/view_nilai'); // Redirect after successful update
		}
	
		// Fetch all mata kuliah and kelas for dropdowns
		$data['mata_kuliah'] = $this->Nilai_model->get_mata_kuliah();
		$data['kelas'] = $this->Nilai_model->get_kelas();
	
		// Load the edit view
		$this->load->view('edit_nilai', $data);
	}

	public function delete_nilai($id) {
		if (!$this->session->userdata('user_id')) {
			redirect('welcome/index');
		}
	
		// Load Nilai model and delete the nilai record by ID
		$this->load->model('Nilai_model');
		$this->Nilai_model->delete_nilai($id);
	
		// Redirect back to the nilai view page after deletion
		redirect('welcome/view_nilai');
	}
	
	

	public function edit_kelas($id) {
		if (!$this->session->userdata('user_id')) {
			redirect('welcome/index');
		}
	
		$this->load->model('Kelas_model');
	
		if ($this->input->post()) {
			$data = array(
				'nama_kelas' => $this->input->post('nama_kelas')
			);
	
			$this->Kelas_model->update_kelas($id, $data);
			redirect('welcome/view_kelas');
		}
	
		$data['kelas'] = $this->Kelas_model->get_kelas_by_id($id);
		$this->load->view('edit_kelas', $data);
	}

	public function delete_kelas($id) {
		if (!$this->session->userdata('user_id')) {
			redirect('welcome/index');
		}
	
		$this->load->model('Kelas_model');
		$this->Kelas_model->delete_kelas($id);
		redirect('welcome/view_kelas');
	}

    public function view_nilai() {
        if (!$this->session->userdata('user_id')) {
            redirect('welcome/index');
        }

		$data['nilai'] = $this->Nilai_model->get_all(); // Fetching all data
		$this->load->view('view_nilai', $data);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('welcome/index');
    }
}
?>
