<?php

if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Access extends CI_Controller {	
	public function __construct() {
        parent::__construct();
        $this->load->model('m_access');
        $this->load->model('m_user');
    }
	public function index() {
		$is_logged_in = $this->session->userdata('is_logged_in');
		if($is_logged_in) {
			redirect('dashboard');
		}
		else {
			$this->form_validation->set_rules('username','Username','required|trim');
			$this->form_validation->set_rules('password','Password','required|trim');
			if($this->form_validation->run() == false)
		    {
		        $this->load->view('login');
		    }
		    else
		    {
		        $username_temp = $this->input->post('username');
				$password_temp = $this->input->post('password');
				$password_md5 = md5($password_temp);
				$query	= $this->m_access->validate($username_temp,$password_md5);

				if($query) {
					$query1	= $this->m_user->get_user_data($username_temp);
					foreach ($query1 as $object) {
						if($object->username == $username_temp) {
							$user 		= $object->id_user;
							$nama		= $object->nama;
							$role		= $object->role;
						}
					}
					$data = array(
						'username' 		=> $username_temp,
						'is_logged_in' 	=> TRUE,
						'user'			=> $user,
						'role'			=> $role,
						'nama'			=> $nama,
					);
					$this->session->set_userdata($data);
					redirect('dashboard');
				}
				else {
					$data['error']="Invalid User Id and Password combination";
		            $this->load->view('login', $data);
		            //return false;
				}
		    }
		}
	}

	public function LogOut() {
		$data = array(
			'username' => $this->session->userdata('username'),
			'is_logged_in' => FALSE
		);
		$this->session->set_userdata($data);
		redirect('Access/index');
	}
}