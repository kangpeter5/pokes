<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function register()
	{
		$this->load->model("User");
		$this->load->library("form_validation");

		$this->form_validation->set_rules("name", "Name", "trim|required|min_length[3]");
		$this->form_validation->set_rules("alias", "Alias", "trim|required|min_length[3]");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email|min_length[8]|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]");
		$this->form_validation->set_rules("password_confirmation", "Password Confirmation", "trim|required|min_length[8]|matches[password]");

		if($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata("errors", validation_errors());
			redirect("/");
		} else {
			$name = $this->input->post("name");
			$alias = $this->input->post("alias");
			$email = $this->input->post("email");
			$password = md5($this->input->post("password"));
			$birthdate = $this->input->post("birthdate");
			$user_id = $this->User->create_user($name, $alias, $email, $password, $birthdate);
			$this->session->set_userdata("user_id", $user_id);
			redirect("/pokes");
		}
	}

	public function login()
	{
		$this->load->model("User");
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email|min_length[8]");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]");

		if($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata("errors", validation_errors());
			redirect("/");
		} else {
			$user = $this->User->find_by_email($this->input->post("email"));
			//make sure to use '==' since this if statement uses a conditional
			if($user && $user['password'] == md5($this->input->post("password"))) {
				$this->session->set_userdata("user_id", $user['id']);
				redirect("/pokes");
			} else {
				$this->session->set_flashdata("errors", "<p> Invalid email / password combination </p>");
				redirect("/");
			}
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect("/");
	}
}
