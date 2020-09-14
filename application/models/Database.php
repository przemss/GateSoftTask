<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Model {
	public function index() {

	}

	public function getSinglePath($product_id){
		$this->db->select('category_id');
		$this->db->from('product');
		$this->db->where('product_id', $product_id);
		$query = $this->db->get();
		$cat_id = $query->first_row()->category_id;

		$query = $this->db->query('SELECT parent.name FROM category AS node,
									category AS parent
									WHERE node.lft BETWEEN parent.lft AND parent.rgt
									AND node.id = '.$cat_id.'
									ORDER BY parent.lft');
		return $query->result();
	}
}