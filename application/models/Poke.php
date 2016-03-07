<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poke extends CI_Model {

	public function other_pokes($current_user)
	{
		$query = "SELECT users.name as friend, users_pokes.poke_total
				FROM users_pokes 
                LEFT JOIN users ON users.id = users_pokes.friend_id
				WHERE user_id = ?";

		$value = array($current_user['id']);
		return $this->db->query($query, $value)->result_array();
	}

	public function my_pokes($current_user)
	{
		$query = "SELECT users.id as friend, users.name as friend_name, users.alias, users.email, users_pokes.poke_total as poke_total
				FROM users_pokes
				LEFT JOIN users ON users.id = users_pokes.friend_id
				WHERE users_pokes.user_id NOT IN (SELECT DISTINCT user_id FROM users_pokes WHERE friend_id = ?)
				ORDER BY users_pokes.poke_total";
		$value = array($current_user['id']);
		return $this->db->query($query, $value)->result_array();
	}

	public function poke_em($current_user_id, $friend)
	{
		// $query = "SELECT users_pokes.poke_total 
		// 		FROM users_pokes 
		// 		WHERE user_id = ? AND friend_id = ?";
		// $value = array($current_user_id, $friend);
		// $poke_total = $this->db->query($query, $value)->row_array();
			
		// $poke_total['poke_total']++;
		$query2 = "UPDATE users_pokes
	 			SET poke_total= poke_total+1
				WHERE user_id = ? AND friend_id = ?";
		$value2 = array($current_user_id, $friend);
		return $this->db->query($query2, $value2);
		redirect("/pokes");	
	}

	public function count_pokes($current_user)
	{
		$query = "SELECT Count(Distinct id) as total
				FROM users_pokes
				WHERE user_id = ?";
		$value = $current_user['id'];
		return $this->db->query($query, $value)->row_array();
	}
}
