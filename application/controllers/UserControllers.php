<?php

class UserControllers extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel', 'um');
	}

	public function login()
	{
		$this->load->view('user/login');

	}

	public function usercheck()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$checkuser = $this->um->checkuser($email, $password);
		if ($checkuser) {
			foreach ($checkuser as $user) ;
			$this->session->set_userdata('email', $user->email);
			$this->session->set_userdata('name', $user->name);
			redirect('users');
		} else {
			redirect('login');
		}

	}

	public function register()
	{
		$this->load->view('user/signup');


	}

	public function save()
	{
		$result = $this->um->saveuser();
		if ($result) {
			$this->session->set_flashdata('success_msg', 'Registration Successful');
			return redirect('users');
		} else {
			$this->session->set_flashdata('error_msg', 'Registration Failed');
			redirect('signup');
		}

	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect('login');

	}

	public function my404error()
	{
		$this->load->view('errors/404_error');

	}

	public function dashboard()
	{
		$this->load->view('user/default/header');
		$this->load->view('user/default/dashboard');
		$this->load->view('user/default/footer');


	}

	public function edit($id)
	{
		$data['user'] = $this->um->getuser($id);
		$this->load->view('user/default/header');
		$this->load->view('user/edit', $data);
		$this->load->view('user/default/footer');

	}

	public function destroy($id)
	{
		$this->db->delete('users', array('id' => $id));
		$this->session->set_flashdata('success_msg', 'User has been deleted');
		redirect('users');
	}

	public function userregistration()
	{
		$this->load->view('user/default/header');
		$this->load->view('user/registration');
		$this->load->view('user/default/footer');

	}

	public function update($id)
	{
		$result = $this->um->updateuser($id);
		if ($result) {
			$this->session->set_flashdata('success_msg', 'User has been updated');
			redirect('users');

		} else {
			$this->session->set_flashdata('error_msg', 'Something went wrong');
			redirect('edit/' . $id);
		}
	}

	public function list()
	{
		$data['users'] = $this->um->getAllUsers();
		$this->load->view('user/default/header');
		$this->load->view('user/user_list', $data);
		$this->load->view('user/default/footer');
	}

	public function userfilterlist()
	{
		$keyword = $this->input->get('keyword');
		$data['users'] = $this->um->getFilterUser($keyword);
		$this->load->view('user/default/header');
		$this->load->view('user/filter_user_list', $data);
		$this->load->view('user/default/footer');
	}

}
