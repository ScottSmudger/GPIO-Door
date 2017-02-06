<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Authenticate extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->library("form_validation");

		$this->output->enable_profiler(TRUE);
		$this->benchmark->mark("starting_point");
	}

	public function index()
	{
		$this->form_validation->set_rules("username", "Username", "trim|required|xss_clean");
		$this->form_validation->set_rules("password", "Password", "trim|required|xss_clean|callback_check_database");

		if($this->form_validation->run() == FALSE)
		{
			$this->login();
		}
		else
		{
			if($this->session->is_admin)
			{
				redirect("/admin");
			}
			else
			{
				redirect("/dash");
			}
		}
	}

	public function check_database($password)
	{
		$username = $this->input->post("username");

		$result = $this->checkLogin($username, $password);

		if($result)
		{
			$user_details = array(
				"id" => $result->id,
				"username" => $result->username,
				"logged_in_time" => time()
			);
			$this->session->user_details = $user_details;
			$this->session->logged_in = TRUE;

			if($result->id == 4)
			{
				$this->session->is_admin = TRUE;
			}

			return TRUE;
		}
		else
		{
			$this->form_validation->set_message("check_database", "Invalid username or password");
			return FALSE;
		}
	}

	protected function checkLogin($username, $password)
	{
		$this->db->select("id, username, password");
		$this->db->from("LOGIN_DETAILS");
		$this->db->where("username", $username);
		$this->db->where("password", $password);
		$this->db->limit(1);

		$result = $this->db->get();

		if($result->num_rows() == 1)
		{
			return $result->row();
		}
		else
		{
			return FALSE;
		}
	}

	public function login()
	{
		$this->load->view("header");
		$this->load->view("pages/login");
		$this->load->view("footer");
	}

	public function logout()
	{
		// Remove session data
		$this->session->unset_userdata($this->session->all_userdata());
		// Destroy session
		$this->session->sess_destroy();
		redirect("/login");
	}
}
