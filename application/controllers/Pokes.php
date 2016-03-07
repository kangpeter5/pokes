<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pokes extends CI_Controller {

	public function index()
	{
		$this->load->model("User");
		$this->load->model("Poke");

		$current_user = $this->User->find_by_id($this->session->userdata('user_id'));
		// list of How many time other people have poked me
		$other_pokes = $this->Poke->other_pokes($current_user);

		// list of how many times I poked other people
		$my_pokes = $this->Poke->my_pokes($current_user);

		// total number of people who poked you
		$count_pokes = $this->Poke->count_pokes($current_user);

		$info['email'] = $current_user['email'];
		$info['alias'] = $current_user['alias'];
		$info['user_pokes'] = $my_pokes;
		$info['other_peoples_pokes'] = $other_pokes;
		$info['count_pokes'] = $count_pokes;
		$this->load->view('pokes', $info);
	}

	public function poke_em($friend)
	{
		$this->load->model('Poke');
		$current_user_id = $this->session->userdata('user_id');
		$this->Poke->poke_em($current_user_id, $friend);
		redirect('/pokes');
	}
}
