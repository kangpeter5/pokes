<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function find_by_id($user_id) {
		$query = "SELECT * FROM users WHERE id = ?";
		$value = array($user_id);
		return $this->db->query($query, $value)->row_array();
	}
	public function create_user($name, $alias, $email, $password){
		$query = "INSERT INTO users (name, alias, email, password, birthdate, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
		$values = array($name, $alias, $email, $password, $birthdate);
		$this->db->query($query, $values);
		return $this->db->insert_id();
	}

	public function find_by_email($email){
		$query = "SELECT * FROM users WHERE email = ?";
		$value = array($email);
		return $this->db->query($query, $value)->row_array();
	}
}
