<?php

	class Auth extends CI_Controller
	{

		function __construct()
		{
			parent::__construct();
			$this->load->model('model_user');
			$this->load->model('model_guru');
			$this->load->model('model_siswa');
		}
		
		function index()
		{
			$this->load->view('auth/login');
		}

		function check_login()
		{
			if (isset($_POST['submit'])) {
				
				$username		= $this->input->post('username');
				$password 		= $this->input->post('password');
				$loginUser		= $this->model_user->login($username, $password);

				$loginGuru  	= $this->model_guru->login($username, $password);

				$loginSiswa  	= $this->model_siswa->login($username, $password);
				
				if (!empty($loginUser)) {
					$this->session->set_userdata($loginUser);
					redirect('tampilan_utama');

				} elseif (!empty($loginGuru)) {
					$sessionGuru = array(
							'nama_lengkap'   => $loginGuru['nama_guru'],
							'id_level_user'  => 3,
							'id_guru'		 => $loginGuru['id_guru'], 
					);
					$this->session->set_userdata($sessionGuru);
					redirect('tampilan_utama');

				}elseif(!empty($loginSiswa)){
					$sesionSiswa = [
						'nama_lengkap'   => $loginSiswa['nama'],
						'id_level_user'  => 5,
						'nim'		 => $loginSiswa['nim'],
					];
					$this->session->set_userdata($sesionSiswa);
					redirect('tampilan_utama');
				} else {
					redirect('auth');
				}
			} else {
				redirect('auth');
			}
		}

		function logout()
		{
			$this->session->sess_destroy();
			redirect('auth');
		}

	}

?>