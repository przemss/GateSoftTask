<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tasks extends CI_Controller {
	public function index()
	{
		$this->load->view('home_message');
	}

	public function singlePath($product_id)
	{
		$this->load->model('database');

		$data['categories'] = $this->database->getSinglePath($product_id);
		$this->load->view('path_message', $data);
	}
}